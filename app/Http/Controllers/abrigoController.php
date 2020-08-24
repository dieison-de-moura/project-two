<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abrigoController extends Controller
{
    public function index()
    {
        return view('abrigo/cadastrar-morador');
    }

    public function lista()
    {
        return view('abrigo/lista-moradores');
    }

    public function createMorador()
    {
        return view('abrigo/lista-moradores');
    }



    public function updateMorador()
    {
        return view('abrigo/cadastrar-morador');
    }
}
