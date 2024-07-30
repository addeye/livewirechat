<?php

namespace App\Livewire;

use App\Events\ShowMessageChat;
use App\Models\Chat;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatRoom extends Component
{
    public $message;
    public User $user;


    public function sendMessage()
    {
        $this->validate([
            'message' => 'required'
        ]);

        Chat::create([
            'user_id' => auth()->user()->id,
            'message' => $this->message
        ]);

        ShowMessageChat::dispatch($this->message, auth()->user()->id);

        $this->message = '';

    }

    #[On('echo:room-public,ShowMessageChat')]
    public function onMessageReceived($event){
        // dd($event);
        if(auth()->user()->id == $event['user']['id']){
            // $this->js("alert('message received!')");
        }
    //    $this->js("alert('message received!')");
    }


    public function mount()
    {
        $this->message = '';
        $this->user = auth()->user();
    }


    public function render()
    {
        return view('livewire.chat-room',[
            'messages' => Chat::with('user')->get(),
            'users' => User::all()
        ]);
    }
}
