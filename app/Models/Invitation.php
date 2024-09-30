<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invitation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'frame_id',
        'song_id',
        'effect_id',
        'title',
        'message',
        'event_date',
        'location',
        'details',
        'unique_link',
        'status',
        'design_data',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'design_data' => 'array',
        'event_date' => 'date',
        'details' => 'array',
    ];

    // Relationships

    /**
     * Get the customer who owns the invitation.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the frame used for the invitation.
     */
    public function frame()
    {
        return $this->belongsTo(Frame::class);
    }

    /**
     * Get the song associated with the invitation.
     */
    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    /**
     * Get the text elements with custom text for this invitation.
     */
    public function textElements()
    {
        return $this->hasMany(InvitationTextElement::class);
    }

    /**
     * Get the RSVPs for the invitation.
     */
    public function rsvps()
    {
        return $this->hasMany(Rsvp::class);
    }

    /**
     * Get the order associated with the invitation.
     */
    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
