<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    protected $primaryKey = 'user_id';

    // A user be assigned to multiple busses
    public function Busses(){
        return $this->hasMany(Bus::class);
    }
    // A user has one shoppingcart

    public function Shoppingcart(){
        return $this->hasOne(ShoppingCart::class);
    }

    // A user has many orders
    public function Orders(){
        return $this->hasMany(Order::class);
    }

    // If the user has made an account the shoppingcart would be created and assigned to the user
    protected static function booted(): void
    {
        static::created(function (User $user) {
            $user->Shoppingcart()->create();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'tel',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
