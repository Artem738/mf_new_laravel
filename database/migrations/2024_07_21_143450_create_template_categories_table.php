<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('template_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('lang', 3);
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('template_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('template_categories');
    }
};
