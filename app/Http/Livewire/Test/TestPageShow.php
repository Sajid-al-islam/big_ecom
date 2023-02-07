<?php

namespace App\Http\Livewire\Test;

use App\Models\Product;
use Livewire\Component;

class TestPageShow extends Component
{
    public $product;
    public function mount($id)
    {
        $this->product = Product::find($id);
    }
    public function render()
    {
        return view('livewire.test.test-page-show')->extends('frontend.layout');
    }
}
