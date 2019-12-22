<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_details', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('business_category_id');
            $table->string('business_name');
            $table->string('company_logo');
            $table->string('business_contact_no');
            $table->string('email_id');
            $table->string('zip_code');
            $table->string('city');
            $table->string('address_line_1',700);
            $table->string('address_line_2',700);
            $table->string('state');
            $table->string('brief_description',700);
            $table->string('company_pictures',400);
            $table->string('monday',400);
            $table->string('tuesday',400);
            $table->string('wednesday',400);
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
        Schema::dropIfExists('business_details');
    }
}
