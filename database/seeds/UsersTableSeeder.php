<?php

use Illuminate\Database\Seeder;
Use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
        	"id"=>1,
        	"role_id"=>1,
        	"name"=>"aji",
        	"email"=>"setyaaji@gmail.com",
        	"password"=>bcrypt("setiaji"),
            "birth"=>"23 januari 1994",
            "photo"=>"logo.png",
            "address"=>"Bandungan",
            "gender" => "Male"

        ]);
        User::create([
        	"id"=>2,
        	"role_id"=>2,
        	"name"=>"santi",
        	"email"=>"santis@gmail.com",
        	"password"=>bcrypt("karyawan"),
            "birth"=>"23 januari 1996",
            "photo"=>"logo.png",
            "address"=>"Tegal",
            "gender" => "Female"
        ]);
    }
}
