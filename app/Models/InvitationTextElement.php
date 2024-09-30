<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvitationTextElement extends Model
{
    use HasFactory;

    protected $table = 'invitation_text_elements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invitation_id',
        'frame_text_element_id',
        'custom_text',
    ];

    // Relationships

    /**
     * Get the invitation that owns this text element.
     */
    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }

    /**
     * Get the frame text element associated with this custom text.
     */
    public function frameTextElement()
    {
        return $this->belongsTo(FrameTextElement::class);
    }
}
