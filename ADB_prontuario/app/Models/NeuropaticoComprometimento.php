<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeuropaticoComprometimento extends Model
{
    use HasFactory;

    protected $table = 'neuropatico_comprometimentos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;
    
    protected $fillable = [
        'num_registro',
        'reflexo_aquileu_direito',
        'reflexo_aquileu_esquerdo',
        'sensibilidade_vibratoria_direita',
        'sensibilidade_vibratoria_esquerda',
        'sensibilidade_dolorosa_direita',
        'sensibilidade_dolorosa_esquerda',
        'sensibilidade_termica_direita',
        'sensibilidade_termica_esquerda',
        'total_pontos',
        'diagnostico_neuropatia_periferica',
        'observacoes',
        'num_USP',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
