<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    /** @use HasFactory<\Database\Factories\FestivalFactory> */
    use HasFactory;

    protected $fillable = [
        'naam',
        'datum',
        'genre',
        'tijdsduur_festival',
        'locatie',
        'stad',
        'prijs',
        'festival_website_url',
        'beschrijving',
        'afbeelding'
    ];
    public function busRitten()
    {
        return $this->hasMany(busritten::class);
    }
//    Dit geeft aan dat het festival model meerdere registraties kan hebben
    public function registraties(){
        return $this->hasMany(Registratie::class);
    }
    public function gebruikers()
    {
        return $this->belongsToMany(User::class);
    }
}
