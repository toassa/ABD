<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\GinecologicoDado;

class GinecologicoDadosSeeder extends Seeder
{
    public function run(): void
    {
        GinecologicoDado::create([
            'num_registro'=>'11111',
            'menopausa'=>true,
            'idade_menopausa'=>'53',
            'menopausa_cirurgica'=>false,
            'menstruacao'=>true,
            'idade_menstruacao'=>'17',
            'historico_obstetrico'=>'G3P2A1: 1F e 1M',
            'uso_metodos_contraceptivos'=>true,
            'metodos_contraceptivos'=>'DIU',
            'mamografia'=>true,
            'papanicolau'=>false,
            'frequencia_ginecologica'=>'4 vezes ao ano',
            'num_USP' => '11111',
        ]);
    }
}
