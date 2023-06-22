<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ExameFisico;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PessoasSeeder::class,
            PacientesSeeder::class,
            EnderecosSeeder::class,
            ExamesFisicosSeeder::class,
            DietasSeeder::class
        ]);
    }
}
