<?php

const prenom = 'Aymerick';
const nom ='Ngampolo';
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\MembreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/adminpanel', function () {
    return view('adminpanel');
});

Route::get('/client', function () {
    return view('client');
});

Route::get('/clientpanel', function () {
    return view('clientpanel');
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::get('/confirm', function () {
    return view('confirm');
});


Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.submit');
Route::post('/admin', [ConnexionController::class, 'traiterConnexion'])->name('connexion.traiter');
Route::post('/client', [ConnexionController::class, 'traiterConnexionn'])->name('connexion.traiterr');
Route::post('/deconnexion', [ConnexionController::class, 'deconnexion'])->name('connexion.deconnexion');
Route::get('/adminpanel', [MembreController::class, 'listeUtilisateurs'])->name('adminpanel');
Route::delete('/delete/user/{id}', [MembreController::class, 'delete']);
