<?php

use App\Notifications\ExampleNotification;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\CarClassController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Middleware\CheckIfNotFilament;
use App\Http\Middleware\SetLocale;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('page.home');
    Route::get('/about', [AboutController::class, 'index'])->name('page.about');
    Route::get('/class/{carClass}', [CarClassController::class, 'index'])->name('page.carclass');
});