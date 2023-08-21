<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Medicamento;
use App\Models\TratamentoMedicamento;

class MedicamentoController extends Controller
{
    public function index($num_registro){
        $dados = Paciente::find($num_registro);
        $tratamento_medicamentos = TratamentoMedicamento::all();
        return view('site.paciente.medicamentos.index', compact('dados', 'tratamento_medicamentos'));
    }

    public function cadastrar($num_registro){
        $dados = Paciente::find($num_registro);
        $medicamentos = Medicamento::all();
        return view('site.paciente.medicamentos.cadastrar', compact('dados', 'medicamentos'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $dados = $req->all();

        TratamentoMedicamento::create([
            'num_registro'=>$num_registro,
            'nome'=>$dados['nome'],
            'tipo'=>$dados['tipo'],
            'posologia'=>$dados['posologia'],
            'origem'=>$dados['origem'],
            'aderencia'=>$dados['aderencia'],
            'num_USP'=>$num_USP,
        ]);
        return redirect()->route('medicamento.index', $num_registro);
    }

    public function editar($num_registro, $nome){
        $dados = Paciente::find($num_registro);
        $medicamentos = Medicamento::all();
        $tratamento_medicamentos = TratamentoMedicamento::where('num_registro', $num_registro)->where('nome', $nome)->get();
        // dd($medicamentos);
        return view('site.paciente.medicamentos.editar', compact('dados', 'tratamento_medicamentos', 'medicamentos'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $dados = $req->except('_token');
        Paciente::where('num_registro',$num_registro)->update([
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
        return redirect()->route('Pacientes.listar');
    }
}
