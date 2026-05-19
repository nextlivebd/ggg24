<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('frontend.contact.submit');