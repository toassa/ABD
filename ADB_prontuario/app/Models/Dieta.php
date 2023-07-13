<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    use HasFactory;

    protected $table = 'dietas';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'realiza',
        'tipo_dieta',
        'segue_dieta',
        'dificuldade_dieta',
        'orientador',
        'consulta_nutricionista',
        'frequencia_nutricionista',
        'consome_dieteticos',
        'produtos_dieteticos',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
