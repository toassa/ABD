<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $primaryKey = 'num_USP';

    protected $fillable = [
        'num_USP',
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
        'FK_CEP',
        'FK_numero',
        'FK_num_USP',
    ];
}
