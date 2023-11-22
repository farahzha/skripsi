<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login',[AuthController::class,'login'])->name('login-page');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard.main');
});

Route::get('/keloladata', function () {
    return view('keloladata.keloladatapenduduk');
});

Route::get('/keloladata', function () {
    return view('keloladata.keloladatakk');
});

Route::post('/auth',[AuthController::class,'Authenticate'])->name('login');