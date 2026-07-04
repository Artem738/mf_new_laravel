<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'lang',
        'sort_order',
    ];

    public function parent()
    {
        return $this->belongsTo(TemplateCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(TemplateCategory::class, 'parent_id');
    }

    public function decks()
    {
        return $this->hasMany(TemplateDeck::class, 'category_id');
    }
}
