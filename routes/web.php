<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProjetController;
use App\Models\Projet;
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
// DASHBOARD SKILL
Route::get('/admin/liyah' , [FrontendController::class,'dashboard'])->name('user.dashboard');
Route::delete('/admin/skilss/destroy/{id}',[DashboardController::class ,'destroy'])->name('user.destroy') ;
Route::get('/admin/skills/show/{id}',[DashboardController::class ,"show"])->name('user.show') ;
Route::get('/admin/skills/add' , [DashboardController::class,"create"])->name('user.create') ;
Route::post('/admin/skills/post' , [DashboardController::class,"store"])->name('user.store');
// EDIT
Route::get('/admin/skills/edit/{id}' , [DashboardController::class ,"edit"])->name('user.edit');
Route::put('/admin/skills/update/{id}' , [DashboardController::class ,"update"])->name('user.update');

// ABOUTME
Route::get('/admin/about/add', [AboutController::class ,"index"])->name('about.index') ;
Route::get('/admin/about/show/{id}' , [AboutController::class , "show"])->name('about.show');
Route::get('/admin/about/new/create', [AboutController::class ,"create"])->name('about.create') ;
Route::post('/admin/about/store', [AboutController::class ,"store"])->name('about.store') ;
Route::delete('.admin/about/destroy/{id}',[AboutController::class,"destroy"])->name('about.destroy') ;
Route::get('/admin/about/edit/{id}' , [AboutController::class ,"edit"])->name('about.edit');
Route::put('/admin/about/update/{id}' , [AboutController::class ,"update"])->name('about.update');
// PROJECT
// EDIT
Route::get('/admin/projet/edit/{id}' , [ProjetController::class ,"edit"])->name('projet.edit');
Route::put('/admin/projet/update/{id}' , [ProjetController::class ,"update"])->name('projet.update');
Route::get('/admin/projet/add',[ProjetController::class , 'index'])->name('projet.index');
Route::delete('.admin/projet/destroy/{id}',[ProjetController::class,"destroy"])->name('projet.destroy') ;
Route::get('/admin/projet/show/{id}' , [ProjetController::class , "show"])->name('projet.show');
Route::get('/admin/about/create', [ProjetController::class ,"create"])->name('projet.create') ;
Route::post('/admin/projet/store', [ProjetController::class ,"store"])->name('projet.store') ;



// CONTACT




