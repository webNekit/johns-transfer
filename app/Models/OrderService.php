<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ru', 'name_en', 
        'short_info_ru', 'short_info_en',
        'full_info_ru', 'full_info_en',
        'image', 'is_active',
        'keywords_ru', 'keywords_en',
    ];
}
