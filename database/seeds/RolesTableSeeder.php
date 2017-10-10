<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'name' => 'ADMIN',
            'description' => 'Perfil do ADMINISTRADOR do sistema.',
        ]);
        Role::create([
            'name' => 'Servidor',
            'description' => 'Perfil comum para todos os servidores.',
        ]);
        Role::create([
            'name' => 'TI',
            'description' => 'Perfil dos servidores da Coordenação de Tecnologia da Informação.',
        ]);
        Role::create([
            'name' => 'CGPE',
            'description' => 'Perfil dos servidores da Coordenação de Gestão de Pessoas.',
        ]);
        Role::create([
            'name' => 'TRANSPORTES',
            'description' => 'Perfil dos servidores da Coordenação de Transportes.',
        ]);
        Role::create([
            'name' => 'CSGM',
            'description' => 'Perfil dos servidores da Coordenação de Manutenção e Serviços Gerais.',
        ]);
        Role::create([
            'name' => 'CTUR',
            'description' => 'Perfil dos servidores da Coordenação de Turnos.',
        ]);

        Role::find(1)->users()->attach([1]);
        Role::find(3)->users()->attach([2, 3, 4]);
        Role::find(4)->users()->attach([5]);
        Role::find(5)->users()->attach([7]);
        Role::find(6)->users()->attach([6]);
        Role::find(7)->users()->attach([8]);

    }
}
