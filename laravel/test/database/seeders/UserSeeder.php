<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Use Faker for generating fake data
        $faker = \Faker\Factory::create();

        foreach (range(1, 10) as $index) { // Seed 10 users
            DB::table('user')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'city' => $faker->city,
                'phone' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
