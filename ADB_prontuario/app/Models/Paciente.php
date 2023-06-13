<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $primaryKey = 'num_registro';

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
        'FK_num_USP',
    ];
}
