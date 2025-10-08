<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Seeder tabla habilidades.
         */
        $habilidades =
        [
            array
            (
                'habilidad' => 'Ventaja',
                'descripcion' => 'Esta unidad ataca primero en su Fase Defensor.',
                'activacion' => 'Defensor',
                'probabilidad' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'habilidad' => 'Persecución',
                'descripcion' => 'Esta unidad realiza un ataque consecutivo en su Fase Atacante.',
                'activacion' => 'Atacante',
                'probabilidad' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'habilidad' => 'Duelo',
                'descripcion' => 'Esta unidad puede realizar hasta cinco ataques en su Fase Atacante.',
                'activacion' => 'Atacante',
                'probabilidad' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'habilidad' => 'Ahorro',
                'descripcion' => 'Esta unidad puede equipar espadas sin pagar su costo de juego.',
                'activacion' => 'Siempre',
                'probabilidad' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array
            (
                'habilidad' => 'Ruptura de Hachas',
                'descripcion' => 'Si esta unidad utiliza o tiene equipada una espada y el Defensor utiliza o tiene equipada un hacha, entonces el Defensor no puede contraatacar.',
                'activacion' => 'Siempre',
                'probabilidad' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];

        DB::table('habilidades')->insert($habilidades);
    }
}
