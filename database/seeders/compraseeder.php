<?php

namespace Database\Seeders;

use App\Models\compra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class compraseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        compra::factory()->count(4)->create();
    }
}
