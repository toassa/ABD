<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExameFisico;
use App\Models\Dieta;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'pessoas';

    protected $primaryKey = 'num_USP';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'num_USP',
        'nome',
        'CPF',
        'email_USP',
        'senha',
        'cargo',
        'administrador',
        'ativo',
    ];

    // public function pacientes()
    // {
    //     return $this->hasMany(Paciente::class, 'num_USP', 'num_USP');
    // }
}
