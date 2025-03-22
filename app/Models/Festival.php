<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;
    protected $primaryKey = 'festival_id';

    // A festival has many busrides
    public function BusRide(){
        $this->hasMany(Busride::class);
    }
    //A bus belongs to a festival
    public function Bus(){
        $this->belongsTo(Busride::class);
    }
}
