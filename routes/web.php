<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CompetenceController;
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

Route::get('/', [AccueilController::class,'index'] )->name('accueil');
//TEST
Route::get('/compétences', [CompetenceController::class,'index'] )->name('competences');
Route::post('/create-compétences', [CompetenceController::class,'create_competences'] )->name('create_competences');
Route::post('/delete/competence',[CompetenceController::class,'delete'] )->name('delete_competences');
Route::post('/show/competence',[CompetenceController::class,'show'] )->name('show_competences');
