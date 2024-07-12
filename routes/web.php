<?php

use App\Http\Controllers\Frontend\HomeController;
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

//Language Translation
Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');



Route::post('/connect', [App\Http\Controllers\Frontend\AboutController::class, 'connectMail'])->name('connect');

Route::get('/', [App\Http\Controllers\Frontend\AboutController::class, 'home'])->name('home');
Route::get('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');
Route::post('/contact-submit', [App\Http\Controllers\Frontend\ContactController::class, 'submitContactForm'])->name('contact.submit');

Route::get('/services-details', [App\Http\Controllers\Frontend\ServicesController::class, 'index'])->name('services-details');

Route::get('/gallery', [App\Http\Controllers\Frontend\GalleryController::class, 'index'])->name('gallery');

Route::get('/videos', [App\Http\Controllers\Frontend\VideosController::class, 'index'])->name('videos');

Route::get('/courses', [App\Http\Controllers\Frontend\CoursesController ::class, 'index'])->name('courses');

Route::get('/testimonials', [App\Http\Controllers\Frontend\TestimonialsController::class, 'index'])->name('testimonials');
Route::get('/services', [App\Http\Controllers\Frontend\ServicesController::class, 'index'])->name('services');



Route::get('/msoffice', [App\Http\Controllers\Frontend\MsOfficeController::class, 'index'])->name('msoffice');



Route::get('/cplus', [App\Http\Controllers\Frontend\CplusController::class, 'index'])->name('cplus');


Route::get('/advancedexcel', [App\Http\Controllers\Frontend\AdvancedExcelController::class, 'index'])->name('advancedexcel');


Route::get('/tallyprime', [App\Http\Controllers\Frontend\TallyPrimeController::class, 'index'])->name('tallyprime');

Route::get('/cprogramming', [App\Http\Controllers\Frontend\CProgrammingController::class, 'index'])->name('cprogramming');


Route::get('/javacore', [App\Http\Controllers\Frontend\JavaCoreController::class, 'index'])->name('javacore');


Route::get('/corepython', [App\Http\Controllers\Frontend\CorePythonController::class, 'index'])->name('corepython');



Route::get('/csharp', [App\Http\Controllers\Frontend\CsharpController::class, 'index'])->name('csharp');


Route::get('/advancedcoding', [App\Http\Controllers\Frontend\AdvancedCodingController::class, 'index'])->name('advancedcoding');



Route::get('/digitalmarketing', [App\Http\Controllers\Frontend\DigitalMarketingController::class, 'index'])->name('digitalmarketing');



Route::get('/graphicdesign', [App\Http\Controllers\Frontend\GraphicDesignController::class, 'index'])->name('graphicdesign');



Route::get('/scratch', [App\Http\Controllers\Frontend\ScratchController::class, 'index'])->name('scratch');


Route::get('/sql', [App\Http\Controllers\Frontend\SqlController::class, 'index'])->name('sql');


Route::get('/basiccoding', [App\Http\Controllers\Frontend\BasicCodingController::class, 'index'])->name('basiccoding');

Route::get('/basiccoding', [App\Http\Controllers\Frontend\BasicCodingController::class, 'index'])->name('basiccoding');

Route::get('/python', [App\Http\Controllers\Frontend\PythonController::class, 'index'])->name('python');
Route::get('/hardware', [App\Http\Controllers\Frontend\HardwareController::class, 'index'])->name('hardware');
Route::get('/data-analytic', [App\Http\Controllers\Frontend\AnalyticsController::class, 'index'])->name('data-analytic');


Route::get('/graphicdesign', [App\Http\Controllers\Frontend\GraphicsDesigningController::class, 'index'])->name('graphicdesign');

Route::get('/certificate/{id}', [HomeController::class, 'certificate']);    












