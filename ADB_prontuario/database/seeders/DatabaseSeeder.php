<?php

namespace Database\Seeders;

use App\Models\Diagnostico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // UsersSeeder::class,
            // PacientesSeeder::class,
            // ExamesFisicosSeeder::class,
            // DietasSeeder::class,
            // GinecologicoDadosSeeder::class,
            // InternacoesHistoricosSeeder::class,
            // NascimentoDadosSeeder::class,
            ComorbidadesSeeder::class,
            FamiliarHistoricosSeeder::class,
            FrequenciaAcompanhamentosSeeder::class,
            PesExamesSeeder::class,
            AutomonitorizacaoGlicemiasSeeder::class,
            CardiovascularDadosSeeder::class,
            AtividadeDiabetesSeeder::class,
            HabitosVidasSeeder::class,
            ExercicioFisicosSeeder::class,
            NeuropaticoComprometimentosSeeder::class,
            PrimeiroDiagnosticosSeeder::class,
            DiagnosticosSeeder::class,
            ComplicacaosSeeder::class,
            TratamentosSeeder::class,
            MedicamentosSeeder::class,
            TratamentoMedicamentoSeeder::class,
        ]);
    }
}
