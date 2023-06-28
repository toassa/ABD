<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NascimentoDado extends Model
{
    use HasFactory;

    protected $table = 'nascimento_dados';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;
    
    protected $fillable = [
        'num_registro',
        'amamentacao_exclusiva',
        'tempo_amamentacao',
        'ordem', 
        'tipo_parto',
        'peso'
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
