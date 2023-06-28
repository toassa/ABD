<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternacoesHistorico extends Model
{
    use HasFactory;

    protected $table = 'internacoes_historicos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'local',
        'motivo',
        'quantidade_dias',
        'frequencia_ultimo_ano',
        'fator_desencadeante'
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
