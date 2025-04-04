<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable =
        ['type', 'name', 'price', 'stock',];

    public function shoppingcartItems(){
        return $this->hasMany(ShoppingCartItem::class);
    }
}
