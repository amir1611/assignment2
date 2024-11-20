<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 users with unique emails
        User::factory(10)->create();

        // Create a test user with a unique email
        User::factory()->create([
            'name' => 'Test User',
            'email' => fake()->unique()->safeEmail(),
        ]);
    }
}
