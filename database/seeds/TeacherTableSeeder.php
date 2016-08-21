<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->truncate();

        $faker =Faker::create() ;
        $teachers = [];

        foreach(range(1,20) as $index) {
        	$teachers[] =[
        		'name' => $faker->name,
        		'detail' => $faker->text,
        		'img' => $faker->imageUrl($width = 100, $height = 100),
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,

        	] ;
        }

        DB::table('teachers')->insert($teachers);
    }
    
}
