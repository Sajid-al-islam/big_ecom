<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $appends = [
        "image_link"
    ];

    public function getImageLinkAttribute()
    {
        return env('PHOTO_URL') . '/' . $this->image;
    }
}
