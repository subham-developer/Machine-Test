<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_course', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('business_details_id');
            $table->string('course_name');
            $table->string('brief_description',700);
            $table->string('course_duration');
            $table->string('course_fees');
            $table->string('min_age');
            $table->string('min_qualification');
            $table->string('max_intake');
            $table->string('any_discount');
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
        Schema::dropIfExists('business_course');
    }
}
