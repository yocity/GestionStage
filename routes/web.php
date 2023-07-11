<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\DepartementController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/connect',[EtudiantController::class,'affiche_connexion']);
Route::post('/connect',[EtudiantController::class,'connexion']);

Route::get('/inscrire',[EtudiantController::class,'create']);
Route::post('/inscrire',[EtudiantController::class,'store']);

Route::get('/accueil',[EtudiantController::class,'index']);
Route::post('/accueil',[EtudiantController::class,'update']);

Route::get('/postule/{id}',[EtudiantController::class,"destroy"]);




Route::get('/connect_dep',[DepartementController::class,'affiche_connexion']);
Route::post('/connect_dep',[DepartementController::class,'connexion']);

Route::get('/inscrire_dep',[DepartementController::class,'create']);
Route::post('/inscrire_dep',[DepartementController::class,'store']);

Route::get('/accueil_dep',[DepartementController::class,'index']);
Route::post('/accueil_dep',[DepartementController::class,'update']);



Route::get('/connect_ent',[EntrepriseController::class,'affiche_connexion']);
Route::post('/connect_ent',[EntrepriseController::class,'connexion']);

Route::get('/inscrire_ent',[EntrepriseController::class,'create']);
Route::post('/inscrire_ent',[EntrepriseController::class,'store']);

Route::get('/accueil_ent',[EntrepriseController::class,'index']);
Route::post('/accueil_ent',[EntrepriseController::class,'update']);

Route::get('/postule/{id}',[EntrepriseController::class,"destroy"]);