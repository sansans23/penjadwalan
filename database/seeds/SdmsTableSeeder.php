<?php

use Illuminate\Database\Seeder;
use App\Sdm;

class SdmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sdms')->insert([
        	'user_id'=>2,
        	'name'=>'Warno',
        	'pekerjaan_id'=>1
        ]);

        DB::table('sdms')->insert([
            'user_id'=>2,
            'name'=>'Fendi',
            'pekerjaan_id'=>2
        ]);
    }
}
