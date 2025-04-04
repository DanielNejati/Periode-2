<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    // A shoppingcart could have many items
    public function ShoppingItems()
    {
        return $this->hasMany(ShoppingCartItem::class);
    }

    // a shoppingcart belongs to a user
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    // Function to calculate the total value of the shopping cart
    public function totalValue(){
        return $this->ShoppingItems->sum(function ($ShoppingItem) {
            return $ShoppingItems->ticket->price * $ShoppingItem->quantity;
        });
    }

    // Function to check if the shopping cart is empty

    public function isEmpty(){
        return $this->ShoppingItems->count() === 0;
    }
}
