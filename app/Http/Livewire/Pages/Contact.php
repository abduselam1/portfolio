<?php

namespace App\Http\Livewire\Pages;

use App\Models\Contact as ModelsContact;
use Filament\Notifications\Notification;
use Livewire\Component;

class Contact extends Component
{

    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',

    ];


    public function sendMessage()
    {
        // dd("hello");
        $this->validate();

        $newMessage = ModelsContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message
            
        ]);

        Notification::make()->title("Send successfully")->success()->send();
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }


    public function render()
    {
        return view('livewire.pages.contact');
    }
}
