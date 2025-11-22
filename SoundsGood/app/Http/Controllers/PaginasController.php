<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function SoundsGood() {
        return view('SoundsGood');
    }


    public function Atividades() {
        return view('Atividades');   
    }

    public function Respiracao() {
        return view('Respiracao');   
    }

    public function Meditacao() {
        return view('Meditacao');   
    }

    public function Alongamento() {
        return view('Alongamento');   
    }

    public function SonsCalmantes() {
        return view('SonsCalmantes');   
    }
}
