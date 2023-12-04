<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Catergory;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Catergory::factory(2)->create();
        Tag::factory(2)->create();
        $this->call(Postseeder::class);

    }
}
