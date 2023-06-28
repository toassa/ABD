<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesExame extends Model
{
    use HasFactory;

    protected $table = 'pes_exames';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'casos_ulceras',
        'regioes_ulceras',
        'caracteristicas_ulceras',
        'alteracoes',
        'deformidades',
        'pulsos',
        'alteracoes_neuropaticas',
        'demais_alteracoes',
        'observacoes',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
