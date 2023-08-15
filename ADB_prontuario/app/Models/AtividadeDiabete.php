<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadeDiabete extends Model
{
    use HasFactory;

    protected $table = 'atividade_diabetes';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'quantia_consultas_enfermagem',
        'finalidade_consulta',
        'reunioes_diabeticos',
        'programas_educacao_diabeticos',
        'conhece_hba1c',
        'significado_hba1c',
        'valor_maximo_hba1c',
        'conhece_valor_ultima_hba1c',
        'valor_ultima_hba1c',
        'num_USP',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
