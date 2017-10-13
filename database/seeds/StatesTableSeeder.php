<?php

use App\Models\State;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'initials' => 'AC',
            'name' => 'Acre',
            'capital' => 'Rio Branco',
        ]);
        State::create([
            'initials' => 'AL',
            'name' => 'Alagoas',
            'capital' => 'Maceió',
        ]);
        State::create([
            'initials' => 'AP',
            'name' => 'Amapá',
            'capital' => 'Macapá',
        ]);
        State::create([
            'initials' => 'AM',
            'name' => 'Amazonas',
            'capital' => 'Manaus',
        ]);
        State::create([
            'initials' => 'BA',
            'name' => 'Bahia',
            'capital' => 'Salvador',
        ]);
        State::create([
            'initials' => 'CE',
            'name' => 'Ceará',
            'capital' => 'Fortaleza',
        ]);
        State::create([
            'initials' => 'DF',
            'name' => 'Distrito Federal',
            'capital' => 'Brasília',
        ]);
        State::create([
            'initials' => 'ES',
            'name' => 'Espírito Santo',
            'capital' => 'Vitória',
        ]);
        State::create([
            'initials' => 'GO',
            'name' => 'Goiás',
            'capital' => 'Goiânia',
        ]);
        State::create([
            'initials' => 'MA',
            'name' => 'Maranhão',
            'capital' => 'São Luís',
        ]);
        State::create([
            'initials' => 'MT',
            'name' => 'Mato Grosso',
            'capital' => 'Cuiabá',
        ]);
        State::create([
            'initials' => 'MS',
            'name' => 'Mato Grosso do Sul',
            'capital' => 'Campo Grande',
        ]);
        State::create([
            'initials' => 'MG',
            'name' => 'Minas Gerais',
            'capital' => 'Belo Horizonte',
        ]);
        State::create([
            'initials' => 'PA',
            'name' => 'Pará',
            'capital' => 'Belém',
        ]);
        State::create([
            'initials' => 'PB',
            'name' => 'Paraíba',
            'capital' => 'João Pessoa',
        ]);
        State::create([
            'initials' => 'PR',
            'name' => 'Paraná',
            'capital' => 'Curitiba',
        ]);
        State::create([
            'initials' => 'PE',
            'name' => 'Pernambuco',
            'capital' => 'Recife',
        ]);
        State::create([
            'initials' => 'PI',
            'name' => 'Piauí',
            'capital' => 'Teresina',
        ]);
        State::create([
            'initials' => 'RJ',
            'name' => 'Rio de Janeiro',
            'capital' => 'Rio de Janeiro',
        ]);
        State::create([
            'initials' => 'RN',
            'name' => 'Rio Grande do Norte',
            'capital' => 'Natal',
        ]);
        State::create([
            'initials' => 'RS',
            'name' => 'Rio Grande do Sul',
            'capital' => 'Porto Alegre',
        ]);
        State::create([
            'initials' => 'RO',
            'name' => 'Rondônia',
            'capital' => 'Porto Velho',
        ]);
        State::create([
            'initials' => 'RR',
            'name' => 'Roraima',
            'capital' => 'Boa Vista',
        ]);
        State::create([
            'initials' => 'SC',
            'name' => 'Santa Catarina',
            'capital' => 'Florianópolis',
        ]);
        State::create([
            'initials' => 'SP',
            'name' => 'São Paulo',
            'capital' => 'São Paulo',
        ]);
        State::create([
            'initials' => 'SE',
            'name' => 'Sergipe',
            'capital' => 'Aracaju',
        ]);
        State::create([
            'initials' => 'TO',
            'name' => 'Tocantins',
            'capital' => 'Palmas',
        ]);
    }
}
