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
            $table->string('image'); // Путь к изображению
            $table->boolean('is_active')->default(true); // Флаг активности
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
