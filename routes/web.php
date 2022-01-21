<?php

use App\Http\Controllers\DashboardController;
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
// DASHBOARD
Route::get('/admin/liyah' , [FrontendController::class,'dashboard'])->name('user.dashboard');
// DESTROY
Route::get('/admin/skilss/destroy/{id}',[DashboardController::class ,'destroy'])->name('user.destroy') ;
// SHOW
Route::get('/admin/skills/show/{id}',[DashboardController::class ,"show"])->name('user.show') ;
// POST
Route::get('/admin/skills/add' , [DashboardController::class,"create"])->name('user.create') ; 
Route::post('/admin/skills/post' , [DashboardController::class,"store"])->name('user.store');


