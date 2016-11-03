<?php

use Illuminate\Database\Seeder;

class EnrollmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enrollments')->truncate();

    	$faker = Faker\Factory::create();

    	for($i = 0 ; $i < 1000; $i++) {

    		App\Enrollment::create([
    			'user_id' => rand(1,29) ,
    			'course_id' => rand(1,30) ,
    	

    		]);
    	}
    }
}
