<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\Auth;
use Illuminate\Console\View\Components\Alert;

use App\Models\Paciente;
use App\Models\PrimeiroDiagnostico;

class PrimeiroDiagnosticoController extends Controller
{
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
            'idade'=>$request['idade'],
            'sintomas'=>$request['sintomas'],
            'como_foi_feito'=>$request['como_foi_feito'],
            'infeccoes_seis_meses'=>$request['infeccoes_seis_meses'],
            'quais_infeccoes'=>$request['quais_infeccoes'],
            'periodo_sintomas_diagnostico'=>$request['periodo_sintomas_diagnostico'],
            'fator_emocional'=>$request['fator_emocional'],
            'qual_fator_emocional'=>$request['qual_fator_emocional'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('paciente.listar', compact('num_registro', 'num_USP'));
    }
}
