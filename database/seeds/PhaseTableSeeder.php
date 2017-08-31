<?php

use Illuminate\Database\Seeder;

class PhaseTableSeeder extends Seeder
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
            DB::table('phase')->insert([

                'title' => str_random(10),
                'summary' => $data->paragraph,
                'created_by' => $data->numberBetween(1,1),
                'updated_by' => $data->numberBetween(1,1),
                'created_at' => $data->dateTime($max = 'now'),
                'updated_at' => $data->dateTime($max = 'now'),

            ]);
        }
    }
}
