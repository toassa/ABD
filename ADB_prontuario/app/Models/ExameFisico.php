<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class ExameFisico extends Model
{
    use HasFactory;

    protected $table = 'exame_fisicos';

    protected $primaryKey = ['num_USP'];

    public $increments = false;

    protected $fillable = [
        'num_USP',
        'peso',
        'altura',
        'pressao_arterial',
        'pulso_arterial',
        'frequencia_cardiaca',
        'aspecto_geral',
        'cabeca_pescoco',
        'cincurferencia_quadril',
        'circunferencia_pescoco',
        'sistema_venoso',
        'sistema_digestivo',
        'sistema_respiratorio',
        'sistema_cardiovascular',
        'cosidereacoes_outros_sistemas',
    ];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'num_USP', 'num_USP');
    }
}