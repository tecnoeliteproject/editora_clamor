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
        $this->call([
            ServicesTableSeeder::class
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Fulano da Silva',
            'email' => 'fulano@gmail.com',
            'role' => 'ADMIN'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Silva de Paula',
            'email' => 'silva@gmail.com',
            'role' => 'USER'
        ]);
    }
}
