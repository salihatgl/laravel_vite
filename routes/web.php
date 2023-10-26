<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCotroller;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\ProgrammingCotroller;
use Inertia\Inertia;

use function Termwind\render;

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
// Route::get('/Education',[EducationCotroller::class,'index']);
 Route::get('/Programming',[ProgrammingCotroller::class,'index']);
Route::inertia('/Education', 'Education');
Route::inertia('/visit', 'visit')->name('visit');
Route::post('/users', 'App\Http\Controllers\KullaniciController@store');



