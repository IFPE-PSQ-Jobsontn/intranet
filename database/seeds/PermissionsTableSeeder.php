<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'crud_users',
            'description' => 'Criar, Visualizar, Modificar e Atualizar usuários.',
        ]);
        Permission::create([
            'name' => 'r_users',
            'description' => 'Visualizar usuários.',
        ]);

        Permission::find(1)->roles()->attach([1,3]);
        Permission::find(2)->roles()->attach([1, 2, 3, 4, 5, 6, 7]);
    }
}
