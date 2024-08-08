<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('template_flashcards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deck_id');
            $table->text('question');
            $table->text('answer');
            $table->integer('weight')->default(0);
            $table->timestamps();

            $table->foreign('deck_id')->references('id')->on('template_decks')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('template_flashcards');
    }
};
