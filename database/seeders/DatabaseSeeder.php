<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'jhon',
            'email' => 'admin@example.com',
            'password' => 'admin123'
        ]);
        User::create([
            'name' => 'afseer',
            'email' => 'afseer@example.com',
            'password' => '123admin'
        ]);
    }
}
