<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busrit extends Model
{
    /** @use HasFactory<\Database\Factories\BusritFactory> */
    use HasFactory;

    protected $fillable = [
        'festival_id',
        'duur_busrit',
        'vertrektijd',
        'aankomsttijd',
        'aankomst_locatie',
        'prijs',
        'beschikbare_stoelen',
        'vertrek_locatie',
    ];
    public function festival()
    {
        return $this->belongsTo(Festival::class);
    }
    public function beschikbareZitplekken(){
        return $this->beschikbare_stoelen > 0;
    }
}
