<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class Dieta extends Model
{
    use HasFactory;

    protected $table = 'dietas';

    protected $primaryKey = 'num_USP';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'tipo_dieta',
        'segue_dieta',
        'realiza',
        'dificuldade_dieta',
        'frequencia_nutricionista',
        'consulta_nutricionista',
        'orientador',
        'consome_dieteticos',
        'produtos_dieteticos',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Pessoa::class, 'num_registro', 'num_registro');
    }
}
