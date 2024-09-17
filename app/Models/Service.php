<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name_ru', 'name_en', 
        'short_info_ru', 'short_info_en',
        'full_info_ru', 'full_info_en',
        'cars', 'image', 'is_active',
    ];

    protected $casts = [
        'cars' => 'array', // Приведение поля cars к массиву
    ];
}
