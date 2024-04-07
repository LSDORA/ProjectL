<?php

const prenom = 'Aymerick';
const nom ='Ngampolo';
use Illuminate\Support\Facades\Route;

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