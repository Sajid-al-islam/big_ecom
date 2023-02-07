<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class TestPage2 extends Component
{
    public function render()
    {
        return view('livewire.test.test-page2')->extends('frontend.layout');
    }
}
