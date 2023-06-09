<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pessoa;

class PessoasSeeder extends Seeder
{
    public function run(): void
    {
        Pessoa::create([
            'num_USP'=>'1111',
            'nome'=> 'Raissa Toassa Martinelli',
            'CPF'=>'78878787878',
            'email_USP'=>'raissa.toassa@unesp.br',
            'senha'=>bcrypt('123456'),
            'cargo'=>'aluno',
            'administrador'=>true,
        ]);
    }
}
