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
            'name' => 'Paulino Fonseca',
            'email' => 'paulino@gmail.com',
            'role' => 'ADMIN'
        ]);
    }
}
