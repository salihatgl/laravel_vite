<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCotroller;
use App\Http\Controllers\EducationCotroller;
use App\Http\Controllers\ProgrammingCotroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Home',[HomeCotroller::class,'index']);
Route::get('/Education',[EducationCotroller::class,'index']);
Route::get('/Programming',[ProgrammingCotroller::class,'index']);
