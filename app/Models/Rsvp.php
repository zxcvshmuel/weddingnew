<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rsvp extends Model
{
    use HasFactory;

    protected $table = 'rsvps';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invitation_id',
        'name',
        'email',
        'is_attending',
        'message',
        'additional_data',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'additional_data' => 'array',
        'is_attending' => 'boolean',
    ];

    // Relationships

    /**
     * Get the invitation associated with the RSVP.
     */
    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
