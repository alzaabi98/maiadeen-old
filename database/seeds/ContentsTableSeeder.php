<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->truncate();

    	$faker = Faker\Factory::create();

    	for($i = 0 ; $i < 1000; $i++) {

    		App\Content::create([
    			'lecture_id' => rand(1,10) ,
    			'videoPath' => $faker->imageUrl($width = 640, $height = 480),
    			'otherFile' => $faker->imageUrl($width = 640, $height = 480),

    		]);
    	}
    }
}
