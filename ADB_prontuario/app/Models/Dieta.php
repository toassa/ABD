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

    protected $fillable = [
        'num_USP',
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

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'num_USP', 'num_USP');
    }
}
