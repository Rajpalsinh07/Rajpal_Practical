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
        // Create admin user
        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        // Create customer user
        User::factory()->create([
            'first_name' => 'Customer',
            'last_name' => 'User',
            'email' => 'customer@example.com',
            'role' => 'customer',
        ]);

        // Create some random users
        User::factory(5)->create();
    }
}
