<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
        foreach (range(1, 200) as $index) {
            DB::table('users')->insert([
                'first_name' => $faker->firstName($gender),
                'last_name' => $faker->lastName,
                'name' => $faker->name($gender),
                'email' => $faker->email,
                'department' => $faker->streetName,
                'role' => $faker->colorName,
                'password' => $faker->password
            ]);
        }
    }
}
