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
        $tratamento_medicamentos = TratamentoMedicamento::where('num_registro', $num_registro)->get();
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
            'consulta'=>$dados['consulta'],
            'dose'=>$dados['dose'],
            'periodo'=>$dados['periodo'],
            'observacao'=>$dados['observacao'],
            'aderencia'=>$dados['aderencia'],
            'num_USP'=>$num_USP,
        ]);
        return redirect()->route('medicamento.index', $num_registro);
    }

    public function editar($num_registro, $nome){
        $dados = Paciente::find($num_registro);
        $medicamentos = Medicamento::all();
        $tratamento_medicamentos = TratamentoMedicamento::where('num_registro', $num_registro)->where('nome', $nome)->get();
        $tratamento_medicamentos = $tratamento_medicamentos->get(0);
        return view('site.paciente.medicamentos.editar', compact('dados', 'medicamentos', 'tratamento_medicamentos'));
    }

    public function atualizar(Request $req, $num_registro, $nome, $num_USP)
    {
        $dados = $req->except('_token');
        $dados_nome = $dados['nome'];
        TratamentoMedicamento::where('num_registro',$num_registro)->where('nome', $dados_nome)->update([
            'num_registro' => $num_registro,
            'nome' => $dados['nome'],
            'tipo'=>$dados['tipo'],
            'posologia'=>$dados['posologia'],
            'origem'=>$dados['origem'],
            'consulta'=>$dados['consulta'],
            'dose'=>$dados['dose'],
            'periodo'=>$dados['periodo'],
            'observacao'=>$dados['observacao'],
            'aderencia'=>$dados['aderencia'],
            'num_USP'=>$num_USP,
        ]);
        return redirect()->route('medicamento.index', $num_registro);
    }

    public function excluir($num_registro, $nome){
        TratamentoMedicamento::where('num_registro', $num_registro)->where('nome', $nome)->delete();
        return redirect()->route('medicamento.index', $num_registro);
    }
}
