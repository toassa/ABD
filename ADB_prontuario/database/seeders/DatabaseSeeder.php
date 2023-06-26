<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ExameFisico;
use App\Models\FamiliarHistorico;
use App\Models\InternacoesHistorico;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            EnderecosSeeder::class,
            PacientesSeeder::class,
            ExamesFisicosSeeder::class,
            DietasSeeder::class,
            GinecologicoDadosSeeder::class,
            InternacoesHistoricosSeeder::class,
            NascimentoDadosSeeder::class,
            ComorbidadesSeeder::class,
            FamiliarHistoricosSeeder::class,
        ]);
    }
}
