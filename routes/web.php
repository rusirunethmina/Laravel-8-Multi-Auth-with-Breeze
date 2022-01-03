<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


//admin routes
Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'loginView'])->name('login.form');
    Route::get('/register', [AdminController::class, 'registerView'])->name('register.form');
    Route::post('/login/owner', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/register/create', [AdminController::class, 'register'])->name('admin.register');
    Route::get('/dashboard', [AdminController::class, 'daashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'Adminlogout'])->middleware('admin')->name('admin.logout');
});

//seller routes

Route::prefix('seller')->group(function() {

    Route::get('/login', [SellerController::class, 'loginView'])->name('seller.login.form');
    Route::get('/register', [SellerController::class, 'registerView'])->name('register.form');
    Route::get('/dashboard', [SellerController::class, 'daashboard'])->name('seller.dashboard')->middleware('seller');
    Route::post('/login/owner', [SellerController::class, 'login'])->name('seller.login');
    Route::post('/register/create', [SellerController::class, 'register'])->name('seller.register');

});
