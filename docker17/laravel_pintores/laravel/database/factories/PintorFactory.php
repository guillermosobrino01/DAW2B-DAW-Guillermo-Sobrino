<?php

namespace Database\Factories;

use App\Models\Pintor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pintor>
 */
class PintorFactory extends Factory
{

    protected $model = Pintor::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->name;
        $pais = $this->faker->country;
        $fechaNacimiento = $this->faker->date('Y-m-d');
        return [
            'nombre'=>$nombre,
            'slug'=>Str::slug($nombre),
            'pais'=>$pais,
            'fechaNacimiento'=> $fechaNacimiento
        ];
    }
}
