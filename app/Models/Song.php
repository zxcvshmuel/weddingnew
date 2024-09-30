<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'artist', 'file_path', 'additional_data'];

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
     * Get the invitations that use this song.
     */
    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}
