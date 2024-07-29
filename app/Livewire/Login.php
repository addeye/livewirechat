<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;

    public $password;

    public function login()
    {
        // dd($this->email, $this->password);
        Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        return redirect('/chat');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
