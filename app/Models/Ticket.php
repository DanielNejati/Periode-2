<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable =
        ['bus_ride_id', 'user_id', 'price'];

    public function busrides(){
        return $this->belongsTo(Busride::class);
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
