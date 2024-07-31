<?php

namespace App\Livewire;

use App\Models\Chat;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatSpace extends Component
{

    public $loadmessages;

    public function mount(){
        $this->loadmessages = Chat::with('user')->get();
    }

    #[On('chat-sent')]
    public function chatSent(){
        $this->loadmessages = Chat::with('user')->get();
        $this->dispatch('scroll-top');
    }

    public function render()
    {
        return view('livewire.chat-space',[
            'messages' => $this->loadmessages
        ]);
    }
}
