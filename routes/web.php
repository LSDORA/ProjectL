<?php

const prenom = 'Aymerick';
const nom ='Ngampolo';
use Illuminate\Support\Facades\Route;

Route::get('/new', function () {
    return view('new');
});

Route::get('/newdeux', function () {
    return view('newdeux',[ Premier::class,'afficherEleve']);
});
