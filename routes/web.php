<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController; //controller

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

//Index
Route::get('/', [ComicController::class, "index"])->name("comics.index");

//Show
Route::get('/comics/{comic}', [ComicController::class, "show"])->name("comics.show");