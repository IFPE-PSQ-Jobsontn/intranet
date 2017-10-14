<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(DenatranCategoriesTableSeeder::class);
        $this->call(DenatranColorsTableSeeder::class);
        $this->call(DenatranFuelsTableSeeder::class);
        $this->call(DenatranSpeciesTableSeeder::class);
        $this->call(DenatranTypesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
    }
}
