<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimeiroDiagnostico extends Model
{
    use HasFactory;

    protected $table = 'primeiro_diagnosticos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'ano',
        'idade',
        'sintomas',
        'como_foi_feito',
        'infeccoes_seis_meses',
        'quais_infeccoes',
        'periodo_sintomas_diagnostico',
        'fator_emocional',
        'qual_fator_emocional',
        'num_USP',
    ];
    
    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
