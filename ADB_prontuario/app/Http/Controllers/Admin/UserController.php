<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('site.usuario.index');
    }

    public function cadastrar(){
        $page = 'cadastrar';
        $num_existente = false;
        return view('site.usuario.cadastrar', compact('num_existente', 'page'));
    }

    public function salvar(Request $req){
        $req->validate([
            'email' => 'required|email',
        ]);

        
        $dados = $req->all();
        $page = 'cadastrar';
        
        $num_USP = $dados['num_USP'];
        $usuarioExistente = User::where('num_USP', $num_USP)->first();
        
        $cpf = $dados['CPF'];
        $cpfExistente = User::where('CPF', $cpf)->first();
        
        $email = $dados['email'];
        $emailExistente = User::where('email', $email)->first();

        $emailValida = $req->input('email');
        if (filter_var($emailValida, FILTER_VALIDATE_EMAIL)) {
            $page = '';
        } else {
            $num_existente = 'emailInv';
            return view('site.usuario.cadastrar', compact('num_existente', 'page'));
        }

        if ($usuarioExistente) {
            $num_existente = 'número USP';
            return view('site.usuario.cadastrar', compact('num_existente', 'page'));
        }

        if ($cpfExistente) {
            $num_existente = 'CPF';
            return view('site.usuario.cadastrar', compact('num_existente', 'page'));
        }

        if ($emailExistente) {
            $num_existente = 'e-mail';
            return view('site.usuario.cadastrar', compact('num_existente', 'page'));
        }

        User::create($dados);

        $rows = User::all();
        return view('site.usuario.listar', compact('rows'));
    }

    public function listar(){
        $rows = User::all();
        return view('site.usuario.listar', compact('rows'));
    }

    public function buscar(Request $req){
        $rows = User::where('name', 'ILIKE', '%' . $req['name'] . '%')->get();
        return view('site.usuario.listar', compact('rows'));
    }

    public function list_editar(){
        $rows = User::all();
        return view('site.usuario.list-editar', compact('rows'));
    }

    public function editar($num_USP){
        $page = 'editar';
        $rows = User::find($num_USP);
        return view('site.usuario.editar', compact('rows', 'page'));
    }

    public function atualizar(Request $req, $num_USP)
    {
        $dados = $req->except('_token');
        User::where('num_USP',$num_USP)->update([
            'num_USP'=>$dados['num_USP'],
            'name'=>$dados['name'],
            'email'=>$dados['email'],
            'CPF'=>$dados['CPF'],
            'mesa'=>$dados['mesa'],
            'cargo'=>$dados['cargo'],
            'funcao'=>$dados['funcao'],
            'administrador'=>$dados['administrador'],
            'ativo'=>$dados['ativo'],
        ]);
        return redirect()->route('users.listar');
    }

    public function list_excluir(){
        $user_avaiable = false;
        $rows = User::all();
        return view('site.usuario.list-excluir', compact('rows', 'user_avaiable'));
    }

    public function excluir($num_USP){
        $user_avaiable = false;
        $rows = User::all();

        $adminUsers = User::where('administrador', 1)->where('ativo', 1)->get();

        if ($adminUsers->count() > 1) {
            $user_avaiable = true;
            User::where('num_USP', $num_USP)->delete();
            return view('site.usuario.list-excluir', compact('rows', 'user_avaiable'));
        } else {
            $user_avaiable = false;
            return view('site.usuario.list-excluir', compact('rows', 'user_avaiable'));
        }
    }

    public function list_desativar(){
        $user_avaiable = true;
        $rows = User::all()->sortBy('nome');
        return view('site.usuario.list-desativar', compact('rows', 'user_avaiable'));
    }

    public function desativar($num_USP){
        $user_avaiable = true;
        $rows = User::all()->sortBy('nome');

        $adminUsers = User::where('administrador', 1)->where('ativo', 1)->count();
        
        $linha = User::find($num_USP);
        if($linha['ativo']==true){
            if ($adminUsers > 1) {
                $user_avaiable = true;
                User::where('num_USP',$num_USP)->update([
                    'ativo'=>false,
                ]);
                return view('site.usuario.list-desativar', compact('rows',  'user_avaiable'));
            } else {
                $user_avaiable = false;
                return view('site.usuario.list-desativar', compact('rows',  'user_avaiable'));
            }
        }else{
            // $user_avaiable = true;
            User::where('num_USP',$num_USP)->update([
                'ativo'=>true,
            ]);
            return redirect()->route('users.list-desativar');
            // return view('site.usuario.list-desativar', compact('rows',  'user_avaiable'));
        }
    }

    public function null_buscar(){
        $rows = User::all();
        return view('site.usuario.listar', compact('rows'));
    }
}
