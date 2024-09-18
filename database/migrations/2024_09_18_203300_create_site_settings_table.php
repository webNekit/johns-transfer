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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            // Секция hero
            $table->string('hero_title_ru');
            $table->string('hero_title_en');
            $table->string('hero_image');
            
            // Секция catalog
            $table->string('catalog_title_ru');
            $table->string('catalog_title_en');
            $table->text('catalog_description_ru');
            $table->text('catalog_description_en');
            
            // Секция process
            $table->string('process_title_ru');
            $table->string('process_title_en');
            $table->text('process_description_ru');
            $table->text('process_description_en');
            $table->json('process_items'); // repeater

            // Секция advantages
            $table->string('advantages_title_ru');
            $table->string('advantages_title_en');
            $table->text('advantages_description_ru');
            $table->text('advantages_description_en');
            $table->json('advantages_items'); // repeater
            
            // Секция about
            $table->string('about_title_ru');
            $table->string('about_title_en');
            $table->text('about_description_ru');
            $table->text('about_description_en');
            $table->string('about_image');
            $table->json('about_requirements'); // repeater

            // Секция articles
            $table->string('articles_title_ru');
            $table->string('articles_title_en');
            $table->text('articles_description_ru');
            $table->text('articles_description_en');

            // Секция cooperation
            $table->string('cooperation_title_ru');
            $table->string('cooperation_title_en');
            $table->text('cooperation_description_ru');
            $table->text('cooperation_description_en');

            // Секция question
            $table->string('question_title_ru');
            $table->string('question_title_en');
            $table->text('question_description_ru');
            $table->text('question_description_en');

            // Контактная информация
            $table->json('contact_phones'); // repeater для номеров телефонов
            $table->json('contact_emails'); // repeater для email
            $table->string('contact_address');
            $table->string('contact_map_link');
            $table->json('social_links'); // repeater соц.сети
            $table->string('whatsapp_title');
            $table->string('whatsapp_link');

            // Общее о сайте
            $table->string('site_name');
            $table->string('site_logo');
            $table->text('site_description_ru');
            $table->text('site_description_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
