<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExameFisico extends Model
{
    use HasFactory;

    protected $table = 'exame_fisicos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'peso',
        'altura',
        'pressao_arterial',
        'pulso_arterial',
        'frequencia_cardiaca',
        'aspecto_geral',
        'cabeca_pescoco',
        'cincurferencia_quadril',
        'circunferencia_pescoco',
        'circunferencia_abdominal',
        'sistema_venoso',
        'sistema_digestivo',
        'sistema_respiratorio',
        'sistema_cardiovascular',
        'cosidereacoes_outros_sistemas',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}