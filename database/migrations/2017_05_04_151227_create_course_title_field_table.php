<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTitleFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseTitle_field', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('courseTitle_id')->unsigned()->nullable();
            $table->foreign('courseTitle_id')->references('id')
                ->on('course_titles')->onDelete('cascade');

            $table->integer('field_id')->unsigned()->nullable();
            $table->foreign('field_id')->references('id')
                 ->on('fields')->onDelete('cascade');

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
        Schema::dropIfExists('course_title_field');
    }
}
