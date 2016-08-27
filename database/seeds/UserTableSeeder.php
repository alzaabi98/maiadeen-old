<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->delete();

        $faker =Faker::create() ;
        $users = [];

        foreach(range(1,20) as $index) {
        	$users[] =[
        		'firstname' => $faker->firstName,
        		'lastname' => $faker->lastName,
        		'email' => $faker->email,
        		'password' => $faker->password,
        		'bio' => $faker->text($maxNbChars = 150),
        		'avator' => $faker->imageUrl($width = 100, $height = 100),
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,

        	] ;
        }

        DB::table('users')->insert($users);
    }
}
