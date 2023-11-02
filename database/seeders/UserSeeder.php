<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {User::create([
        'name' => 'LuisAngelRubio',
        'email' => 'LuisRubio@gmail.com',
        'password' => bcrypt('12345678'),
    ]);

        User::factory(99)->create();

    }
}