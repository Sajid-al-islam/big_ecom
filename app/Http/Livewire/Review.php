<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\ProductReview;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $user = [];
    protected $reviews=[];
    public function mount()
    {
        if(!Auth::check()) {
            return redirect()->route('website_login');
        }
    }
    public function render()
    {
        $this->user = Auth::user();
        if($this->user) {
            $this->reviews = ProductReview::where('user_id', $this->user->id)->paginate(5);
        }
        return view('livewire.review', [
            'reviews' => $this->reviews
        ])->extends('frontend.layout', [
            'meta' => [
                "title" => "Profile page" . " - " . $_SERVER['SERVER_NAME'],
            ],
        ]);
    }
}
