<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newTrain = new Train();
            $newTrain->id = rand(1, 100);
            $newTrain->factory = $faker->name();
            $newTrain->start_station = $faker->city();
            $newTrain->arrive_station = $faker->city();
            $newTrain->start = $faker->date();
            $newTrain->end = $faker->date();
            $newTrain->wagons_number = rand(1, 200);
            $newTrain->train_code = $faker->bothify('?????-#####');
            $newTrain->in_time = 'yes';
            $newTrain->not_in_time = 'no';
            $newTrain->save();
        }
    }
}
