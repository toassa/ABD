<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Medicamento;

class MedicamentosSeeder extends Seeder
{
    public function run(): void
{
    $medicamentos = [
        'AAS',
        'AC NICOT',
        'ACARBOSE NA GLUCOBAY',
        'ÁCIDO TIÓTICO',
        'ALENDRONATO',
        'ALOGLIPTINA',
        'ALOPURINOL',
        'AMILORIDA+HCT',
        'ANLODIPINO',
        'ASPARTE',
        'ASPARTE U R',
        'ATENOLOL',
        'ATORVA',
        'BEZAFIBRATO',
        'BISOPROL',
        'BUPROPIONA',
        'CANDESARTAN',
        'CAPTOPRIL',
        'CARVEDILOL',
        'CIPROFIBRATO',
        'CITALOPRAM',
        'CLOPIDOGREL',
        'CLORPROP',
        'CLORTALIDONA',
        'DAPAGLIFOZINA',
        'DEGLUDECA',
        'DULAGLUTIDA',
        'DULOXETINA',
        'EMPAGLIFOZINA',
        'ENALAPRIL',
        'ENALAPRIL/HCLTZ',
        'ESCITALOPRAM',
        'ESPIRONOLACTONA (ALDACTONE)',
        'EZETIMIBA',
        'FENOFIBRATO',
        'FIASP',
        'FINASTERIDA',
        'FLUOX',
        'FUROSEMIDA',
        'GABAPENTINA',
        'GENFIBROZILA',
        'GLARGINA U100',
        'GLIBENCL',
        'GLICLAZIDA',
        'GLIMEP',
        'GLIPIZIDA',
        'GLULISINA',
        'HIDROCLOROTIAZIDA',
        'INDAPAMIDA',
        'IRBESARTANA',
        'LASILACTONA',
        'LEVOTIROXINA',
        'LINAGLIP',
        'LIRAGLUTIDA',
        'LISINOPRIL',
        'LISPRO',
        'LOSARTANA',
        'MANIDIPINA',
        'METFORMINA',
        'METOPROLOL',
        'NADOLOL',
        'NITRENDIPINO',
        'NPH',
        'OLMESARTAN',
        'ORLISTAT',
        'PAROX',
        'PIOGLITAZONA',
        'PROPRANOLOL',
        'QUINAPRIL',
        'RAMIPRIL',
        'REGULAR',
        'REPAGLIN',
        'ROSUVAST',
        'SAXAGLIP',
        'SEMAGLUTIDA',
        'SERTRALINA',
        'SINVASTATINA',
        'SITAGLIPTINA',
        'TELMISARTAM',
        'TOPIRAMATO',
        'TRULICITY',
        'VALSARTAN',
        'VALSARTAN+HCLTZ',
        'VENLAFAXINA',
        'VILDAGLIPTINA (GALVUS)',
        'Omeprazol',
    ];

    foreach ($medicamentos as $medicamento) {
        Medicamento::create([
            'nome' => strtoupper($medicamento),
        ]);
    }
}

}
