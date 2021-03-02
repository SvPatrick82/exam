<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/',[FirstController::class,'index']);
Route::get('/adminPanel',[AdminController::class,'index']);
//Route::get('/contacts',[FirstController::class,'contacts']);


Auth::routes();


