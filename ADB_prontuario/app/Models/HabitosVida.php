<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitosVida extends Model
{
    use HasFactory;

    protected $table = 'habitos_vidas';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'sobre_etilismo',
        'periodo_quantia_etilismo',
        'classificacao_etilismo',
        'sobre_tabagismo',
        'quantia_tabagismo',
        'sobre_drogas_ilicitas',
        'quais_periodo_drogas',
        'sobre_anabolizantes',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
            
}
