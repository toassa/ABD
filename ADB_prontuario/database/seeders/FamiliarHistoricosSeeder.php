<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\FamiliarHistorico;

class FamiliarHistoricosSeeder extends Seeder
{
    public function run(): void
    {
        FamiliarHistorico::create([
            'num_registro' => '11111',
            'dm' => 'Pai',
            'possui_dm1' => false,
            'dm1' => null,
            'obesidade' => 'Mãe',
            'vitiligo' => 'Irmão(a)(s)',
            'doenca_tireoideana' => 'Não há histórico familiar',
            'displidemia' => 'Não sabe',
            'alopecia' => 'Avós ou Tios ou Primos',
            'artrite_reumatoide' => 'Filho(a)(s)',
            'doenca_coronariana' => 'Não sabe',
            'has' => 'Não há histórico familiar',
            'doenca_celiaca' => 'Pai',
        ]);
    }
}
