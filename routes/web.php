<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('frontend.contact.submit');

// Route to clear cache for shared hosting/cPanel without SSH
Route::get('/clear-cache', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    return 'Cache, Config, View, and Route caches have been cleared successfully!';
});