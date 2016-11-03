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
        DB::table('courses')->delete();

        $faker =Faker::create() ;
        $courses = [];

        DB::table('courses')->truncate();
        foreach(range(1,100) as $index) {
        	$courses[] =[
        		'title' => $faker->text($maxNbChars = 30),
        		'summary' => $faker->text($maxNbChars = 150),
        		'img' => $faker->imageUrl($width = 100, $height = 100),
        		'price' => rand(10,20) ,
                'teacher_id' => rand(1,10),
                'category_id' => rand(1,4),
                'subcategory_id' => rand(1,10),
                'level_id' => rand(1,3),
                'review_id' => rand(1,10),
                'content_id' => rand(1,10),
        		
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,

        
    
        	] ;
        }

        DB::table('courses')->insert($courses);
    }

}
