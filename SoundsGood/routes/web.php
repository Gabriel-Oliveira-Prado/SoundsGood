<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;

// Rotas para o formulario de registro
Route::get('/login', [AuthController::class, 'login'])->name('usuario.login');
Route::post('/login', [AuthController::class, 'register'])->name('usuario.register');

route::get('/', [PaginasController::class, 'SoundsGood']);
route::get('/', [PaginasController::class, 'Atividades']);
route::get('/', [PaginasController::class, 'Respiracao']);
route::get('/', [PaginasController::class, 'Meditacao']);
route::get('/', [PaginasController::class, 'Alongamento']);
route::get('/', [PaginasController::class, 'SonsCalmantes']);

Route::get('/', function () {
    return view('SoundsGood');
});

Route::get('/Login', function () {
    return view('Login');
});


Route::get('/Atividades', function () {
    return view('Atividades');
});

Route::get('/Respiracao', function () {
    return view('conteudos.Respiracao');
});

Route::get('/Meditacao', function () {
    return view('conteudos.Meditacao');
});

Route::get('/Alongamento', function () {
    return view('conteudos.Alongamento');
});

Route::get('/SonsCalmantes', function () {
    return view('conteudos.SonsCalmantes');
});