<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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


Route::get('/', [Controller::class,'index']);
Route::get('home/{category}', [Controller::class,'category']);

Route::get('/read-post/{id}',[Controller::class,'read'] );

Route::get('dashboard', function () { return View('add_post');});
Route::post('dashboard', [Controller::class,'create']);

Route::get('/posts_list',[Controller::class,'posts_list'] );
Route::post('/posts_list/{id}',[Controller::class,'delete'] );
