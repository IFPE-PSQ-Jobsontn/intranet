<?php

use App\Models\DenatranFuel;
use Illuminate\Database\Seeder;

class DenatranFuelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DenatranFuel::create(['description' => 'ALCOOL']);
        DenatranFuel::create(['description' => 'GASOLINA']);
        DenatranFuel::create(['description' => 'DIESEL']);
        DenatranFuel::create(['description' => 'GASOGENIO']);
        DenatranFuel::create(['description' => 'GAS METANO']);
        DenatranFuel::create(['description' => 'ELETRICO/FONTE INTERNA']);
        DenatranFuel::create(['description' => 'ELETRICO/FONTE EXTERNA']);
        DenatranFuel::create(['description' => 'GASOL/GAS NATURAL COMBUSTIVEL']);
        DenatranFuel::create(['description' => 'ALCOOL/GAS NATURAL COMBUSTIVEL']);
        DenatranFuel::create(['description' => 'DIESEL/GAS NATURAL COMBUSTIVEL']);
        DenatranFuel::create(['description' => 'VIDE/CAMPO/OBSERVACAO']);
        DenatranFuel::create(['description' => 'ALCOOL/GAS NATURAL VEICULAR']);
        DenatranFuel::create(['description' => 'GASOLINA/GAS NATURAL VEICULAR']);
        DenatranFuel::create(['description' => 'DIESEL/GAS NATURAL VEICULAR']);
        DenatranFuel::create(['description' => 'GAS NATURAL VEICULAR']);
        DenatranFuel::create(['description' => 'ALCOOL/GASOLINA']);
        DenatranFuel::create(['description' => 'GASOLINA/ALCOOL/GAS NATURAL']);
        DenatranFuel::create(['description' => 'GASOLINA/ELETRICO']);
    }
}
