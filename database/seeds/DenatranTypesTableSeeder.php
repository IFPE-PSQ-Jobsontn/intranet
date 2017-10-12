<?php

use App\Models\DenatranType;
use Illuminate\Database\Seeder;

class DenatranTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DenatranType::create(['description' => 'BICICLETA']);
        DenatranType::create(['description' => 'CICLOMOTOR']);
        DenatranType::create(['description' => 'MOTONETA']);
        DenatranType::create(['description' => 'MOTOCICLETA']);
        DenatranType::create(['description' => 'TRICICLO']);
        DenatranType::create(['description' => 'AUTOMÓVEL']);
        DenatranType::create(['description' => 'MICROÔNIBUS']);
        DenatranType::create(['description' => 'ÔNIBUS']);
        DenatranType::create(['description' => 'BONDE']);
        DenatranType::create(['description' => 'REBOQUE']);
        DenatranType::create(['description' => 'SEMI-REBOQUE']);
        DenatranType::create(['description' => 'CHARRETE']);
        DenatranType::create(['description' => 'CAMIONETA']);
        DenatranType::create(['description' => 'CAMINHÃO']);
        DenatranType::create(['description' => 'CARROÇA']);
        DenatranType::create(['description' => 'CARRO DE MÃO']);
        DenatranType::create(['description' => 'CAMINHÃO TRATOR']);
        DenatranType::create(['description' => 'TRATOR DE RODAS']);
        DenatranType::create(['description' => 'TRATOR DE ESTEIRAS']);
        DenatranType::create(['description' => 'TRATOR MISTO']);
        DenatranType::create(['description' => 'QUADRICICLO']);
        DenatranType::create(['description' => 'CHASSI/PLATAFORMA']);
        DenatranType::create(['description' => 'CAMINHONETE']);
        DenatranType::create(['description' => 'SIDE-CAR']);
        DenatranType::create(['description' => 'UTILITÁRIO']);
        DenatranType::create(['description' => 'MOTOR-CASA']);
    }
}
