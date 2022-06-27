<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;

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
//    return view('welcome');
//});

Route::get('/', [DefaultController::class, 'users_view'])->name('users.view');
Route::get('users/list', [DefaultController::class, 'getUsers'])->name('users.list');
Route::get('users/single', [DefaultController::class, 'getUser'])->name('users.single');
