<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class TestPage1 extends Component
{
    public function render()
    {
        return view('livewire.test.test-page1')
            ->extends('frontend.layout');
    }
}
