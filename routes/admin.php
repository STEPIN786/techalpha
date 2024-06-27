<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordController as AuthForgotPasswordController;
use App\Http\Controllers\Admin\HomebannerController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




    Route::get('/', function () { return redirect()->route('login'); });
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', function () { return view('admin.register'); });
    Route::post('/register', [RegisterController::class, 'register']);



    Route::get('password/forget',  function () { return view('admin.forgot-password'); })->name('password.forget');
    Route::post('password/email', [AuthForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');



    Route::get('a/certificate/{id}/student', [FrontendController::class, 'view_student'])->name('certificate.view.student');
    Route::get('a/certificate/qr-generate/{id}', [FrontendController::class, 'generateQrCode'])->name('certificate.qr');


    Route::group(['middleware' => 'auth' ], function () {



        // logout route
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin-logout');


        // dashboard route  
        Route::get('dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
        
        Route::get('/certificate/add', [HomebannerController::class, 'add'])->name('certificate.add');
        Route::post('/certificate/store', [HomebannerController::class, 'store'])->name('certificate.store');
        Route::get('/certificate/list', [HomebannerController::class, 'list'])->name('certificate.list');
        Route::get('/certificate/view/{id}', [HomebannerController::class, 'view'])->name('certificate.view');
        Route::get('/certificate/edit/{id}', [HomebannerController::class, 'edit'])->name('certificate.edit');
        Route::post('/certificate/update', [HomebannerController::class, 'update'])->name('certificate.update');
        Route::get('/certificate/delete/{id}', [HomebannerController::class, 'delete'])->name('certificate.delete');

    });








