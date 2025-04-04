<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['totalprice'];
    // A order could have many items
    public function OrderItems(){
        return $this->hasMany(OrderItem::class);
    }

    // A order belongs to a user
    public function User(){
        return $this->belongsTo(User::class);
    }
}
