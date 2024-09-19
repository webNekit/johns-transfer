<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru', 'title_en',
        'short_description_ru', 'short_description_en',
        'full_description_ru', 'full_description_en',
        'keywords_ru', 'keywords_en',
        'image', 'is_active'
    ];

    // Опционально: методы для извлечения данных на основе текущего языка
    public function getTitleAttribute()
    {
        return $this->{'title_' . App::getLocale()};
    }

    public function getKeywordsAttribute()
    {
        return $this->{'keywords' . App::getLocale()};
    }

    public function getShortDescriptionAttribute()
    {
        return $this->{'short_description_' . App::getLocale()};
    }

    public function getFullDescriptionAttribute()
    {
        return $this->{'full_description_' . App::getLocale()};
    }
}
