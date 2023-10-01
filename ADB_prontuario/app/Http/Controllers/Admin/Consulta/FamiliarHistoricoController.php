<?php

namespace App\Http\Controllers\Admin\Consulta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\FamiliarHistorico;

use Illuminate\Support\Facades\Auth;

class FamiliarHistoricoController extends Controller
{
    public function opcao($num_registro){

        $dados = Paciente::find($num_registro); 
        $primas = FamiliarHistorico::find($num_registro);
        $num_USP = Auth::User()->num_USP;
        if($primas == null){
            return redirect()->route('familiar_historico.index', compact('num_registro'));
        }else{
            return redirect()->route('familiar_historico.editar', compact('num_registro', 'num_USP'));
        }
    }

    public function index($num_registro)
    {
        $dados = Paciente::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.familiar_historico.index', compact('dados','dados_paciente'));
    }

    public function salvar(Request $req, $num_registro, $num_USP){
        $request = $req->all();

        $jsonData = $req->input('dm');
        $dm = json_encode($jsonData);

        $jsonData = $req->input('obesidade');
        $obesidade = json_encode($jsonData);

        $jsonData = $req->input('vitiligo');
        $vitiligo = json_encode($jsonData);

        $jsonData = $req->input('doenca_tireoideana');
        $doenca_tireoideana = json_encode($jsonData);

        $jsonData = $req->input('displidemia');
        $displidemia = json_encode($jsonData);

        $jsonData = $req->input('alopecia');
        $alopecia = json_encode($jsonData);

        $jsonData = $req->input('alopecia');
        $alopecia = json_encode($jsonData);

        $jsonData = $req->input('artrite_reumatoide');
        $artrite_reumatoide = json_encode($jsonData);

        $jsonData = $req->input('doenca_coronariana');
        $doenca_coronariana = json_encode($jsonData);

        $jsonData = $req->input('has');
        $has = json_encode($jsonData);

        $jsonData = $req->input('doenca_celiaca');
        $doenca_celiaca = json_encode($jsonData);

        FamiliarHistorico::create([
            'num_registro'=>$num_registro,
            'dm'=>$dm,
            'possui_dm1'=>$request['possui_dm1'],
            'dm1'=>$request['dm1'],
            'obesidade'=>$obesidade,
            'vitiligo'=>$vitiligo,
            'doenca_tireoideana'=>$doenca_tireoideana,
            'displidemia'=>$displidemia,
            'alopecia'=>$alopecia,
            'artrite_reumatoide'=>$artrite_reumatoide,
            'doenca_coronariana'=>$doenca_coronariana,
            'has'=>$has,
            'doenca_celiaca'=>$doenca_celiaca,
            'num_USP'=>$num_USP,
        ]);

        return redirect()->route('familiar_historico.editar', compact('num_registro', 'num_USP'));
    }

    public function editar($num_registro){
        $dados = FamiliarHistorico::find($num_registro);
        $dados_paciente = Paciente::find($num_registro);
        return view('site.paciente.consulta.familiar_historico.index', compact('dados','dados_paciente'));
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
