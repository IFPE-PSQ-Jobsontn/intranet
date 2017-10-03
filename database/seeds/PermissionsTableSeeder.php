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
            'name' => '(CMA)-Usuários',
            'description' => 'Criar, Modificar e Atualizar usuários.',
        ]);
        Permission::create([
            'name' => '(V)-Usuários',
            'description' => 'Visualizar usuários.',
        ]);
        Permission::find(1)->roles()->attach([1,2]);
        Permission::find(2)->roles()->attach([1, 2, 3, 4, 5, 6]);
    }
}
