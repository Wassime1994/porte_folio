<?php

use App\Http\Controllers\FrontendController;
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
// FRONTENDCONTROLLER
Route::get('/', [FrontendController::class, "home"] )->name('user.home');
Route::get('/about', [FrontendController::class,"about"])->name('user.about');
Route::get('/contact', [FrontendController::class,"contact"])->name('user.contact');
Route::get('/show' , [FrontendController::class,"show"])->name('user.show');
Route::get('/projet' , [FrontendController::class,'projet'])->name('user.projet');
