<?php

use App\Models\DenatranCategory;
use Illuminate\Database\Seeder;

class DenatranCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DenatranCategory::create(['description' => 'PARTICULAR']);
        DenatranCategory::create(['description' => 'ALUGUEL']);
        DenatranCategory::create(['description' => 'OFICIAL']);
        DenatranCategory::create(['description' => 'EXPERIÊNCIA']);
        DenatranCategory::create(['description' => 'APRENDIZAGEM']);
        DenatranCategory::create(['description' => 'FABRICANTE']);
        DenatranCategory::create(['description' => 'CHEFE DE MISSÃO DIPLOMÁTICA']);
        DenatranCategory::create(['description' => 'CORPO CONSULAR']);
        DenatranCategory::create(['description' => 'ORGANISMO INTERNACIONAL']);
        DenatranCategory::create(['description' => 'CORPO DIPLOMÁTICO']);
        DenatranCategory::create(['description' => 'MISSÃO/REPARTIÇÃO/REPRESENTAÇÃO INTERNACIONAL']);
        DenatranCategory::create(['description' => 'ACORDO DE COOPERAÇÃO INTERNACIONAL']);
    }
}
