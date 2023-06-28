<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';

    protected $primaryKey = ['CEP', 'numero'];

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'CEP',
        'numero',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'complemento',
    ];

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyName()
    {
        return ['CEP', 'numero'];
    }

    public function exame_fisicos()
    {
        return $this->hasMany(Paciente::class, ['CEP', 'numero'], ['CEP', 'numero']);
    }
}
