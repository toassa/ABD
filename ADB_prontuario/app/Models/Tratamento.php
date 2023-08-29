<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamento extends Model
{
    use HasFactory;

    protected $table = 'tratamentos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'medicamento_diabetes',
        'uso_insulina',
        'tipos_insulinas',
        'nome_insulina',
        'origem_insulinas',
        'utensilho',
        'origem_utensilho',
        'reuso_seringas_insulina',
        'quantia_reuso_seringas',
        'aderencia',
        'num_USP',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
