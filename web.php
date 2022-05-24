<?php

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

Route::get('/',[\App\Http\Controllers\mainController::class, 'indexPage']);

Route::get('/login',[\App\Http\Controllers\mainController::class, 'loginPage']);
Route::get('/signup',[\App\Http\Controllers\mainController::class, 'signupPage']);

Route::get('/signOut',[\App\Http\Controllers\mainController::class, 'signOut']);

Route::get('/cookie',function (){
    return \Illuminate\Support\Facades\Hash::make('test');
});


Route::get('/addPost',[\App\Http\Controllers\mainController::class, 'add']);
Route::post('/addPost',[\App\Http\Controllers\mainController::class, 'addPost']);

Route::post('/login',[\App\Http\Controllers\mainController::class, 'loginPost']);
Route::post('/signup',[\App\Http\Controllers\mainController::class, 'signupPost']);

