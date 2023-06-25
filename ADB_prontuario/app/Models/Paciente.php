<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

    public function dado_ginecologicos()
    {
        return $this->hasOne(DadoGinecologico::class, 'num_registro', 'num_registro');
    }
}
