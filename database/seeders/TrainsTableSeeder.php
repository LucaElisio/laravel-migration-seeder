<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $newTrain = new Train();
        $newTrain->agency = $faker->company();
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_station = $faker->city();
        $newTrain->departure_time = $faker->time();
        $newTrain->arrival_time = $faker->time();
        $newTrain->train_code = $faker->md5();
        $newTrain->price = $faker->randomFloat(2, 20, 80);
        $newTrain->carriage_amount = $faker->numberBetween(3, 15);
        $newTrain->on_time = $faker->boolean();
        $newTrain->cancelled = $faker->boolean();
        $newTrain->seats_available = $faker->numberBetween(0, 100);

        $newTrain->save();
    }
}
