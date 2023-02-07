<?php

namespace App\Http\Livewire\Test;

use App\Http\Controllers\CartController;
use Livewire\Component;

class TestCounter extends Component
{
    public $count = 0;
    protected CartController $cart;
    protected $listeners = ['increment','update','remove','resets'];

    public function __construct() {
        $this->cart = new CartController();
        $this->count = $this->cart->cart_count();
    }
    public function increment($id, $qty=1)
    {
        $this->cart->add_to_cart($id, $qty);
        $this->count = $this->cart->cart_count();
    }

    public function update()
    {
        $this->count = $this->cart->cart_count();
    }

    public function remove($id)
    {
        $this->cart->remove($id);
        $this->count = $this->cart->cart_count();
    }

    public function resets()
    {
        $this->cart->emptyCart();
        $this->count = 0;
    }

    public function render()
    {
        return view('livewire.test.test-counter');
    }
}
