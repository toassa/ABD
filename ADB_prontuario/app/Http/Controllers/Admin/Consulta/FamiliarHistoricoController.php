<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\FamiliarHistorico;

class FamiliarHistoricoController extends Controller
{
    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.familiar_historico.index', compact('dados'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        FamiliarHistorico::create([
            'num_registro'=>$num_registro,
            'dm'=>$request['dm'],
            'possui_dm1'=>$request['possui_dm1'],
            'dm1'=>$request['dm1'],
            'obesidade'=>$request['obesidade'],
            'vitiligo'=>$request['vitiligo'],
            'doenca_tireoideana'=>$request['doenca_tireoideana'],
            'displidemia'=>$request['displidemia'],
            'alopecia'=>$request['alopecia'],
            'artrite_reumatoide'=>$request['artrite_reumatoide'],
            'doenca_coronariana'=>$request['doenca_coronariana'],
            'has'=>$request['has'],
            'doenca_celiaca'=>$request['doenca_celiaca'],
            'num_USP'=>$num_USP,
        ]);

        return redirect()->route('familiar_historico.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = FamiliarHistorico::find($num_registro);
        return view('site.paciente.consulta.familiar_historico.index', compact('dados'));
    }

    public function atualizar(Request $req, $num_registro, $num_USP)
    {
        $request = $req->except('_token');
        FamiliarHistorico::where('num_registro',$num_registro)->update([
            'num_registro'=>$num_registro,
            'dm'=>$request['dm'],
            'possui_dm1'=>$request['possui_dm1'],
            'dm1'=>$request['dm1'],
            'obesidade'=>$request['obesidade'],
            'vitiligo'=>$request['vitiligo'],
            'doenca_tireoideana'=>$request['doenca_tireoideana'],
            'displidemia'=>$request['displidemia'],
            'alopecia'=>$request['alopecia'],
            'artrite_reumatoide'=>$request['artrite_reumatoide'],
            'doenca_coronariana'=>$request['doenca_coronariana'],
            'has'=>$request['has'],
            'doenca_celiaca'=>$request['doenca_celiaca'],
            'num_USP'=>$num_USP,
        ]);
        return redirect()->route('familiar_historico.editar', compact('num_registro', 'num_USP'));
    }
}
