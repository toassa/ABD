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
            'ocular'=>'Catarata',
            'neuropatia'=>'Mononeuropatia',
            'doenca_cronica'=>'HAS',
            'num_USP' => '11111',
        ]);
    }
}
