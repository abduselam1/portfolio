<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use App\Models\BlogView;
use App\Models\Comment;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Show extends Component implements HasForms
{
    use InteractsWithForms;


    public $blog;
    public $date;
    public $comment;
    public $comments;

    public $showLoginForm = false;
    public $email;
    public $password;
    public $name;
    public $password_confirmation;
    public $remember_me = false;
    public $address;

    public $listeners = ['commentDeleted'];

    public function commentDeleted()
    {
        $this->comments = $this->blog->comment = Comment::where('blog_id', $this->blog->id)->orderBy('created_at','desc')->get();

    }

    public function storeComment():void
    {

        if (auth()) {
            $this->validate([
                'comment' => 'required'
            ]);
//             dd('got here');
            $this->blog->comments()->create([
                'user_id' =>auth()->id(),
                'comment' => implode('<br>', preg_split("/\r\n|\n|\r/", $this->comment))
            ]);
            $this->comment = null;
            $this->comments = $this->blog->comment = Comment::where('blog_id',$this->blog->id)->orderBy('created_at','desc')->get();
            Notification::make()->title('Commented')->success()->send();
        }else{
            $this->showLoginForm = true;
        }
        return;
    }

    public function login()
    {
        // dd(request()->header('Referer'));
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            return redirect(request()->header('Referer'));
        }else{
            return $this->addError('email','This credential doesn\'t exist to our record');
        }

    }

    public function register()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        return redirect(request()->header('Referer'));

        // dd($this->name);

    }

    function like()
    {
        $this->blog->likes()->create([
            'user_id' => auth()->id()
        ]);


    }
    function unlike()
    {
        $this->blog->likes()->where('user_id',auth()->id())->first()->delete();

    }



    public function mount(Request $request,Blog $blog){
        $this->comments = $blog->comments()->orderBy('created_at','desc')->get();
        $this->address = $request->header('Referer');
        $blog->views()->create([
            'user_id' => auth() ? \auth()->id() : null,
            'ip_address' => $request->ip()
        ]);

        // dd($this->blog->comments);
    }


    public function render()
    {
        return view('livewire.blog.show');
    }
}
