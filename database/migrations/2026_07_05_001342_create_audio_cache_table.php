<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('audio_cache', function (Blueprint $table) {
            $table->id();
            $table->string('text_hash')->index();
            $table->text('text');
            $table->string('lang', 10);
            $table->string('provider', 50);
            $table->string('voice_id', 50);
            $table->string('file_path');
            $table->timestamps();

            // To avoid generating duplicate files for the exact same text, voice, and language:
            $table->unique(['text_hash', 'voice_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audio_cache');
    }
};
