<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pessoa;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pessoa::create([
            'num_USP' => '11111',
            'nome' => 'Ednaldo Pereira',
            'data_nascimento' => '12/12/2000',
            'idade' => 60,  
            'sexo' => 'Masculino',
            'cor' => 'Branca',
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
            'data_entrada' => '01/01/2023',
            'ativo' => true,
            'FK_CEP'=>'12345-678',
            'FK_numero'=>'326',
            'FK_num_USP' => '11111',
        ]);
    }
}
