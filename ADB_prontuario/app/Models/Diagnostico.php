<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;

    protected $table = 'diagnosticos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'sintomas',
        'libido_alterado',
    ];
    
    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
