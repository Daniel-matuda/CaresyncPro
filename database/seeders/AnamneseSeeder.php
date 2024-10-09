<?php

namespace Database\Seeders;

use App\Models\Anamnese;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnamneseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anamnese::factory(100)->create();
    }
}
