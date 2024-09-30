<?php

namespace App\Models;

use Filament\Actions\Concerns\HasForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, HasForm;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * Get the frames associated with the category.
     */
    public function frames()
    {
        return $this->belongsToMany(Frame::class);
    }
}
