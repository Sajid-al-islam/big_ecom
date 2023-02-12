<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function order_information()
    {
        return $this->hasMany('App\Models\OrderInformation','order_id','id');
    }
    public function order_address(){
        return $this->hasOne('App\Models\OrderAddress','order_id','id');
    }
    public function order_details()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }
}
