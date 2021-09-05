<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function format()
    {
        return $this->hasOne(Format::class);
    }

    public function cover()
    {
        return $this->hasOne(Cover::class);
    }

    public function images()
    {
        return $this->hasMany(CartItemImage::class);
    }
}
