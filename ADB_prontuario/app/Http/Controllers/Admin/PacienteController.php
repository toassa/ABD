<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\Auth;
use App\Models\Paciente;
use Illuminate\Console\View\Components\Alert;

class PacienteController extends Controller
{
    public function index(){
        return view('site.paciente.index');
    }

    public function listar(){
        $dados = Paciente::all();
        return view('site.paciente.pesquisar', compact('dados'));
    }

    public function pesquisar(){
        return view('site.paciente.pesquisar');
    }

    public function cadastrar(){
        return view('site.paciente.cadastrar');
    }

    public function salvar(Request $req, $num_USP){
        $tudos = Paciente::all();
        $dados = $req->all();
        foreach($tudos as $tudo){
            if($tudo['num_registro'] == $dados['num_registro']){
                return view('site.usuario.cadastrar');
            }
        }
        Paciente::create([
            'num_registro' => $dados['num_registro'],
            'nome' => $dados['nome'],
            'data_nascimento' => $dados['data_nascimento'],
            'idade' => $dados['idade'],  
            'sexo' => $dados['sexo'],
            'cor' => $dados['cor'],
            'estado_civil' => $dados['estado_civil'],
            'desempregado_aposentado_diabetes' => $dados['desempregado_aposentado_diabetes'],
            'profissao' => $dados['profissao'],
            'escolaridade' => $dados['escolaridade'],
            'renda_mensal' => $dados['renda_mensal'],
            'dependentes_renda' => $dados['dependentes_renda'],
            'transporte' => $dados['transporte'],
            'plano_saude' => $dados['plano_saude'],
            'telefone' => $dados['telefone'],
            'segundo_telefone' => $dados['segundo_telefone'],
            'pertence_segundo_telefone' => $dados['pertence_segundo_telefone'],
            'CEP' => $dados['CEP'],
            'numero_moradia' => $dados['numero_moradia'],
            'rua' => $dados['rua'],
            'bairro' => $dados['bairro'],
            'cidade' => $dados['cidade'],
            'estado' => $dados['estado'],
            'complemento' => $dados['complemento'],
            'estado_nascimento' => $dados['estado_nascimento'],
            'cidade_nascimento' => $dados['cidade_nascimento'],
            'ativo' => $dados['ativo'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('paciente.listar');
    }

    public function buscar(Request $req, $nome){
        $dados = $req->Paciente::where('name', $nome);
    }
}
