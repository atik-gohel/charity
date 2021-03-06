<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInquryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_inqury', function (Blueprint $table) {
            $table->increments('id');

            $table->string('user_inqury_name');
            $table->string('user_inqury_email');
            $table->string('user_inqury_subject');
            $table->string('user_inqury_message');

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
        Schema::dropIfExists('user_inqury');
    }
}
