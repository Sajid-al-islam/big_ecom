<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $appends = [
        "product_name"
    ];

    public function getProductNameAttribute()
    {
        return Product::where('id', $this->product_id)->select('product_name')->first();
    }
}
