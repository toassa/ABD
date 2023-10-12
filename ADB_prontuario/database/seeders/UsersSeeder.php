<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'num_USP'=>'2157022',
            'name'=> 'Raissa Toassa Martinelli',
            'CPF'=>'78878787878',
            'email'=>'raissa.toassa@unesp.br',
            'password'=>bcrypt('123456'),
            'cargo'=>'coordenador',
            'funcao'=>'nutricao',
            'mesa'=>4,
            'administrador'=>true,
            'ativo'=>true,
        ]);
    }
}
