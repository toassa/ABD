<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TratamentoMedicamento extends Model
{
    use HasFactory;

    protected $table = 'tratamento_medicamentos';

    protected $primaryKey = ['num_registro', 'nome'];

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'nome',
        'tipo',
        'posologia',
        'origem',
        'aderencia',
        'num_USP',
    ];

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyName()
    {
        return ['num_registro', 'nome'];
    }

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }

    public function medicamentos()
    {
        return $this->belongsTo(Medicamento::class, 'nome', 'nome');
    }
}
