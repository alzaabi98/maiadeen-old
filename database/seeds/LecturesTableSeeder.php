<?php

use Illuminate\Database\Seeder;

class LecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->truncate();

    	$faker = Faker\Factory::create();

    	for($i = 0 ; $i < 1000; $i++) {

    		App\Lecture::create([
    			'section_id' => rand(1,4) ,
    			'title' => $faker->text($maxNbChars = 60),
    			'details' => $faker->text($maxNbChars = 60),
    	

    		]);
    	}
    }
}
