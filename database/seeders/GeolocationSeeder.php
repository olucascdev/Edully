<?php

namespace Database\Seeders;

use App\Models\{City, State};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeolocationSeeder extends Seeder
{
    public function run(): void
    {
        $file = storage_path('seeders/municipios.json');
        $data = json_decode(file_get_contents($file), true);

        DB::transaction(function () use ($data) {
            foreach ($data as $cityData) {
                // Obtém os dados do estado a partir da estrutura do JSON
                $stateData = $cityData['microrregiao']['mesorregiao']['UF'];

                // Verifica se o estado já existe, caso contrário, cria um novo
                $state = State::firstOrCreate(
                    ['ibge_code' => $stateData['id']],
                    [
                        'name'       => $stateData['nome'],
                        'short_name' => $stateData['sigla'],
                        'ibge_code'  => $stateData['id'],
                    ]
                );

                // Cria a cidade e associa ao estado
                City::factory()
                    ->for($state)
                    ->create([
                        'name'      => $cityData['nome'],
                        'ibge_code' => $cityData['id'],
                    ]);
            }
        });
    }
}
