<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Paciente;
use App\Models\PrimeiroDiagnostico;

class PrimeiroDiagnosticoController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = PrimeiroDiagnostico::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('primeiro_diagnostico.index', compact('num_registro'));
        }else{
            return redirect()->route('primeiro_diagnostico.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.primeiro_diagnostico.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();
        PrimeiroDiagnostico::create([
            'num_registro'=>$num_registro,
            'ano'=>$request['ano'],
            'idade_diagnostico'=>$request['idade_diagnostico'],
            'sintomas'=>$request['sintomas'],
            'como_foi_feito'=>$request['como_foi_feito'],
            'infeccoes_seis_meses'=>$request['infeccoes_seis_meses'],
            'quais_infeccoes'=>$request['quais_infeccoes'],
            'periodo_sintomas_diagnostico'=>$request['periodo_sintomas_diagnostico'],
            'fator_emocional'=>$request['fator_emocional'],
            'qual_fator_emocional'=>$request['qual_fator_emocional'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('primeiro_diagnostico.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = PrimeiroDiagnostico::find($num_registro);
        return view('site.paciente.consulta.primeiro_diagnostico.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        PrimeiroDiagnostico::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'ano'=>$request['ano'],
            'idade_diagnostico'=>$request['idade_diagnostico_diagnostico'],
            'sintomas'=>$request['sintomas'],
            'como_foi_feito'=>$request['como_foi_feito'],
            'infeccoes_seis_meses'=>$request['infeccoes_seis_meses'],
            'quais_infeccoes'=>$request['quais_infeccoes'],
            'periodo_sintomas_diagnostico'=>$request['periodo_sintomas_diagnostico'],
            'fator_emocional'=>$request['fator_emocional'],
            'qual_fator_emocional'=>$request['qual_fator_emocional'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('pacientes.listar');
    }
}
