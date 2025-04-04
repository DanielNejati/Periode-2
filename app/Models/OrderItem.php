<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['quantity', 'price'];
    // A orderitem belongs to an order
    public function Order(){
        return $this->belongsTo(Order::class);
    }
    // A orderitem belongs to a ticket
    public function Ticket(){
        return $this->belongsTo(Ticket::class);
    }
}
