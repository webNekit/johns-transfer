<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_en',
        'text_ru',
        'text_en',
        'is_active',
    ];

    public function getNameAttribute()
    {
        $locale = App::getLocale();
        return $locale === 'ru' ? $this->title_ru : $this->title_en;
    }

    public function getTextAttribute()
    {
        $locale = App::getLocale();
        return $locale === 'ru' ? $this->text_ru : $this->text_en;
    }
}
