<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comorbidade;

class ComorbidadesSeeder extends Seeder
{
    public function run(): void
    {
        Comorbidade::create([
            'num_registro'=>'11111',
            'ocular' => json_encode(['Glaucoma', 'Catarata']),
            'neuropatia'=>json_encode(['Mononeuropatia', 'Polineuropatia sensitivo-motora simétrico distal']),
            'doenca_cronica'=>json_encode(['HAS', 'Dislipidemia']),
            'num_USP' => '11111',
        ]);
    }
}
