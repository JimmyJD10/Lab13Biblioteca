<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Editorial;

class EditorialSeeder extends Seeder
{
    public function run(): void
    {
        Editorial::factory()->count(10)->create();
    }
}
