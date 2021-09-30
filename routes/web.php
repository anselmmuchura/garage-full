<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('auth/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('loginSubmit');

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('auth/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('registerSubmit');
Route::get('account/verify/{token}', [App\Http\Controllers\Auth\VerificationController::class, 'verifyAccount'])->name('user.verify');

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['is_verify_email'])->name('dashboard');
    Route::get('dashboard/clients', [App\Http\Controllers\OwnerController::class, 'index'])->name('clients.index');
    Route::post('dashboard/addVehicle', [App\Http\Controllers\VehicleController::class, 'store'])->name('storeVehicle');
});