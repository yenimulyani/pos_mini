<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllers;
use App\Http\Controllers\CategoryproductControllers;
use App\Http\Controllers\LoginController;

 use App\Http\Middleware\CheckStatus;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// add login
Route::get('/login', [LoginController::class, 'create'])->name('login');
// Route::get('/login', 'LoginController@create');
Route::post('/store', [LoginController::class, 'store'])->name('store');
Route::get('/user', [LoginController::class, 'user'])->middleware('auth:sanctum');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
// end login


// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/', function () {
    return view('login');
});


// Route::get('hello','CompanyController@index');
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Route::resource('hello', CompanyController::class);

// Route::resource('company', CompanyController::class);
// Route::resource('worker', WorkerController::class);
// Route::resource('workertype', WorkertypeController::class);
// Route::resource('tasktype', TasktypeController::class);
// Route::resource('visitattendance', VisitattendanceController::class);
// Route::resource('workerattendance', WorkerattendanceController::class);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::middleware('auth:sanctum')->group( function () {
//     Route::resource('worker', WorkerController::class);

// });


Route::middleware([CheckStatus::class])->group(function(){

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('product', ProductController::class);
Route::resource('categoryproduct', CategoryproductController::class);
 

 });


