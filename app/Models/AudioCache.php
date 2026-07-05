<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioCache extends Model
{
    use HasFactory;

    protected $table = 'audio_cache';

    protected $fillable = [
        'text_hash',
        'text',
        'lang',
        'provider',
        'voice_id',
        'file_path',
    ];
}
