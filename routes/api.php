<?php

use App\Http\Controllers\Cv\CvApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cv_profiles', [CvApiController::class, 'profiles']);
Route::get('/cv_job_titles', [CvApiController::class, 'jobTitles']);

