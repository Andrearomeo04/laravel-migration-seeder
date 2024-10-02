<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->randomElement(['Venezia', 'Napoli', 'Torino', 'Genova']);
            $train->arrival_station = $faker->randomElement(['Umbria', 'Vicenza', 'Roma', 'Bari']);
            $train->departure_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->arrival_time = $faker->dateTimeBetween('+1 day', '+2 day');
            $train->train_code = 'ABCDE'.$faker->randomNumber(5, false);
            $train->n_carriages = $faker->randomDigitNotNull();
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            $train->save();
        }
    }
}
