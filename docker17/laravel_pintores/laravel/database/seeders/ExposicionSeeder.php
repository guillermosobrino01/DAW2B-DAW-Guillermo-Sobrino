<?php

namespace Database\Seeders;

use App\Models\Exposicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ExposicionSeeder extends Seeder
{
    private $exposiciones = [
        ['nombre' => 'Exposición de Retratos'],
        ['nombre' => 'Exposición de Paisajes'],
        ['nombre' => 'Exposición de Arte Moderno'],
        ['nombre' => 'Exposición de Arte Abstracto'],
        ['nombre' => 'Exposición de Arte Contemporáneo'],
    ];
    public function run(): void
    {
        foreach($this->exposiciones as $exposicion){
            $e = new Exposicion();
            $e->nombre = $exposicion['nombre'];
            $e->slug = Str::slug($exposicion['nombre']);
            $e->save();
        }

        $this->command->info('Tabla exposiciones inicializada con datos');
    }
}
