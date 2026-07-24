<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\compralog;
class compralogseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        compralog::factory()->count(10)->create();
    }
}
