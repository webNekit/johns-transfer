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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru');
            $table->string('title_en');
            $table->text('short_description_ru');
            $table->text('short_description_en');
            $table->longText('full_description_ru');
            $table->longText('full_description_en');
            $table->string('image')->nullable();
            $table->string('keywords_ru')->nullable();
            $table->string('keywords_en')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
