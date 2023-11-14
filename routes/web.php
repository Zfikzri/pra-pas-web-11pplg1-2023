<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\DokterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hewan/all', [HewanController::class, 'index']);

Route::get('/hewan/detail/{hewan}', [HewanController::class, 'show']);

Route::get('/dokter/all2', [DokterController::class, 'index']);

Route::get('/dokter/detail/{dokter}', [DokterController::class, 'show']);