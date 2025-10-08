<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PuntoEstadisticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Seeder tabla puntos_estadisticas.
         */
        $puntos_estadisticas =
        [
            /**
             * Mirmidón.
             */
            array
            (
                'puntos' => 50,
                'carta_id' => 1,
                'estadistica_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 30,
                'carta_id' => 1,
                'estadistica_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 0,
                'carta_id' => 1,
                'estadistica_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Espadachín.
             */
            array
            (
                'puntos' => 90,
                'carta_id' => 2,
                'estadistica_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 40,
                'carta_id' => 2,
                'estadistica_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 10,
                'carta_id' => 2,
                'estadistica_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Ejecutor.
             */
            array
            (
                'puntos' => 130,
                'carta_id' => 3,
                'estadistica_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 50,
                'carta_id' => 3,
                'estadistica_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 20,
                'carta_id' => 3,
                'estadistica_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Mercenario.
             */
            array
            (
                'puntos' => 70,
                'carta_id' => 4,
                'estadistica_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 40,
                'carta_id' => 4,
                'estadistica_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 30,
                'carta_id' => 4,
                'estadistica_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Campeón.
             */
            array
            (
                'puntos' => 110,
                'carta_id' => 5,
                'estadistica_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 50,
                'carta_id' => 5,
                'estadistica_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'puntos' => 40,
                'carta_id' => 5,
                'estadistica_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];

        DB::table('puntos_estadisticas')->insert($puntos_estadisticas);
    }
}
