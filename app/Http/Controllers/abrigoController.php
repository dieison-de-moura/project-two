<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;

class abrigoController extends Controller
{
    public function index()
    {
        return view('abrigo/cadastrar-morador');
    }

    public function lista()
    {
        $pessoas = DB::select('select * from people where ativo = ?', ['on']);
        return view('abrigo/lista-moradores', compact('pessoas'));
    }

    public function createMorador(Request $request)
    {
        $data = $request->all();

        $user = session()->get('usuario');

        $result = Person::create([
            'nome' => $data['name'],
            'idade' => $data['idade'],
            'especialidade' => $data['especialidade'],
            'sexo' => $data['sexo'],
            'descricao' => $data['descricao'],
            'ativo' => $data['ativo'],
            'id_abrigo' => $user[0],
        ]);

        if ($result) {
            session()->flash('status', 'Cadastro realizado com sucesso!');
        }

        return view('home');
    }


    public function updateMorador()
    {
        return view('abrigo/cadastrar-morador');
    }
}
