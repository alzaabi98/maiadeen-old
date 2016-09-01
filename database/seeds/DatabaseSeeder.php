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
        //$this->call(CourseTableSeeder::class);
        //$this->call(UserTableSeeder::class);
        //$this->call(SubCategorySeeder::class);
        //$this->call(TeacherTableSeeder::class);
        //$this->call(TypesTableSeed::class);
        $this->call(categoriesTableSeeder::class);


    }
}
