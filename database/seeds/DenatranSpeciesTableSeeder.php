<?php

use App\Models\DenatranSpecies;
use Illuminate\Database\Seeder;

class DenatranSpeciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DenatranSpecies::create(['description' => 'PASSAGEIRO']);
        DenatranSpecies::create(['description' => 'CARGA']);
        DenatranSpecies::create(['description' => 'MISTO']);
        DenatranSpecies::create(['description' => 'CORRIDA']);
        DenatranSpecies::create(['description' => 'TRAÇÃO']);
        DenatranSpecies::create(['description' => 'ESPECIAL']);
        DenatranSpecies::create(['description' => 'COLEÇÃO']);
    }
}
