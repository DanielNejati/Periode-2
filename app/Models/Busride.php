<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busride extends Model
{
    /** @use HasFactory<\Database\Factories\BusrideFactory> */
    use HasFactory;
    protected $primaryKey = 'busride_id';

    // A busride belongs to a festival
    public function Festival(){
        $this->belongsTo(Festival::class, 'festival_id', 'festival_id');
    }

    // A busride belongs to a bus
    public function Bus(){
        $this->belongsTo(Busride::class, 'bus_id', 'bus_id');
    }
}
