<?php

use Illuminate\Database\Seeder;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        
  		  DB::table('categories')->insert(['name'=>'برمجة','created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  	   	DB::table('categories')->insert(['name'=>'ادارة','created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  	   	DB::table('categories')->insert(['name'=>'علوم','created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		  DB::table('categories')->insert(['name'=>'رياضيلت','created_at'=> new DateTime, 'updated_at' => new DateTime] );  

  		
        
    }
}
