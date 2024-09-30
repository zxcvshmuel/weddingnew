<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FrameTextElement extends Model
{
    use HasFactory;

    protected $table = 'frame_text_elements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'frame_id',
        'title',
        'uid',
        'default_text',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
    ];

    // Relationships

    /**
     * Get the frame that owns the text element.
     */
    public function frame()
    {
        return $this->belongsTo(Frame::class);
    }

    /**
     * Get the invitation text elements associated with this frame text element.
     */
    public function invitationTextElements()
    {
        return $this->hasMany(InvitationTextElement::class);
    }
}
