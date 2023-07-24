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
        return view('site.usuario.cadastrar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        // dd($dados);
        User::create($dados);
        return redirect()->route('users.listar');
    }

    public function listar(){
        $rows = User::all();
        return view('site.usuario.listar', compact('rows'));
    }

    // $name
    public function buscar(){
        $rows = User::where('name');
        // dd($rows);
        // , compact('rows')
        return view('site.usuario.listar');
    }

    public function list_editar(){
        $rows = User::all();
        return view('site.usuario.list-editar', compact('rows'));
    }

    public function editar($num_USP){
        $rows = User::find($num_USP);
        return view('site.usuario.editar', compact('rows'));
    }

    public function atualizar(Request $req, $num_USP)
    {
        $dados = $req->except('_token');
        User::where('num_USP',$num_USP)->update([
            'num_USP'=>$dados['num_USP'],
            'name'=>$dados['name'],
            'email'=>$dados['email'],
            'CPF'=>$dados['CPF'],
            'cargo'=>$dados['cargo'],
            'administrador'=>$dados['administrador'],
            'ativo'=>$dados['ativo'],
        ]);
        return redirect()->route('users.listar');
    }

    public function list_excluir(){
        $rows = User::all();
        return view('site.usuario.list-excluir', compact('rows'));
    }

    public function excluir($num_USP){
        User::where('num_USP',$num_USP)->delete();
        return redirect() -> route('users.listar');
    }

    public function list_desativar(){
        $rows = User::all();
        return view('site.usuario.list-desativar', compact('rows'));
    }

    public function desativar($num_USP){
        $rows = User::find($num_USP);
        if($rows['ativo']==true){
            User::where('num_USP',$num_USP)->update([
                'ativo'=>false,
            ]);
        }else{
            User::where('num_USP',$num_USP)->update([
                'ativo'=>true,
            ]);
        }
        return redirect() -> route('users.list-desativar');
    }
}
