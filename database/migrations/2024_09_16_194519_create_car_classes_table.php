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
        Schema::create('car_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name_ru'); // Название класса на русском языке
            $table->string('name_en'); // Название класса на английском языке
            $table->text('short_info_ru')->nullable(); // Краткая информация на русском
            $table->text('short_info_en')->nullable(); // Краткая информация на английском
            $table->longText('full_info_ru')->nullable(); // Полная информация на русском
            $table->longText('full_info_en')->nullable(); // Полная информация на английском
            $table->string('keywords_ru')->nullable();
            $table->string('keywords_en')->nullable();
            $table->json('cars')->nullable(); // JSON поле для списка машин и их цен
            $table->string('icon')->nullable();
            $table->string('image')->nullable(); // Поле для изображения
            $table->boolean('is_active')->default(true); // Поле для статуса
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_classes');
    }
};
