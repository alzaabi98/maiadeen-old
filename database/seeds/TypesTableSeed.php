<?php

use Illuminate\Database\Seeder;

class TypesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('types')->delete();
        $types =[ 
	        	['coursetype' => 'Programming','created_at' => new DateTime,'updated_at' => new DateTime ],
	        	['coursetype' => 'Networking','created_at' => new DateTime,'updated_at' => new DateTime ],
	        	['coursetype' => 'Cooking','created_at' => new DateTime,'updated_at' => new DateTime ],
	        	['coursetype' => 'Farming','created_at' => new DateTime,'updated_at' => new DateTime ],

        	] ;
        	

        DB::table('types')->insert($types);
    }
}
