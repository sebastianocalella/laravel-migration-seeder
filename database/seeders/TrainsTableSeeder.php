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
        for ($i=0; $i <750 ; $i++) { 
            $newTrain = new Train();
            $newTrain->agency = $faker->name;
            $newTrain->departure_station = $faker->sentence(3,true);
            $newTrain->arrival_station = $faker->sentence(3,true);
            $newTrain->departure_time = $faker->dateTimeBetween('0 days','4 weeks');
            $newTrain->arrival_time = $faker->dateTimeBetween('0 days','4 weeks');
            $newTrain->train_code = $faker->numberBetween(100000,999999);
            $newTrain->wagons_number = $faker->numberBetween(1,100);
            $newTrain->is_on_time = $faker->boolean(90);
            $newTrain->is_deleted = $faker->boolean(8);
            $newTrain->save();

        }
    }
}
