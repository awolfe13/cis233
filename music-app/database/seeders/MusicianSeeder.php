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

        $faker = \Faker\Factory::create();
        
        foreach(range(1,100) as $number) {
            \App\Musician::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'instrument' => $faker->randomElement($array = array ('Guitar','Violin','Piano', 'Drums', 'Cello', 'Trumpet', 'Harp', 'Clarinet', 'Flute', 'Bass', 'Saxophone')),
                'website' => $faker->url,
            ]);
        }
    }
}