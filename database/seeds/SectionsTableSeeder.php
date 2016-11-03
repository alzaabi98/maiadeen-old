<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	DB::table('sections')->truncate();

    	$faker = Faker\Factory::create();

    	for($i = 0 ; $i < 400; $i++) {

    		App\Section::create([
    			'course_id' => rand(1,3) ,
    			'section' => $faker->text($maxNbChars = 30),

    		]);
    	}
    }
}
