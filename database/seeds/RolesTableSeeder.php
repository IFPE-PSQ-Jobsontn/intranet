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
            'name' => 'ADM',
            'description' => 'Perfil do ADMINISTRADOR do sistema.',
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
            'name' => 'CTUR',
            'description' => 'Perfil dos servidores da Coordenação de Turnos.',
        ]);

    }
}
