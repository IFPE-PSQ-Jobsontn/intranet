<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'cgti@pesqueira.ifpe.edu.br',
            'password' => bcrypt('159'),
        ]);
        User::create([
            'name' => 'Jobson Tenório do Nascimento',
            'email' => 'jobson.nascimento@pesqueira.ifpe.edu.br',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Wellyson Fernando Nunes Souza',
            'email' => 'fernando.souza@pesqueira.ifpe.edu.br',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Maviael Ramalho Calado',
            'email' => 'maviael@pesqueira.ifpe.edu.br',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Wdercleison Ventura De Farias',
            'email' => 'wdercleison.farias@pesqueira.ifpe.edu.br',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Valter Leal Guimarães',
            'email' => 'valter@pesqueira.ifpe.edu.br',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Silvio Romero Diniz',
            'email' => 'silvio@pesqueira.ifpe.edu.br',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Samuel Muniz de Siqueira',
            'email' => 'samuel@pesqueira.ifpe.edu.br',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Teste',
            'email' => 'teste@pesqueira.ifpe.edu.br',
            'password' => bcrypt('123'),
        ]);

    }
}
