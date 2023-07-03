<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'nome',
        'data_nascimento',
        'idade',
        'sexo',
        'cor',
        'estado_civil',
        'profissao',
        'escolaridade',
        'renda_mensal',
        'dependentes_renda',
        'transporte',
        'plano_saude',
        'telefone',
        'segundo_telefone',
        'pertence_segundo_telefone',
        'data_entrada',
        'ativo',
        'estado_nascimento',
        'cidade_nascimento',
        'CEP',
        'numero',
        'num_USP',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'num_USP', 'num_USP');
    }

    public function enderecos()
    {
        return $this->belongsTo(Endereco::class, ['CEP', 'numero'], ['CEP', 'numero']);
    }

    public function exame_fisicos()
    {
        return $this->hasOne(ExameFisico::class, 'num_registro', 'num_registro');
    }

    public function dietas()
    {
        return $this->hasOne(Dieta::class, 'num_registro', 'num_registro');
    }

    public function ginecologico_dados()
    {
        return $this->hasOne(GinecologicoDado::class, 'num_registro', 'num_registro');
    }

    public function internacoes_historicos()
    {
        return $this->hasOne(InternacoesHistorico::class, 'num_registro', 'num_registro');
    }

    public function nascimento_dados()
    {
        return $this->hasOne(NascimentoDado::class, 'num_registro', 'num_registro');
    }

    public function comorbidades()
    {
        return $this->hasOne(Comorbidade::class, 'num_registro', 'num_registro');
    }

    public function familiar_historicos()
    {
        return $this->hasOne(FamiliarHistorico::class, 'num_registro', 'num_registro');
    }

    public function frequencia_acompanhamentos()
    {
        return $this->hasOne(FrequenciaAcompanhamento::class, 'num_registro', 'num_registro');
    }

    public function pes_exames()
    {
        return $this->hasOne(PesExame::class, 'num_registro', 'num_registro');
    }
    
    public function automonitorizacao_glicemias()
    {
        return $this->hasOne(AutomonitorizacaoGlicemia::class, 'num_registro', 'num_registro');
    }

    public function cardiovascular_dados()
    {
        return $this->hasOne(CardiovascularDado::class, 'num_registro', 'num_registro');
    }

    public function atividade_diabetes()
    {
        return $this->hasOne(AtividadeDiabete::class, 'num_registro', 'num_registro');
    }

    public function habitos_vidas()
    {
        return $this->hasOne(HabitosVida::class, 'num_registro', 'num_registro');
    }

    public function exercicio_fisicos()
    {
        return $this->hasOne(ExercicioFisico::class, 'num_registro', 'num_registro');
    }
    
    public function neuropatico_comprometimentos()
    {
        return $this->hasOne(NeuropaticoComprometimento::class, 'num_registro', 'num_registro');
    }

    public function primeiro_diagnosticos()
    {
        return $this->hasOne(PrimeiroDiagnostico::class, 'num_registro', 'num_registro');
    }

    public function diagnosticos()
    {
        return $this->hasOne(Diagnostico::class, 'num_registro', 'num_registro');
    }

    public function complicacaos()
    {
        return $this->hasOne(Complicacao::class, 'num_registro', 'num_registro');
    }

    public function tratamentos()
    {
        return $this->hasOne(Tratamento::class, 'num_registro', 'num_registro');
    }

    public function medicamentos()
    {
        return $this->hasOne(Medicamento::class, 'num_registro', 'num_registro');
    }

}
