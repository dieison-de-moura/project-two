<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Exception;
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
        $result = false;
        $user = session()->get('usuarioId');

        try {
            $result = Person::create([
                'nome' => $data['name'],
                'idade' => $data['idade'],
                'especialidade' => $data['especialidade'],
                'sexo' => $data['sexo'],
                'descricao' => $data['descricao'],
                'ativo' => $data['ativo'],
                'id_abrigo' => $user[0],
            ]);
        } catch (Exception $e) {
            session()->flash('status-error', 'Ocorreu algum erro ao tentar realizar o cadastro!');
        }

        if ($result) {
            session()->flash('status-sucess', 'Cadastro realizado com sucesso!');
        } else {
            session()->flash('status-error', 'Ocorreu algum erro ao tentar realizar o cadastro!');
        }

        return view('home');
    }

    public function detalheMorador(Request $request, $id)
    {
        $exists = false;
        if ($id) {
            $pessoa = DB::select('select * from people where ativo = ? and id = ?', ['on', $id]);
            if (!empty($pessoa)) {
                $pessoa = $pessoa[0];
                $exists = true;
            }
        }

        if ($exists) {
            return view('abrigo/detalhar-pessoa', compact('pessoa'));
        } else {
            session()->flash('status-error', 'Ocorreu algum erro ao tentar recuperar os dados! Por favor tente novamente mais tarde.');
            return view('home');
        }
    }

    public function atualizarMorador(Request $request, $id)
    {
        $dados = $request->all();
        $result = Person::find($id)->update($dados);

        if ($result) {
            session()->flash('status-sucess', 'Cadastro atualizado com sucesso!');
        } else {
            session()->flash('status-error', 'Ocorreu algum erro ao tentar atualizar o cadastro!');
        }
        return view('home');
    }

    public function deletarMorador(Request $requestData)
    {
        $dados = $requestData->all();
        $user = Person::findOrFail($dados['id_user']);
        $user->delete();
        session()->flash('status-sucess', 'Cadastro do morador excluído com sucesso!');
        return redirect()->to('/home');
    }

    public function perfilMorador(Request $request, $id)
    {
        $exists = false;
        if ($id) {
            $pessoa = DB::select('select * from people where ativo = ? and id = ?', ['on', $id]);
            if (!empty($pessoa)) {
                $pessoa = $pessoa[0];
                $exists = true;
            }
        }

        if ($exists) {
            return view('abrigo/perfil', compact('pessoa'));
        } else {
            session()->flash('status-error', 'Ocorreu algum erro ao tentar recuperar os dados! Por favor tente novamente mais tarde.');
            return view('home');
        }
    }
}
