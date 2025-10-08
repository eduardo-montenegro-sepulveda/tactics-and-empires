<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CostoJuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Seeder tabla costos_juego.
         */
        $costos_juego =
        [
            /**
             * Mirmidón.
             */
            array
            (
                'unidades' => 1,
                'carta_id' => 1,
                'recurso_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Espadachín.
             */
            array
            (
                'unidades' => 2,
                'carta_id' => 2,
                'recurso_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Ejecutor.
             */
            array
            (
                'unidades' => 3,
                'carta_id' => 3,
                'recurso_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Mercenario.
             */
            array
            (
                'unidades' => 1,
                'carta_id' => 4,
                'recurso_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'unidades' => 1,
                'carta_id' => 4,
                'recurso_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Campeón.
             */
            array
            (
                'unidades' => 1,
                'carta_id' => 5,
                'recurso_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'unidades' => 2,
                'carta_id' => 5,
                'recurso_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];

        DB::table('costos_juego')->insert($costos_juego);
    }
}
