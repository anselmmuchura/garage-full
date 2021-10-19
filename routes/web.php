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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'is_verify_email'])->name('home');;

Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/auth/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('loginSubmit');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/auth/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('registerSubmit');
Route::get('/account/verify/{token}', [App\Http\Controllers\Auth\VerificationController::class, 'verifyAccount'])->name('user.verify');

Route::get('/passwordreset', [App\Http\Controllers\Auth\LoginController::class, 'reset'])->name('user.reset');
Route::post('/passwordreset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'resetlink'])->name('password.update');
Route::get('/account/verify/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'confirmReset'])->name('user.resetPass');
Route::get('/user/{id}/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'resetPage'])->name('password.reset');
Route::post('/user/passwordreset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'resetPost'])->name('passReset');

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['is_verify_email'])->name('dashboard');
    Route::get('/dashboard/client/profile/{id}', [App\Http\Controllers\VehicleController::class, 'view'])->name('client.profile');
    Route::post('/dashboard/addVehicle', [App\Http\Controllers\VehicleController::class, 'store'])->name('storeVehicle');

    Route::get('/dashboard/sessions', [App\Http\Controllers\ServiceController::class, 'index'])->name('sessions.index');
    Route::post('/dashboard/addSession', [App\Http\Controllers\ServiceController::class, 'store'])->name('sessions.store');
    Route::get('/dashboard/session/{id}', [App\Http\Controllers\ServiceController::class, 'view'])->name('session.view');
    Route::put('/dashboard/updateSession/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('sessions.update');
    Route::get('/dashboard/session/{id}/email', [App\Http\Controllers\ServiceController::class, 'emailReport'])->name('session.sendMail');

    Route::post('/dashboard/addTask/{id}', [App\Http\Controllers\TodoController::class, 'store'])->name('tasks.store');
    Route::put('/dashboard/updateTask/{id}', [App\Http\Controllers\TodoController::class, 'update'])->name('tasks.update');
    Route::put('/dashboard/completeTask/{id}', [App\Http\Controllers\TodoController::class, 'complete'])->name('tasks.complete');
    Route::delete('/dashboard/deleteTask/{id}', [App\Http\Controllers\TodoController::class, 'destroy'])->name('task.delete');

    Route::post('/dashboard/taskStatus/Add', [App\Http\Controllers\TaskStatusController::class, 'store'])->name('taskStatus.store');

    Route::post('/dashboard/addComment/{id}', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
    Route::put('/dashboard/updateComment/{id}', [App\Http\Controllers\CommentController::class, 'update'])->name('comments.update');
    Route::delete('/dashboard/deleteComment/{id}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comments.delete');

    Route::get('/dashboard/session/{id}/inspection', [App\Http\Controllers\InspectionController::class, 'index'])->name('inspections.index');
    Route::put('/dashboard/updateComponents/{id}', [App\Http\Controllers\ComponentsController::class, 'update'])->name('components.update');
});
