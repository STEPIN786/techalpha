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



// admin route start
Route::get('/', function () { return redirect()->route('login'); });
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', function () { return view('pages.register'); });
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/password/forget',  function () { return view('pages.forgot-password'); })->name('password.forget');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::group(['middleware' => 'auth'], function () {
	// logout route
	Route::get('/logout', [LoginController::class, 'logout'])->name('admin-logout');

	// dashboard route  
	Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');

	Route::get('/product/list', [ProductController::class, 'list'])->name('product.list');
	Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
	Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
	Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
	Route::post('/product/update', [ProductController::class, 'update'])->name('product.update');
	Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

	Route::get('/productcategory/list', [ProductcategoryController::class, 'list'])->name('product.category.list');
	Route::get('/productcategory/add', [ProductcategoryController::class, 'add'])->name('product.category.add');
	Route::get('/productcategory/edit/{id}', [ProductcategoryController::class, 'edit'])->name('product.category.edit');
	Route::post('/productcategory/store', [ProductcategoryController::class, 'store'])->name('product.category.store');
	Route::post('/productcategory/update', [ProductcategoryController::class, 'update'])->name('product.category.update');
	Route::get('/productcategory/delete/{id}', [ProductcategoryController::class, 'delete'])->name('product.category.delete');

	Route::get('/inquiry/contact/list', [InquiryController::class, 'contact_list'])->name('contact-list');
	Route::get('/inquiry/contact/delete/{id}', [InquiryController::class, 'contact_delete'])->name('contact-delete');


	//only those have manage_user permission will get access
	Route::group(['middleware' => 'can:manage_user'], function () {
		Route::get('/users', [UserController::class, 'index']);
		Route::get('/user/get-list', [UserController::class, 'getUserList']);
		Route::get('/user/create', [UserController::class, 'create']);
		Route::post('/user/create', [UserController::class, 'store'])->name('create-user');
		Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');
		Route::post('/user/update', [UserController::class, 'update']);
		Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
	});

	//only those have manage_role permission will get access
	Route::group(['middleware' => 'can:manage_role|manage_user'], function () {
		Route::get('/roles', [RolesController::class, 'index']);
		Route::get('/role/get-list', [RolesController::class, 'getRoleList']);
		Route::post('/role/create', [RolesController::class, 'create']);
		Route::get('/role/edit/{id}', [RolesController::class, 'edit']);
		Route::post('/role/update', [RolesController::class, 'update']);
		Route::get('/role/delete/{id}', [RolesController::class, 'delete']);
	});


	//only those have manage_permission permission will get access
	Route::group(['middleware' => 'can:manage_permission|manage_user'], function () {
		Route::get('/permission', [PermissionController::class, 'index']);
		Route::get('/permission/get-list', [PermissionController::class, 'getPermissionList']);
		Route::post('/permission/create', [PermissionController::class, 'create']);
		Route::get('/permission/update', [PermissionController::class, 'update']);
		Route::get('/permission/delete/{id}', [PermissionController::class, 'delete']);
	});

	// get permissions
	Route::get('get-role-permissions-badge', [PermissionController::class, 'getPermissionBadgeByRole']);
});
// admin rout end