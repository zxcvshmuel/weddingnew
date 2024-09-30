<?php

namespace App\Models;

use Filament\Actions\Concerns\HasForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;;

class Frame extends Model
{
    use HasFactory, HasForm;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'svg_path', 'thumbnail_path', 'description', 'additional_data'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'additional_data' => 'array',
    ];

    // Relationships

    /**
     * The categories that the frame belongs to.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Get the text elements for the frame.
     */
    public function textElements()
    {
        return $this->hasMany(FrameTextElement::class);
    }

    /**
     * Get the invitations that use this frame.
     */
    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}
