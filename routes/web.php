<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\adminController;

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

Route::get('/', [dashboardController::class, 'index']);

Route::get('/adminnamira', [adminController::class, 'index']);
Route::get('/adminnamira/promo', [adminController::class, 'promo']);
Route::get('/adminnamira/createPromo', [adminController::class, 'createPromo']);
Route::post('/adminnamira/promo', [adminController::class, 'createStorePromo']);
Route::post('/adminnamira/promo/{id}', [adminController::class, 'deletePromo']);
Route::get('/adminnamira/{id}/editPromo', [adminController::class, 'editPromo']);
Route::put('/adminnamira/{id}', [adminController::class, 'editStorePromo'])->name('update.promo');