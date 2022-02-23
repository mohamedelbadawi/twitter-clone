<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Auth::routes(['verify' => true]);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
Route::get('/tweets',[TweetController::class,'index'])->name('home');
Route::get('/tweets/{tweet}',[TweetController::class,'show'])->name('tweet.show');
Route::get('/explore',[HomeController::class,'explore'])->name('home.explore');
Route::get('/search',[UserController::class,'search'])->name('explore.search');
Route::get('/profile',[UserController::class,'profile'])->name('user.profile');
Route::get('/user/{user}',[UserController::class,'show'])->name('user.show');

});


