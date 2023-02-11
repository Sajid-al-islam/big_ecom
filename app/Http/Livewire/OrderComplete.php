<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderComplete extends Component
{
    public function render()
    {
        return view('livewire.order-complete')->extends('layouts.app');
    }
}
