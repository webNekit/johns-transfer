<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title_ru',
        'hero_title_en',
        'hero_image',
        'catalog_title_ru',
        'catalog_title_en',
        'catalog_description_ru',
        'catalog_description_en',
        'process_title_ru',
        'process_title_en',
        'process_description_ru',
        'process_description_en',
        'process_items',
        'advantages_title_ru',
        'advantages_title_en',
        'advantages_description_ru',
        'advantages_description_en',
        'advantages_items',
        'about_title_ru',
        'about_title_en',
        'about_description_ru',
        'about_description_en',
        'about_image',
        'about_requirements',
        'articles_title_ru',
        'articles_title_en',
        'articles_description_ru',
        'articles_description_en',
        'cooperation_title_ru',
        'cooperation_title_en',
        'cooperation_description_ru',
        'cooperation_description_en',
        'question_title_ru',
        'question_title_en',
        'question_description_ru',
        'question_description_en',
        'contact_phones',
        'contact_emails',
        'contact_address',
        'contact_map_link',
        'social_links',
        'whatsapp_title',
        'whatsapp_link',
        'site_name',
        'site_logo',
        'site_description_ru',
        'site_description_en'
    ];

    protected $casts = [
        'process_items' => 'array',
        'advantages_items' => 'array',
        'about_requirements' => 'array',
        'contact_phones' => 'array',
        'contact_emails' => 'array',
        'social_links' => 'array',
    ];

    public function getHeroTitleAttribute()
    {
        $locale = App::getLocale();
        return $this->{"hero_title_{$locale}"};
    }

    // Accessor для описания catalog
    public function getCatalogDescriptionAttribute()
    {
        $locale = App::getLocale();
        return $this->{"catalog_description_{$locale}"};
    }

    // Accessor для process repeater
    public function getProcessItemsAttribute($value)
    {
        $items = json_decode($value, true);
        $locale = App::getLocale();

        foreach ($items as &$item) {
            $item['name'] = $item["item_title_{$locale}"];
            $item['description'] = $item["item_description_{$locale}"];
        }

        return $items;
    }

    public function getAdvantagesTitleAttribute()
    {
        $locale = App::getLocale();
        return $this->{"advantages_title_{$locale}"} ?? ''; // Возвращаем заголовок на нужном языке
    }
    public function getAdvantagesDescriptionAttribute()
    {
        $locale = App::getLocale();
        return $this->{"advantages_description_{$locale}"} ?? ''; // Возвращаем описание на нужном языке
    }

    public function getAdvantagesItemsAttribute($value)
    {
        $items = json_decode($value, true);
        $locale = App::getLocale();

        foreach ($items as &$item) {
            $item['title'] = $item["item_title_{$locale}"];
            $item['description'] = $item["item_description_{$locale}"];
        }

        return $items;
    }
}
