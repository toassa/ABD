<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GinecologicoDado extends Model
{
    use HasFactory;

    protected $table = 'ginecologico_dados';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'menopausa',
        'idade_menopausa',
        'menopausa_cirurgica',
        'menstruacao',
        'idade_menstruacao',
        'historico_obstetrico',
        'uso_metodos_contraceptivos',
        'metodos_contraceptivos',
        'mamografia',
        'papanicolau',
        'frequencia_ginecologica',
        'num_USP',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
