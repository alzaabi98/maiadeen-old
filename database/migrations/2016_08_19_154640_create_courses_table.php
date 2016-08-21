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
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->integer('teacher_id')->unsigned();
            $table->integer('type_id')->unsigned();
            //$table->foreign('teacher_id')->references('id')->on('teacher')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->string('detail');
            $table->string('img');
            $table->string('type');
            $table->string('price');
            $table->string('rating');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('courses');

    }
}
