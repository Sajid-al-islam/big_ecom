<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use Livewire\Component;

class CartCount extends Component
{
    private $cart_handler;
    public $cart_count = 0;
    // public $carts;

    protected $listeners = [
        'cartAdded' => 'increment_cart_qty',
        'cartRemoved' => 'render',
        'cartUpdated' => 'render'
    ];

    public function __construct()
    {
        $this->cart_handler = new CartController();
        $this->cart_count = $this->cart_handler->cart_count();
    }
    public function render()
    {
        // $this->carts = $this->cart_handler->get();
        return view('livewire.cart-count');
    }

    public function increment_cart_qty($id, $qty = 1)
    {
        $this->cart_handler->add_to_cart($id, $qty);
        $this->cart_count = $this->cart_handler->cart_count();
    }
}
