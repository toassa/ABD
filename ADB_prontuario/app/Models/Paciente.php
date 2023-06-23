<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $primaryKey = 'num_registro';

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

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'num_USP', 'num_USP');
    }

    public function enderecos()
    {
        return $this->belongsTo(Pessoa::class, ['CEP', 'numero'], ['CEP', 'numero']);
    }

    public function exame_fisicos()
    {
        return $this->hasOne(ExameFisico::class, 'num_registro', 'num_registro');
    }

    public function dietas()
    {
        return $this->hasOne(Dieta::class, 'num_registro', 'num_registro');
    }
}
