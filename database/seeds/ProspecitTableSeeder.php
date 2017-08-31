<?php

use Illuminate\Database\Seeder;

class ProspecitTableSeeder extends Seeder
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
            DB::table('prospecit')->insert([
                'phase_id' => $data->numberBetween(1,1),
                'client_name' => str_random(10),
                'address' => str_random(10),
                'pc_1' => str_random(10),
                'pc_2' => str_random(10),
                'pc_3' => str_random(10),
                'area' => str_random(10),
                'remarks' => str_random(10),
                'demand' => $data->paragraph,
                'type' => $data->numberBetween(1,1),
                'created_by' => $data->numberBetween(1,1),
                'updated_by' => $data->numberBetween(1,1),
                'created_at' => $data->dateTime($max = 'now'),
                'updated_at' => $data->dateTime($max = 'now'),


            ]);
        }
    }
}
