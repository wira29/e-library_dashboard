<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardUser;
use App\Http\Controllers\Core\AdminController;
use App\Http\Controllers\Core\BookController;
use App\Http\Controllers\Core\CategoryController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\BookPageController;
use App\Http\Controllers\Core\LoanController;
use App\Http\Controllers\Core\SettingController;
use App\Http\Controllers\FrontPageController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::prefix('admin')->group(function (){
    Route::middleware(['verified', 'isAdmin', 'auth'])->group(function () {
        Route::resources([
            'book'  => BookController::class,
            'category' => CategoryController::class,
            'admin' => AdminController::class,
            'loan'  => LoanController::class,
            'setting' => SettingController::class,
        ]);
    });
});

Route::prefix('user')->group(function (){
    Route::middleware(['verified', 'isUser', 'auth'])->group(function (){
        Route::get('/dashboardUser', [DashboardUser::class, 'index'])->name('dashboardUser');
    });
});

Route::get('/home', [FrontPageController::class, 'index'])->name('home');
Route::get('/book', [BookPageController::class, 'index'])->name('bookPage');
Route::get('/book/{slug}', [BookPageController::class, 'detail'])->name('detailPage');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
