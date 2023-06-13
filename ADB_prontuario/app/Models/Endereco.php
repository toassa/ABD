<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';

    protected $primaryKey = ['CEP', 'numero'];

    protected $fillable = [
        'CEP',
        'numero',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'complemento',
    ];
}
