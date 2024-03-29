<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $table = 'medicamentos';

    protected $primaryKey = 'nome';

    protected $keyType = 'string';

    public $increments = false;

    protected $fillable = [
        'nome',
    ];

    public function tratamento_medicamentos()
    {
        return $this->hasMany(TratamentoMedicamento::class, 'nome', 'nome');
    }
}
