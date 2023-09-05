<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\Auth;
use Illuminate\Console\View\Components\Alert;

use App\Models\Paciente;
use App\Models\PrimeiroDiagnostico;


class PrimeiraConsultaController extends Controller
{
    public function menu($num_registro){
        $dados = Paciente::find($num_registro);
        return view('site.paciente.menu', compact('dados'));
    }

    public function menu_atendimento($num_registro){
        $dados = Paciente::find($num_registro);
        return view('site.paciente.menu_atendimento', compact('dados'));
    }

    public function primeiro_atendimento($num_registro){
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.cadastrar', compact('dados'));
    }

    public function atividades_educativas($num_registro){
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.atividades_educativas.index', compact('dados'));
    }

    public function automonitorizacao($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.automonitorizacao.index', compact('dados'));
    }

    public function cardiovascular_dados($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.cardiovascular_dados.index', compact('dados'));
    }

    public function comorbidades($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.comorbidades.index', compact('dados'));
    }

    public function complicacoes($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.complicacoes.index', compact('dados'));
    }

    public function diagnostico_atual($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.diagnostico_atual.index', compact('dados'));
    }

    public function dieta($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.dieta.index', compact('dados'));
    }

    public function exercicios_fisicos($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.exercicios_fisicos.index', compact('dados'));
    }

    public function familiar_historico($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.familiar_historico.index', compact('dados'));
    }

    public function frequencia_acompanhamento($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.frequencia_acompanhamento.index', compact('dados'));
    }

    public function ginecologico_dados($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.ginecologico_dados.index', compact('dados'));
    }

    public function habitos_vida($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.habitos_vida.index', compact('dados'));
    }

    public function internacoes($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.internacoes.index', compact('dados'));
    }

    public function nascimento($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.nascimento.index', compact('dados'));
    }

    public function neuropatico_comprometimento($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.neuropatico_comprometimento.index', compact('dados'));
    }

    public function pes_exame($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.pes_exame.index', compact('dados'));
    }

    public function tratamento($num_registro)
    {
        $dados = Paciente::find($num_registro);
        return view('site.paciente.consulta.tratamento.index', compact('dados'));
    }
}
