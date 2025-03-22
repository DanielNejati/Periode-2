<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $primaryKey = 'bus_id';

    protected $fillable = [
        'user_id',
        'festival_id'
    ];


    // A bus belongs to a user
    public function User(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    // A bus belongs to a festival
    public function Festival(){
        return $this->belongsTo(Festival::class, 'festival_id', 'festival_id');
    }

}
