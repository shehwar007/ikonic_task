<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Shehwar Admin',
            'email' => 'admin@gmail.com',
            'role'=>1,
            'password'=> '$2y$10$h6rAG6M//OlU8ibShmvAbODbSxQBNf01c5eGPj7GdVtZuoLuxQcLm',
           
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Shehwar User',
            'email' => 'user@gmail.com',
            'role'=>0,
            'password'=> '$2y$10$8kWOtiVyhgKDryc7TckvM.MmB6GLSmOQ78HWUF3CBcvOVyHE0nwxu',
           
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Shehwar User 2',
            'email' => 'user2@gmail.com',
            'role'=>0,
            'password'=> '$2y$10$8kWOtiVyhgKDryc7TckvM.MmB6GLSmOQ78HWUF3CBcvOVyHE0nwxu',
           
        ]);
    }
}
