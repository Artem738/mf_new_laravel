<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateDeck extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'deck_lang',
        'question_lang',
        'answer_lang',
        'description',
    ];

    // Связь с моделью TemplateCategory
    public function category()
    {
        return $this->belongsTo(TemplateCategory::class, 'category_id');
    }

    // Связь с моделью TemplateFlashcard
    public function flashcards()
    {
        return $this->hasMany(TemplateFlashcard::class, 'deck_id');
    }
}
