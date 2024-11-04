<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('send-email', [EmailController::class, 'sendEmail'])->name('send-email');

Route::get('/cover-letter', function () {
    return view('cover');
})->name('cover');
