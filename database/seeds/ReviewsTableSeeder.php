<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->truncate();

    	$faker = Faker\Factory::create();

    	for($i = 0 ; $i < 400; $i++) {

    		App\Review::create([
    			'user_id' => rand(1,20) ,
       			'course_id' => rand(1,20) ,
    			'comments' => $faker->text($maxNbChars = 60),
    			'stars' => rand(1,5) ,
    			

    		]);
    	}
    }
}
