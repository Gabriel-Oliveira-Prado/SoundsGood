<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;

route::get('/', [PaginasController::class, 'SoundsGood']);
route::get('/', [PaginasController::class, 'Login']);

Route::get('/', function () {
    return view('SoundsGood');
});

Route::get('/Login', function () {
    return view('Login');
});