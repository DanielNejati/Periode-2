<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;
    protected $primaryKey = 'festival_id';

    protected $fillable = [
        'name',
        'duration',
        'location',
        'festival_type',
        'price',
    ];

    // A festival has many busrides
    public function BusRide(){
        $this->hasMany(Busride::class);
    }
}
