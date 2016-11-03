<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->truncate();

    	$faker = Faker\Factory::create();

    	for($i = 0 ; $i < 400; $i++) {

    		App\Question::create([
    			'user_id' => rand(1,20) ,
       			'course_id' => rand(1,20) ,
    			'question' => $faker->text($maxNbChars = 60),
    			'answer' => $faker->text($maxNbChars = 60),
    			
    			

    		]);
    	}
    }
}
