<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutomonitorizacaoGlicemia extends Model
{
    use HasFactory;

    protected $table = 'automonitorizacao_glicemias';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'realiza_automonitorizacao',
        'frequencia_medicoes',
        'origem_fitas',
        'contagem_carboidratos'
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }

    
}
