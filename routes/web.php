<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnamneseController;
use App\Http\Controllers\PasswordController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');


Route::get('/anamneses', [AnamneseController::class, 'index'])->name('anamneses');
Route::get('/anamnese/create', [AnamneseController::class, 'create'])->name('anamnese.create');
Route::post('/anamnese/store', [AnamneseController::class, 'store'])->name('anamnese.store');
Route::get('/anamnese/edit/{anamnese}', [AnamneseController::class, 'edit'])->name('anamnese.edit');
Route::put('/anamnese/{anamnese}', [AnamneseController::class, 'update'])->name('anamnese.update');
Route::delete('/anamnese/{anamnese}', [AnamneseController::class, 'destroy'])->name('anamnese.destroy');
Route::get('/anamnese/{anamnese}', [AnamneseController::class, 'show'])->name('anamnese.show');


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store')->middleware('throttle:3');
Route::get('logout', [LoginController::class, 'destroy'])->name('login.destroy');
Route::put('/password/{user}', [PasswordController::class, 'update'])->name('password.update');

Route::get('admin', [AdminController::class, 'index'])->middleware('auth');
