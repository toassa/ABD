<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Endereco;

class EnderecosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Endereco::create([
            'CEP'=>'12345-678',
            'numero'=>'123',
            'rua'=>'Rua das Flores',
            'bairro'=>'Centro',
            'cidade'=>'São Paulo',
            'estado'=>'SP',
            'complemento'=>'Apartamento 1A na Zona Norte'
        ]);
    }
}
