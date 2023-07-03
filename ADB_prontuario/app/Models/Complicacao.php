<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complicacao extends Model
{
    use HasFactory;

    protected $table = 'complicacaos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'complicacoes',
        'quais_complicacoes',
        'internacao_complicacao',
        'causa_internacao',
        'episodio_hipoglicemia',
        'episodio_assintomatico',
        'nivel_episodio',
        'periodo_frequente_hipoglocemia',
        'episodios_ultimo_mes',
        'alimento_tratar_hipoglicemia',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
