<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\servicesController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\contactController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\shopController;


Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/Project',[ProjectController::class,'index']);
Route::get('/services',[servicesController::class,'index']);
Route::get('/shop',[shopController::class,'index']);
Route::get('/contact',[contactController::class,'index']);

Route::get('/warehouse', function () {
    return view('frontend.warehouse');
});


// Route for multi-tier-stage.blade.php
Route::view('/multi-tier-stage', 'frontend.multi-tier-stage');

// Route for pigeon-hole.blade.php
Route::view('/pigeon-hole', 'frontend.pigeon-hole');

// Route for heavy-Duty-storage.blade.php
Route::view('/heavy-Duty-storage', 'frontend.heavy-Duty-storage');

// Route for angle-frame.blade.php
Route::view('/angle-frame', 'frontend.angle-frame');


Route::get('/racks-on-rent', function () {
    return view('frontend.racks_on_rent');
});


