<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('template_decks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();            
            $table->string('deck_lang')->nullable();
            $table->string('question_lang')->nullable();
            $table->string('answer_lang')->nullable();

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('template_categories')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('template_decks');
    }
};
