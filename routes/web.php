<?php

use App\Http\Controllers\UserController;
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


  // for post 

 Route::get('/post',[UserController::class,'index']);
 Route::get('/addpost',[UserController::class,'add_post'])->name('addpost');
 Route::post('/addpost',[UserController::class,'store_post'])->name('storepost');




