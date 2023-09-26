<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tratamento;

class TratamentosSeeder extends Seeder
{
    public function run(): void
    {
        Tratamento::create([
            'num_registro'=>'11111',
            'medicamento_diabetes'=>'NSOCA',
            'uso_insulina'=>false,
            'tipos_insulinas'=>json_encode(['Análogos de ação rápida (glulisina, lispro e asparte)', 'Análogos de ação ultrarrápida (asparte ultrarrápida)']),
            'nome_insulina'=>null,
            'frequencia_insulina'=>'3 vezes/dia',
            'dose_insulina'=>'4 mg',
            'origem_insulinas'=>null,
            'utensilho'=>null,
            'origem_utensilho'=>json_encode(['Deixa de aplicar insulina alguma vez quando se sente mal', 'Nunca esqueci de aplicar']),
            'reuso_seringas_insulina'=>null,
            'quantia_reuso_seringas'=>null,
            'aderencia'=>json_encode(['Deixa de aplicar insulina alguma vez quando se sente mal', 'Nunca esqueci de aplicar']),
            'num_USP' => '11111',
        ]);
    }
}
