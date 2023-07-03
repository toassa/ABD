<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $table = 'medicamentos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'HAS',
        'dislipidemia',
        'anticoagulante',
        'tireoide',
        'ansiedade_depressao',
        'outros',
        'aderencia',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
