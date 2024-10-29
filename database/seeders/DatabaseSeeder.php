<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // Pastikan ini ada
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import model User

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "admin",
            "email" => "admin@laundry.id",
            "password" => Hash::make("admin"), // Hash password
            "role" => "admin",

        ]);
    }
}
