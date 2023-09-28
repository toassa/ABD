<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\AtividadeDiabete;

use Illuminate\Support\Facades\Auth;

class AtividadesEducativasController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = AtividadeDiabete::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('atividades_educativas.index', compact('num_registro'));
        }else{
            return redirect()->route('atividades_educativas.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.atividades_educativas.index', compact('dados','dados_paciente'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        AtividadeDiabete::create([
            'num_registro'=>$num_registro,
            'quantia_consultas_enfermagem'=>$request['quantia_consultas_enfermagem'],
            'finalidade_consulta'=>$request['finalidade_consulta'],
            'reunioes_diabeticos'=>$request['reunioes_diabeticos'],
            'programas_educacao_diabeticos'=>$request['programas_educacao_diabeticos'],
            'conhece_hba1c'=>$request['conhece_hba1c'],
            'significado_hba1c'=>$request['significado_hba1c'],
            'valor_maximo_hba1c'=>$request['valor_maximo_hba1c'],
            'conhece_valor_ultima_hba1c'=>$request['conhece_valor_ultima_hba1c'],
            'valor_ultima_hba1c'=>$request['valor_ultima_hba1c'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('atividades_educativas.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = AtividadeDiabete::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.atividades_educativas.index', compact('dados', 'dados_paciente'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        AtividadeDiabete::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'quantia_consultas_enfermagem'=>$request['quantia_consultas_enfermagem'],
            'finalidade_consulta'=>$request['finalidade_consulta'],
            'reunioes_diabeticos'=>$request['reunioes_diabeticos'],
            'programas_educacao_diabeticos'=>$request['programas_educacao_diabeticos'],
            'conhece_hba1c'=>$request['conhece_hba1c'],
            'significado_hba1c'=>$request['significado_hba1c'],
            'valor_maximo_hba1c'=>$request['valor_maximo_hba1c'],
            'conhece_valor_ultima_hba1c'=>$request['conhece_valor_ultima_hba1c'],
            'valor_ultima_hba1c'=>$request['valor_ultima_hba1c'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('atividades_educativas.editar', compact('num_registro', 'num_USP'));
    }
}
