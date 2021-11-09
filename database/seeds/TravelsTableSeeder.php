<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i < 100; $i++) {
            $newTravel = new Travel();
            $newTravel->code = $faker->ean8();
            $newTravel->location = $faker->city();
            $newTravel->min_travelers = $faker->numberBetween(5, 10);
            $newTravel->max_travelers = $faker->numberBetween(14, 18);
            $newTravel->price = $faker->numberBetween(850, 10000);
            $newTravel->departure_date = $faker->dateTimeBetween('now', '+1 year');
            $newTravel->departure_city = $faker->city();
            $newTravel->travel_duration = $faker->numberBetween(9, 15);
            $newTravel->travel_description = $faker->paragraph(5);
            $newTravel->save();
        }
    }
}
