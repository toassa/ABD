<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\GinecologicoDado;

use Illuminate\Support\Facades\Auth;

class GinecologicosDadosController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = GinecologicoDado::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('ginecologico_dados.index', compact('num_registro'));
        }else{
            return redirect()->route('ginecologico_dados.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.ginecologico_dados.index', compact('dados','dados_paciente'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        GinecologicoDado::create([
            'num_registro'=>$num_registro,
            'menopausa'=>$request['menopausa'],
            'idade_menopausa'=>$request['idade_menopausa'],
            'menopausa_cirurgica'=>$request['menopausa_cirurgica'],
            'menstruacao'=>$request['menstruacao'],
            'idade_menstruacao'=>$request['idade_menstruacao'],
            'historico_obstetrico'=>$request['historico_obstetrico'],
            'uso_metodos_contraceptivos'=>$request['uso_metodos_contraceptivos'],
            'metodos_contraceptivos'=>$request['metodos_contraceptivos'],
            'mamografia'=>$request['mamografia'],
            'papanicolau'=>$request['papanicolau'],
            'frequencia_ginecologica'=>$request['frequencia_ginecologica'],
            'num_USP' => $num_USP,
        ]);

        return redirect()->route('ginecologico_dados.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = GinecologicoDado::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.ginecologico_dados.index', compact('dados','dados_paciente'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        GinecologicoDado::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'menopausa'=>$request['menopausa'],
            'idade_menopausa'=>$request['idade_menopausa'],
            'menopausa_cirurgica'=>$request['menopausa_cirurgica'],
            'menstruacao'=>$request['menstruacao'],
            'idade_menstruacao'=>$request['idade_menstruacao'],
            'historico_obstetrico'=>$request['historico_obstetrico'],
            'uso_metodos_contraceptivos'=>$request['uso_metodos_contraceptivos'],
            'metodos_contraceptivos'=>$request['metodos_contraceptivos'],
            'mamografia'=>$request['mamografia'],
            'papanicolau'=>$request['papanicolau'],
            'frequencia_ginecologica'=>$request['frequencia_ginecologica'],
            'num_USP' => $num_USP,
        ]);
        return redirect()->route('ginecologico_dados.editar', compact('num_registro', 'num_USP'));
    }

}
