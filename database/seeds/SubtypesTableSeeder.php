<?php

use Illuminate\Database\Seeder;

class SubtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subtypes')->delete();
        $subtypes =[ 
	        	['type_id' => 1, 'courseSubtype' => '.Net Programming1','created_at' => new DateTime,'updated_at' => new DateTime ],
	        	['type_id' => 1, 'courseSubtype' => 'Desgin and Arts','created_at' => new DateTime,'updated_at' => new DateTime ],
	        	['type_id' => 3, 'courseSubtype' => 'Networking','created_at' => new DateTime,'updated_at' => new DateTime ],
	        	['type_id' => 2, 'courseSubtype' => 'Human Resources','created_at' => new DateTime,'updated_at' => new DateTime ],

        	] ;
        	

        DB::table('subtypes')->insert($subtypes);
    }
}
