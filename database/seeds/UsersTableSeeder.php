<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=0;$i<100;$i++){
        	DB::table('users')->insert([
	    		'name'=>str_random(10),
	    		'password'=>str_random(50),
                'status'=>rand(0,1),
	    		'phone'=>'186'.rand(10000000,99999999),
	    	]);
        }
    	

    }
}
