<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->truncate();


  		  DB::table('levels')->insert(['level'=>'begginer','created_at'=> new DateTime, 'updated_at' => new DateTime] );

  		  DB::table('levels')->insert(['level'=>'intermidate','created_at'=> new DateTime, 'updated_at' => new DateTime] );

  		  DB::table('levels')->insert(['level'=>'advanced','created_at'=> new DateTime, 'updated_at' => new DateTime] );  		    

    }
}
