<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class NivelArmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Seeder tabla niveles_armas.
         */
        $niveles_armas =
        [
            /**
             * Mirmidón.
             */
            array
            (
                'nivel_arma' => 'E',
                'carta_id' => 1,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Espadachín.
             */
            array
            (
                'nivel_arma' => 'E',
                'carta_id' => 2,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'D',
                'carta_id' => 2,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'C',
                'carta_id' => 2,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Ejecutor.
             */
            array
            (
                'nivel_arma' => 'E',
                'carta_id' => 3,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'D',
                'carta_id' => 3,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'C',
                'carta_id' => 3,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'B',
                'carta_id' => 3,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'A',
                'carta_id' => 3,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Mercenario.
             */
            array
            (
                'nivel_arma' => 'E',
                'carta_id' => 4,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'D',
                'carta_id' => 4,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'C',
                'carta_id' => 4,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            /**
             * Campeón.
             */
            array
            (
                'nivel_arma' => 'E',
                'carta_id' => 5,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'D',
                'carta_id' => 5,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'C',
                'carta_id' => 5,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'B',
                'carta_id' => 5,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'A',
                'carta_id' => 5,
                'arma_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'E',
                'carta_id' => 5,
                'arma_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'D',
                'carta_id' => 5,
                'arma_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'nivel_arma' => 'C',
                'carta_id' => 5,
                'arma_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];

        DB::table('niveles_armas')->insert($niveles_armas);
    }
}
