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

    public function exame_fisicos()
    {
        return $this->hasOne(ExameFisico::class, 'num_USP', 'num_USP');
    }

    public function dietas()
    {
        return $this->hasOne(Dieta::class, 'num_USP', 'num_USP');
    }
}
