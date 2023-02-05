<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $first_name, $last_name, $email, $mobile_number, $password;

    public function mount()
    {
        if(Auth::check()) {
            return redirect()->route('frontend.profile');
        }
    }

    public function render()
    {
        return view('livewire.register')->extends('frontend.layout', [
            'meta' => [
                "title" => "Register a new account" . " - " . $_SERVER['SERVER_NAME'],
            ],
        ]);
    }

    
    public function register_submit()
    {
        $validatedDate = $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'string',
            'email' => 'required|email',
            'mobile_number' => 'required',
            'password' => 'required',
        ]);


        $this->password = Hash::make($this->password); 

        
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'mobile_number' => $this->mobile_number,
            'email' => $this->email,
            'password' => $this->password]);
        
        

        session()->flash('message', 'Your registration completed successfully.');

        Auth::login($user);

        return redirect()->route('frontend.profile');
    }
    
}
