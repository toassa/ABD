<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarHistorico extends Model
{
    use HasFactory;

    protected $table = 'familiar_historicos';

    protected $primaryKey = 'num_registro';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_registro',
        'dm',
        'possui_dm1',
        'dm1',
        'obesidade',
        'vitiligo',
        'doenca_tireoideana',
        'displidemia',
        'alopecia',
        'artrite_reumatoide',
        'doenca_coronariana',
        'has',
        'doenca_celiaca',
    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'num_registro', 'num_registro');
    }
}
