<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class CarClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ru', 'name_en', 
        'short_info_ru', 'short_info_en',
        'full_info_ru', 'full_info_en',
        'cars', 'image', 'is_active',
        'keywords_ru', 'keywords_en',
        'icon',
    ];
    protected $casts = [
        'cars' => 'array', // Приведение поля cars к массиву
    ];


    public function getNameAttribute()
    {
        $locale = App::getLocale();
        return $locale === 'ru' ? $this->name_ru : $this->name_en;
    }

    // Аксессор для 'short_info' на основе локали
    public function getShortInfoAttribute()
    {
        $locale = App::getLocale();
        return $locale === 'ru' ? $this->short_info_ru : $this->short_info_en;
    }

    // Аксессор для 'full_info' на основе локали
    public function getFullInfoAttribute()
    {
        $locale = App::getLocale();
        return $locale === 'ru' ? $this->full_info_ru : $this->full_info_en;
    }

    public function getKeywordsAttribute()
    {
        $locale = App::getLocale();
        return $locale === 'ru' ? $this->keywords_ru : $this->keywords_en;
    }
}
