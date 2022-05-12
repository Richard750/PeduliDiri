<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\perjalananController;
use App\Http\Controllers\loginController;



// User Register
Route::get('/register',[userController::class,'halamanRegister']);
Route::post('/simpanUser',[userController::class,'simpanRegister']);


// User Login
Route::get('/', [loginController::class, 'loginPage'])->name('login');
Route::any('/post-login', [loginController::class, 'Login']);


// Data Input
Route::get('/form-perjalanan',[perjalananController::class,'halamanPerjalanan'])->middleware('auth');
Route::post('/simpanPerjalanan',[perjalananController::class,'simpanPerjalanan'])->middleware('auth');;


// Dahsboard
Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth');;

// Data Perjalanan
Route::get('/data-perjalanan',[perjalananController::class,'index'])->middleware('auth');

Route::any('editPerjalanan', [perjalananController::class, 'editPerjalanan'])->middleware('auth');
Route::any('/update-perjalanan', [perjalananController::class, 'updatePerjalanan'])->middleware('auth');
Route::post('/deletePerjalanan',[perjalananController::class,'DeletePerjalanan'])->middleware('auth');

// User Logout
Route::get('/logout', [loginController::class, 'LogOut']);


// Migrate 1 Tabel
// php artisan migrate:refresh --path=/database/migrations/filemigrasi.php