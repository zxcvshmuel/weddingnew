<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Filament\Models\Contracts\HasName;

class Customer extends Authenticatable implements HasName
{
    use Notifiable, HasFactory;

    protected $guard = 'customer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'profile_data'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'profile_data' => 'array',
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the name of the customer for display in Filament or customer panel.
     *
     * @return string
     */
    public function getFilamentName(): string
    {
        return $this->name;
    }

    // Relationships

    /**
     * Get the invitations for the customer.
     */
    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }

    /**
     * Get the orders for the customer.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
