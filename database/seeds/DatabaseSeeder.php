<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UserTableSeeder::class);
        $this->call(PhaseTableSeeder::class);
        //$this->call(ProspecitTableSeeder::class);
         $this->call(TimeTableSeeder::class);
        // $this->call(ActivitiesTableSeeder::class);
    }
}
