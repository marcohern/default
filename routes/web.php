<?php
use App\Http\Controllers\Cv\CvController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv', [CvController::class, 'view'])->name('cv');
Route::get('/cv/es', [CvController::class, 'viewEs'])->name('cvEs');
Route::get('/cv/en', [CvController::class, 'viewEn'])->name('cvEn');
Route::post('/cv/contact', [CvController::class, 'contact'])->name('web-contact');
