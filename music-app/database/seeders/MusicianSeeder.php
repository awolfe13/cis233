<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MusicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Musician::query()->delete();

        $faker = Faker\Factory::create();
        
        foreach(range(1,30) as $number) {
            \App\Musician::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'instrument' => $faker->randomElement('Guitar', 'Violin', 'Piano'),
                'website' => $faker->url
            ]);
        }
    }
}