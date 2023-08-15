<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequenciaAcompanhamento extends Model
{
    use HasFactory;

    protected $table = 'frequencia_acompanhamentos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'dentista',
        'cardiologista',
        'oftalmologista',
        'urologista',
        'exame_toque_urologista',
        'num_USP',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
