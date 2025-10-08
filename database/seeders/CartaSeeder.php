<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CartaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Seeder tabla cartas.
         */
        $cartas =
        [
            array
            (
                'numero' => 1,
                'nombre' => 'Mirmidón',
                'tipo_carta' => 'Unidad',
                'edad' => 'Edad de Bronce',
                'expansion_id' => 1,
                'clase_id' => 1,
                'unidad_id' => 1,
                'entrenamiento_id' => 1,
                'habilidad_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'numero' => 2,
                'nombre' => 'Espadachín',
                'tipo_carta' => 'Unidad',
                'edad' => 'Edad de Hierro',
                'expansion_id' => 1,
                'clase_id' => 2,
                'unidad_id' => 1,
                'entrenamiento_id' => 1,
                'habilidad_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'numero' => 3,
                'nombre' => 'Ejecutor',
                'tipo_carta' => 'Unidad',
                'edad' => 'Edad Media',
                'expansion_id' => 1,
                'clase_id' => 3,
                'unidad_id' => 1,
                'entrenamiento_id' => 1,
                'habilidad_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'numero' => 4,
                'nombre' => 'Mercenario',
                'tipo_carta' => 'Unidad',
                'edad' => 'Edad de Hierro',
                'expansion_id' => 1,
                'clase_id' => 1,
                'unidad_id' => 1,
                'entrenamiento_id' => 1,
                'habilidad_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'numero' => 5,
                'nombre' => 'Campeón',
                'tipo_carta' => 'Unidad',
                'edad' => 'Edad Media',
                'expansion_id' => 1,
                'clase_id' => 2,
                'unidad_id' => 1,
                'entrenamiento_id' => 1,
                'habilidad_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];

        DB::table('cartas')->insert($cartas);
    }
}
