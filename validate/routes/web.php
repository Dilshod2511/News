<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('news.index');
//});

Route::get('/post',[\App\Http\Controllers\PostController::class,'index']);
Route::post('/po',[\App\Http\Controllers\PostController::class,'store']);

Route::get('/sport/{id}',[\App\Http\Controllers\SportController::class,'store']);
Route::get('/dunyo/{id}',[\App\Http\Controllers\DunyoController::class,'store']);
Route::get('/sport',[\App\Http\Controllers\SportController::class,'index']);
Route::get('/dunyo',[\App\Http\Controllers\DunyoController::class,'index']);
Route::get('/',[\App\Http\Controllers\NewController::class,'index']);
