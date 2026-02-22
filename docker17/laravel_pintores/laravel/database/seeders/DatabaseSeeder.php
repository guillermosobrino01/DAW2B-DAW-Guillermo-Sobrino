<?php

namespace Database\Seeders;

use App\Models\Pintor;
use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('pintores')->delete();
        $this->call(PintorSeeder::class);

        Pintor::factory(2)->create();

        DB::table(table: 'exposiciones')->delete();
        $this->call(ExposicionSeeder::class);
        
        DB::table('cuadros')->delete();
        $this->call(CuadroSeeder::class);
    }
}
