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
        return view('site.paciente.medicamentos.index', compact('dados'), compact('tratamento_medicamentos'));
    }

    public function cadastrar($num_registro){
        $dados = Paciente::find($num_registro);
        $medicamentos = Medicamento::all();
        return view('site.paciente.medicamentos.cadastrar', compact('dados'), compact('medicamentos'));
    }

    public function salvar(Request $req, $num_USP, $num_registro){
        $dados = $req->all();

        TratamentoMedicamento::create([
            'num_registro'=>$num_registro,
            'nome'=>$dados['nome'],
            'tipo'=>$dados['tipo'],
            'posologia'=>$dados['posologia'],
            'origem'=>$dados['origem'],
            'aderencia'=>$dados['aderencia'],
        ]);
        return redirect()->route('paciente.listar');
    }
}
