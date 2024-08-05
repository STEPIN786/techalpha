<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\InquiryController;
use App\Http\Controllers\admin\ProductcategoryController;
use App\Http\Controllers\frontend\FrontendController;


// frontend route start
Route::get('/', [FrontendController::class, 'home'])->name('front-home');
Route::get('/properties/{slug}', [FrontendController::class, 'properties_list'])->name('front-properties-list');
Route::get('/properties/{slug}/{slug2}', [FrontendController::class, 'properties_detail'])->name('front-properties-detail');

Route::get('/buy/properties', [FrontendController::class, 'buy_list'])->name('front-buy-list');
Route::get('/buy/{slug}/{slug2}', [FrontendController::class, 'buy_detail'])->name('front-buy-detail');

Route::get('/sell/properties', [FrontendController::class, 'sell_list'])->name('front-sell-list');
Route::get('/sell/{slug}/{slug2}', [FrontendController::class, 'sell_detail'])->name('front-sell-detail');

Route::get('/rent/properties', [FrontendController::class, 'rent_list'])->name('front-rent-list');
Route::get('/rent/{slug}/{slug2}', [FrontendController::class, 'rent_detail'])->name('front-rent-detail');

Route::post('/save/inquiry', [FrontendController::class, 'storeInquiry'])->name('front-save-inquiry');
Route::get('/blog', [FrontendController::class, 'blog_list'])->name('front-blog-list');
Route::get('/blog/{slug}', [FrontendController::class, 'blog_detail'])->name('front-blog-detail');
Route::get('/about', [FrontendController::class, 'about'])->name('front-about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('front-contact');
// frontend route end

