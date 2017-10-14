<?php

use Illuminate\Database\Seeder;
use App\Models\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'cpf' => '03256858530',
            'registration_number' => '5619199',
            'registry_entity' => 'SSP',
            'registry_entity_uf_id' => 17,
            'name' => 'Jobson Tenório do Nascimento',
            'mother' => 'Lúcia Maria Tenório do Nascimento',
            'father' => 'João Pereira do Nascimento',
        ]);
    }
}
