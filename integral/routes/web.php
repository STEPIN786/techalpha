<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\coursedetailsController;
use App\Http\Controllers\teamdeatailsController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\aboutController;

Route::get('/',[homeController::class,'index']);
Route::get('integral/about',[aboutController::class,'index']);
Route::get('/course',[courseController::class,'index']);
Route::get('/course-details',[coursedetailsController::class,'index']);
Route::get('/team-details',[teamdeatailsController::class,'index']);
Route::get('/contact',[contactController::class,'index']);
Route::get('/gallery',[galleryController::class,'index']);