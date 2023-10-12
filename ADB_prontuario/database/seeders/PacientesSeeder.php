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
            'num_registro' => '22222',
            'nome' => 'Ednaldo Pereira',
            'data_nascimento' => '12/12/2000',
            'idade' => 60,  
            'sexo' => 'Masculino',
            'cor' => 'Branco',
            'estado_civil' => 'Solteiro',
            'desempregado_aposentado_diabetes'=>false,
            'profissao' => 'Motorista',
            'escolaridade' => 'Ensino Médio',
            'renda_mensal' => '1.500,50',
            'dependentes_renda' => 2,
            'transporte' => 'Carro',
            'plano_saude' => true,
            'telefone' => '987654321',
            'segundo_telefone' => '123456789',
            'pertence_segundo_telefone' => 'Sim',
            'CEP'=>'12345678',
            'numero_moradia'=>'326',
            'rua'=>'Rua das Flores',
            'bairro'=>'Centro',
            'cidade'=>'São Paulo',
            'estado'=>'SP',
            'complemento'=>'Apartamento 1A na Zona Norte',
            'estado_nascimento'=>'Sergipe',
            'cidade_nascimento'=>'Aracaju',
            'ativo' => true,
            'num_USP' => '2157022',
        ]);
    }
}
