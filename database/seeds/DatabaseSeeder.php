<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UserTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(categoriesTableSeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(LecturesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(EnrollmentTableSeeder::class);
        


    }
}
