<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Complicacao;

class ComplicacaosSeeder extends Seeder
{
    public function run(): void
    {
        Complicacao::create([
            'num_registro'=>'11111',
            'complicacoes'=>false,
            'quais_complicacoes'=>null,
            'internacao_complicacao'=>true,
            'causa_internacao'=>'Nível muito alto de hipoglicemia',
            'episodio_hipoglicemia'=>'Não lembra',
            'episodio_assintomatico'=>'',
            'nivel_episodio'=>'Grave',
            'periodo_frequente_hipoglocemia'=>'Noite',
            'episodios_ultimo_mes',
            'alimento_tratar_hipoglicemia',
        ]);
    }
}
