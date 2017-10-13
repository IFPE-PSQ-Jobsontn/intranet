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
        Permission::find(1)->roles()->attach([1, 3]);
        Permission::find(2)->roles()->attach([1, 3]);

        Permission::create([
            'name' => 'crud_roles',
            'description' => 'Criar, Visualizar, Modificar e Atualizar perfis.',
        ]);
        Permission::create([
            'name' => 'r_roles',
            'description' => 'Visualizar perfis.',
        ]);
        Permission::find(3)->roles()->attach([1, 3]);
        Permission::find(4)->roles()->attach([1, 3]);

        Permission::create([
            'name' => 'crud_departaments',
            'description' => 'Criar, Visualizar, Modificar e Atualizar setores.',
        ]);
        Permission::create([
            'name' => 'r_departaments',
            'description' => 'Visualizar setores.',
        ]);
        Permission::find(5)->roles()->attach([1, 4]);
        Permission::find(6)->roles()->attach([1, 2, 3, 4, 5, 6, 7]);

        Permission::create([
            'name' => 'crud_employees',
            'description' => 'Criar, Visualizar, Modificar e Atualizar servidores.',
        ]);
        Permission::create([
            'name' => 'r_employees',
            'description' => 'Visualizar servidores.',
        ]);
        Permission::find(7)->roles()->attach([1, 4]);
        Permission::find(8)->roles()->attach([1, 2, 3, 4, 5, 6, 7]);

        Permission::create([
            'name' => 'crud_vehicles',
            'description' => 'Criar, Visualizar, Modificar e Atualizar veículos.',
        ]);
        Permission::create([
            'name' => 'r_vehicles',
            'description' => 'Visualizar veículos.',
        ]);
        Permission::find(9)->roles()->attach([1, 5]);
        Permission::find(10)->roles()->attach([1, 2, 3, 4, 5, 6, 7]);

        Permission::create([
            'name' => 'crud_drivers',
            'description' => 'Criar, Visualizar, Modificar e Atualizar motoristas.',
        ]);
        Permission::create([
            'name' => 'r_drivers',
            'description' => 'Visualizar motoristas.',
        ]);
        Permission::find(11)->roles()->attach([1, 5]);
        Permission::find(12)->roles()->attach([1, 2, 3, 4, 5, 6, 7]);

        Permission::create([
            'name' => 'crud_private_vehicles',
            'description' => 'Criar, Visualizar, Modificar e Atualizar veículos particulares.',
        ]);
        Permission::create([
            'name' => 'r_private_vehicles',
            'description' => 'Visualizar veículos particulares.',
        ]);
        Permission::find(13)->roles()->attach([1, 6]);
        Permission::find(14)->roles()->attach([1, 2, 3, 4, 5, 6, 7]);

        Permission::create([
            'name' => 'crud_people',
            'description' => 'Criar, Visualizar, Modificar e Atualizar pessoas.',
        ]);
        Permission::create([
            'name' => 'r_people',
            'description' => 'Visualizar pessoas.',
        ]);
        Permission::find(15)->roles()->attach([1, 4, 6]);
        Permission::find(16)->roles()->attach([1, 2, 3, 4, 5, 6, 7]);

    }
}
