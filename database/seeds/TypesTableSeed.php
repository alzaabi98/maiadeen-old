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

    	DB::table('types')->truncate();
        $types []=[ 
	        	['type' => '.Net Programming1','created_at' => new DateTime,'updated_at' => new DateTime ],
	        	['type' => '.Net Programming2','created_at' => new DateTime,'updated_at' => new DateTime ],
	        	['type' => '.Net Programming3','created_at' => new DateTime,'updated_at' => new DateTime ],
	        	['type' => '.Net Programming4','created_at' => new DateTime,'updated_at' => new DateTime ],

        	]
        	

        DB::table('types')->insert($types);
    }
}
