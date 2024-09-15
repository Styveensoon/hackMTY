<?php
use App\Http\Controllers\GenericController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('index');
});

Route::get('/Home', [GenericController::class,  'Home'])
    ->name('views.index');

Route::get('/Login', [GenericController::class,  'Login'])
    ->name('views.loguin');

Route::get('/Registro', [GenericController::class,  'RG'])
    ->name('views.rg');

Route::get('/Plataform', [GenericController::class,  'AN'])
    ->name('views.AN');