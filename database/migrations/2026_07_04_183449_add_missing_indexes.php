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
        Schema::table('progress', function (Blueprint $table) {
            $table->unique(['flashcard_id', 'user_id']);
            $table->index('next_review_at');
        });

        Schema::table('flashcards', function (Blueprint $table) {
            $table->index('deck_id');
        });

        Schema::table('template_categories', function (Blueprint $table) {
            $table->index(['lang', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('progress', function (Blueprint $table) {
            $table->dropUnique(['flashcard_id', 'user_id']);
            $table->dropIndex(['next_review_at']);
        });

        Schema::table('flashcards', function (Blueprint $table) {
            $table->dropIndex(['deck_id']);
        });

        Schema::table('template_categories', function (Blueprint $table) {
            $table->dropIndex(['lang', 'parent_id']);
        });
    }
};
