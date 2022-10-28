<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;

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

Route::get('/', [dashboardController::class, 'home']);
Route::get('/login34N4mira',[loginController::class,'login'])->name('login');
Route::post('/login34N4mira',[loginController::class,'authenticate'])->name('post.login');
Route::get('/logout',[loginController::class,'logout'])->name('logout');
Route::get('/email',[dashboardController::class,'email'])->name('email');

Route::group(['middleware'=>['admin']], function(){
    //promo route adminnamira
    Route::get('/adminnamira', [adminController::class, 'index']);
    Route::get('/adminnamira/promo', [adminController::class, 'promo']);
    Route::get('/adminnamira/createPromo', [adminController::class, 'createPromo']);
    Route::post('/adminnamira/promo', [adminController::class, 'createStorePromo']);
    Route::post('/adminnamira/promo/{id}', [adminController::class, 'deletePromo']);
    Route::get('/adminnamira/{id}/editPromo', [adminController::class, 'editPromo']);
    Route::put('/adminnamira/{id}', [adminController::class, 'editStorePromo'])->name('update.Promo');
    //article route adminnamira
    Route::get('/adminnamira/article', [adminController::class, 'article']);
    Route::get('/adminnamira/createArticle', [adminController::class, 'createArticle']);
    Route::post('/adminnamira/article', [adminController::class, 'createStoreArticle']);
    Route::post('/adminnamira/article/{id}', [adminController::class, 'deleteArticle']);
    Route::get('/adminnamira/{id}/editArticle', [adminController::class, 'editArticle']);
    Route::put('/adminnamira/{id}', [adminController::class, 'editStoreArticle'])->name('update.Article');
});