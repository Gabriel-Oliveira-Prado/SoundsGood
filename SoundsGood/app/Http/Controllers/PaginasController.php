<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function SoundsGood() {
        return view('SoundsGood');
    }

    public function Login() {
        return view('Login');   
    }
}
