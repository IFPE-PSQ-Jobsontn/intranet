<?php

use App\Models\DenatranColor;
use Illuminate\Database\Seeder;

class DenatranColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DenatranColor::create(['description' => 'AMARELA']);
        DenatranColor::create(['description' => 'AZUL']);
        DenatranColor::create(['description' => 'BEGE']);
        DenatranColor::create(['description' => 'BRANCA']);
        DenatranColor::create(['description' => 'CINZA']);
        DenatranColor::create(['description' => 'DOURADA']);
        DenatranColor::create(['description' => 'GRENA']);
        DenatranColor::create(['description' => 'LARANJA']);
        DenatranColor::create(['description' => 'MARROM']);
        DenatranColor::create(['description' => 'PRATA']);
        DenatranColor::create(['description' => 'PRETA']);
        DenatranColor::create(['description' => 'ROSA']);
        DenatranColor::create(['description' => 'ROXA']);
        DenatranColor::create(['description' => 'VERDE']);
        DenatranColor::create(['description' => 'VERMELHA']);
        DenatranColor::create(['description' => 'FANTASIA']);
    }
}
