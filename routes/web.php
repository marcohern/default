<?php
use App\Http\Controllers\Cv\CvController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv', [CvController::class, 'view'])->name('cv');
