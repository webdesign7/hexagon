<?php


use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactFormController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/about', AboutController::class
)->name('about');


Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');

Route::get("page/{page}", [PageController::class, 'show'])
    ->name('page');

Route::get('/', HomepageController::class)->name('home');
