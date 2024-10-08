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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('telegram_id')->unique()->nullable();
            $table->string('tg_first_name')->nullable();
            $table->string('tg_last_name')->nullable();
            $table->string('tg_username')->nullable();
            $table->string('tg_language_code')->nullable();
            $table->string('language_code')->nullable();
            $table->boolean('allows_write_to_pm')->default(false);
            $table->integer('user_lvl')->nullable();
            $table->double('base_font_size')->nullable();
            
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
