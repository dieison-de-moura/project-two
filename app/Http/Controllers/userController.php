<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

class userController extends Controller
{
    public function index()
    {
        $exists = false;
        if (session()->get('usuarioId') !== null) {
            $idUsuario = session()->get('usuarioId');
            $usuario = DB::select('select * from users where id = ?', [$idUsuario[0]]);
            if (!empty($usuario)) {
                $usuario = $usuario[0];
                $exists = true;
            }
        }

        if ($exists) {
            return view('perfil/meu-perfil', compact('usuario'));
        } else {
            session()->flash('status-error', 'Ocorreu algum erro ao tentar recuperar os dados! Por favor tente novamente mais tarde.');
            return view('home');
        }
    }

    public function atualizaCadastro(Request $requestData)
    {
        $dados = $requestData->all();
        $confirmado = false;

        if (!empty($dados) && !empty($dados['id_user']) && !empty($dados['nome']) && !empty($dados['cidade'])) {
            $confirmado = DB::table('users')
                ->where('id', $dados['id_user'])
                ->update(['cidade' => $dados['cidade'], 'name' => $dados['nome']]);
        } else {
            session()->flash('status-error', 'Favor, preencha os campos, eles não podem ser vazios.');
        }

        if ($confirmado) {
            session()->flash('status-sucess', 'Dados atualizados com sucesso!');
            return view('home');

        } else {
            session()->flash('status-error', 'Ocorreu algum erro ao tentar atualizar os dados! Por favor tente novamente mais tarde.');
        }

        return view('home');
    }

    public function deletarCadastro(Request $requestData)
    {
        $dados = $requestData->all();
        $user = User::findOrFail($dados['id_user']);
        $user->delete();
        session_start();
        session_destroy();
        Auth::logout();
        return redirect()->to('/home');
    }
}
