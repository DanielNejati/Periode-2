<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCartItem extends Model
{
    protected $fillable = ['quanitity'];
    // A shoppingcartitem belongs to a shoppingcart
    public function ShoppingCartItem(){
        return $this->belongsTo(ShoppingCart::class);
    }

    // A shoppingcartitem belongs to a ticket
    public function Ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    // Function to calculate the total value of the shopping cart item
    public function totalValue()
    {
        return $this->ticket->price * $this->quantity;
    }

}
