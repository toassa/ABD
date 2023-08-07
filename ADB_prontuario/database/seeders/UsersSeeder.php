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
            'num_USP'=>'11111',
            'name'=> 'Matheus',
            'CPF'=>'78878787878',
            'email'=>'matheus.oliveira@unesp.br',
            'password'=>bcrypt('123456'),
            'cargo'=>'aluno',
            'administrador'=>true,
            'ativo'=>true,
        ]);
    }
}
