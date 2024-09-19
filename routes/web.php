<?php

use App\Http\Controllers\CatalogController;
use App\Notifications\ExampleNotification;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\ArticlesController;
use App\Http\Controllers\Client\CarClassController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\CooperationController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\OrderServiceController;
use App\Http\Controllers\Client\QuestionController;
use App\Http\Controllers\Client\ServiceController;
use App\Http\Middleware\CheckIfNotFilament;
use App\Http\Middleware\SetLocale;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('page.home');
    Route::get('/about', [AboutController::class, 'index'])->name('page.about');
    Route::get('/class/{carClass}', [CarClassController::class, 'index'])->name('page.carclass');
    Route::get('/service/{service}', [ServiceController::class, 'index'])->name('page.service');
    Route::get('/other-service/{orderService}', [OrderServiceController::class, 'index'])->name('page.otherService');
    Route::get('/cooperation', [CooperationController::class, 'index'])->name('page.cooperation');
    Route::get('/contacts', [ContactController::class, 'index'])->name('page.contacts');
    Route::get('/catalogs', [CatalogController::class, 'index'])->name('page.catalog');
    Route::get('/questions', [QuestionController::class, 'index'])->name('page.questions');
    Route::get('/articles', [ArticlesController::class, 'index'])->name('page.articles');
    Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('page.article-single');
});