<?php

namespace Database\Seeders;

use App\Models\Cuadro;
use App\Models\Exposicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuadroSeeder extends Seeder
{
    private $cuadros =[
            [
            'nombre' => 'La noche estrellada',
            'imagen' => 'noche-estrellada.jpg',
            'disponible' => true,
            'pintor_id' => 1,
        ],
        [
            'nombre' => 'Guernica',
            'imagen' => 'guernica.jpg',
            'disponible' => false,
            'pintor_id' => 1,
        ],
        [
            'nombre' => 'Los girasoles',
            'imagen' => null,
            'disponible' => true,
            'pintor_id' => 2,
        ],
        [
            'nombre' => 'El grito',
            'imagen' => 'el-grito.jpg',
            'disponible' => true,
            'pintor_id' => 2,
        ],
        [
            'nombre' => 'La persistencia de la memoria',
            'imagen' => 'persistencia-memoria.jpg',
            'disponible' => false,
            'pintor_id' => 1,
        ]

    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->cuadros as $cuadro){
            $c = new Cuadro();
            $c->nombre = $cuadro['nombre'];
            $c->imagen = $cuadro['imagen'];
            $c->disponible = $cuadro['disponible'];
            $c->pintor_id = $cuadro['pintor_id'];
            $c->save();

            // Asigna 2 exposiciones aleatorias (distintas)
            $exposicionesAleatorias = Exposicion::all()->random(2)->pluck('id');

            $c->exposiciones()->attach($exposicionesAleatorias);

            /*$c->exposiciones()->attach([
                Exposicion::all()->skip(0)->take(5)->random()->id,
            ]);*/
        }

        $this->command->info('Tabla cuadros inicializada con datos');
    }
}
