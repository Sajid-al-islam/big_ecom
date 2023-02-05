<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function mount()
    {
        if(Auth::check()) {
            return redirect()->route('frontend.profile');
        }
    }
    
    public function render()
    {
        return view('livewire.login')->extends('frontend.layout', [
            'meta' => [
                "title" => "Login into your account" . " - " . $_SERVER['SERVER_NAME'],
            ],
        ]);
    }
    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            session()->flash('message', "You are Logged in successfully.");
            return redirect()->route('frontend.profile');
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }
}
