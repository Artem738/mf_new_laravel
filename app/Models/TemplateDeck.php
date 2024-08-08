<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateDeck extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'is_public',
    ];


    // Связь с моделью Flashcard
    public function flashcards()
    {
        return $this->hasMany(Flashcard::class);
    }
}
