<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Paciente;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paciente::create([
            'num_registro' => '11111',
            'nome' => 'Ednaldo Pereira',
            'data_nascimento' => '12/12/2000',
            'idade' => 60,  
            'sexo' => 'Masculino',
            'cor' => 'Branco',
            'estado_civil' => 'Solteiro',
            'profissao' => 'Motorista',
            'escolaridade' => 'Ensino Médio',
            'renda_mensal' => 2500.00,
            'dependentes_renda' => 2,
            'transporte' => 'Carro',
            'plano_saude' => true,
            'telefone' => '987654321',
            'segundo_telefone' => '123456789',
            'pertence_segundo_telefone' => 'Sim',
            'estado_nascimento'=>'Sergipe',
            'cidade_nascimento'=>'Aracaju',
            'ativo' => true,
            'CEP'=>'12345678',
            'numero'=>'326',
            'num_USP' => '11111',
        ]);
    }
}
