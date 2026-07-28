<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => '123445',
        ]);

         User::query()->create([
            'name' => 'ossuario teste',
            'email' => 'user@gmail.com',
            'password' => '123456',
        ]);
    }
}
