<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Faker\Factory::create();

        foreach(range(1,10) as $index)
        {
            DB::table('activities')->insert([
                'prospecit_id' => $data->numberBetween(1,10),
                'remarks' => str_random(10),
                'date' => $data->dateTime($max = 'now'),
                'start_time' => $data->dateTime($max = 'now'),
                'end_time' => $data->dateTime($max = 'now'),
                'created_by' => $data->numberBetween(1,10),
                'updated_by' => $data->numberBetween(1,10),
                'created_at' => $data->dateTime($max = 'now'),
                'updated_at' => $data->dateTime($max = 'now'),


            ]);
        }
    }
}
