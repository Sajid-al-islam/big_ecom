<?php

namespace App\Http\Livewire\Test;

use App\Http\Controllers\CartController;
use Livewire\Component;

class TestPage2innerButton extends Component
{
    protected $products = [];
    protected CartController $cart;

    public function __construct() {
        $this->cart = new CartController();
        $this->products = $this->cart->get();
    }

    public function render()
    {
        return view('livewire.test.test-page2inner-button',[
            'products' => $this->products,
        ]);
    }

    public function remove_from_cart($id)
    {
        $this->cart->remove($id);
        $this->emitTo('test.test-counter', 'update');
        $this->products = session()->get('carts');
    }
}
