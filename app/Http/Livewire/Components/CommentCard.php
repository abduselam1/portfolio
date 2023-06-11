<?php

namespace App\Http\Livewire\Components;

use App\Models\Comment;
use Livewire\Component;

class CommentCard extends Component
{
    public $comment;

    public function delete(){
        if (auth()->id() == $this->comment->user->id) {
            $this->comment->delete();
            $this->emit('commentDeleted');
        }
    }

    public function mount(Comment $comment){
        // dd($comment);
//        $a = preg_split("/\r\n|\n|\r/", $comment->comment);
//        $comment->comment = implode('<br>',$a);
    }

    function like()
    {
        $this->comment->likes()->create([
            'user_id' => auth()->id()
        ]);


    }
    function unlike()
    {
        $this->comment->likes()->where('user_id',auth()->id())->first()->delete();

    }

    public function render()
    {
        return view('livewire.components.comment-card');
    }
}
