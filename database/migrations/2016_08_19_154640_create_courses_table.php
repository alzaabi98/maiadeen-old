<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('courses', function (Blueprint $table) {
            // $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('title');
            $table->string('summary');
            $table->string('img');
            $table->string('price');
            
            $table->integer('teacher_id')->unsigned()->default(0);
            $table->integer('category_id')->unsigned()->default(0);
            $table->integer('subcategory_id')->unsigned()->default(0);
            $table->integer('level_id')->unsigned()->default(0);
            $table->integer('review_id')->unsigned()->default(0);
            $table->integer('content_id')->unsigned()->default(0);



            
            $table->timestamps();


            // $table->foreign('teacher_id')->references('id')->on('teachers');
            // $table->foreign('subtype_id')->references('id')->on('subtypes');


        });
     // Schema::create('types', function (Blueprint $table) {
     //        $table->engine = "InnoDB";
     //        $table->increments('id');
     //        $table->string('courseType');
     //        $table->timestamps();
     //    });
     //    Schema::create('subtypes', function (Blueprint $table) {
     //        $table->engine = "InnoDB";
     //        $table->increments('id');
     //        $table->integer('type_id')->unsigned()->default(0);
     //        $table->string('courseSubtype');
     //        $table->timestamps();

     //        $table->foreign('type_id')->references('id')->on('types');

     //    });

    

      

        

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        // Schema::drop('types');
        // Schema::drop('subtypes');
        Schema::drop('courses');



    }
}
