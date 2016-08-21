<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->truncate();

        $faker =Faker::create() ;
        $courses = [];

        foreach(range(1,20) as $index) {
        	$courses[] =[
                'teacher_id' => rand(1,10),
                'type_id' => rand(1,4),
        		'title' => $faker->text,
        		'detail' => $faker->text,
        		'img' => $faker->imageUrl($width = 100, $height = 100),
        		'type' => $faker->text($maxNbChars = 20) ,
        		'price' => rand(10,20) ,
        		'rating' => rand(1,5) ,
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,

        	] ;
        }

        DB::table('courses')->insert($courses);
    }

}
