<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i=0; $i <75 ; $i++) { 
            $newTrain = new Train();
            $newTrain->agency = $faker->name;
            $newTrain->departure_station = $faker->sentence(3,true);
            $newTrain->arrival_station = $faker->sentence(3,true);
            $newTrain->departure_time = $faker->dateTimeBetween('-1 days','24 weeks');
            $newTrain->arrival_time = $faker->dateTimeBetween('-1 days','24 weeks');
            $newTrain->train_code = $faker->randomNumber(12);
            $newTrain->wagons_number = $faker->randomNumber(3,true);
            $newTrain->is_on_time = $faker->boolean(90);
            $newTrain->is_deleted = $faker->boolean(8);
            $newTrain->save();

        }
    }
}
