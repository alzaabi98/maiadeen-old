<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->delete();
        
  		DB::table('subcategories')->insert(['name'=>'asp.net','category_id'=>1,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		DB::table('subcategories')->insert(['name'=>'visual basic','category_id'=>1,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		DB::table('subcategories')->insert(['name'=>'Java','category_id'=>1,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		DB::table('subcategories')->insert(['name'=>'C++','category_id'=>1,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  

  		DB::table('subcategories')->insert(['name'=>'القيادة','category_id'=>2,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		DB::table('subcategories')->insert(['name'=>' ادارة الوقت','category_id'=>2,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		
  		DB::table('subcategories')->insert(['name'=>'فيزياء','category_id'=>3,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		DB::table('subcategories')->insert(['name'=>' كيمياء ','category_id'=>3,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		
	
  		DB::table('subcategories')->insert(['name'=>'حساب','category_id'=>4,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		DB::table('subcategories')->insert(['name'=>' تكامل ','category_id'=>4,'created_at'=> new DateTime, 'updated_at' => new DateTime] );  
  		

    }
}
