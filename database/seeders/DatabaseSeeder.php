<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AutorSeeder::class,
            EditorialSeeder::class,
            LibroSeeder::class,
            UsuarioSeeder::class,
            PrestamoSeeder::class,
        ]);
    }
}
