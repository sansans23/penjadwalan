<?php

use Illuminate\Database\Seeder;
use App\Schedule;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
        	"id"=>1,
        	"user_id"=>2,
        	"date"=>"22 april 2018",
        	"status"=>"kasir"
        ]);
    }
}
