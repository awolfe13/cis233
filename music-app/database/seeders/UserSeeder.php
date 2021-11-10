<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        foreach(range(1,3) as $number) {
            $roles = ['viewer', 'coordinator', 'administrator'];
            \App\Models\User::create([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => $faker->password,
                'email_verified_at' => null,
                'role' => $roles[$number-1],
            ]);
        }
    }
}