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
            'dm' =>json_encode(['Pai', 'Mãe']),
            'possui_dm1' => false,
            'dm1' => null,
            'obesidade' => json_encode(['Pai', 'Mãe']),
            'vitiligo' => json_encode(['Pai', 'Mãe']),
            'doenca_tireoideana' => json_encode(['Pai', 'Mãe']),
            'displidemia' => json_encode(['Pai', 'Mãe']),
            'alopecia' => json_encode(['Pai', 'Mãe']),
            'artrite_reumatoide' => json_encode(['Pai', 'Mãe']),
            'doenca_coronariana' => json_encode(['Pai', 'Mãe']),
            'has' => json_encode(['Pai', 'Mãe']),
            'doenca_celiaca' => json_encode(['Pai', 'Mãe']),
            'num_USP' => '11111',
        ]);
    }
}
