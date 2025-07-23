<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/inscription', [AuthController::class, 'inscrire']);
Route::get('/inscription', [AuthController::class, 'formulaireInscription']);
Route::post('/enregistrer', [AuthController::class, 'enregistrer']);
Route::get('/connexion', [AuthController::class, 'connecter']);
Route::post('/connection', [AuthController::class, 'connect']);
Route::get('/forget', [AuthController::class, 'forgetPassword']);
Route::get('/reset', [AuthController::class, 'resetPassword']);
Route::get('/home', [AuthController::class, 'accueil']);

