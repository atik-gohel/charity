<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_detail', function (Blueprint $table) {
            $table->id();
            $table->string('user_fname');
            $table->string('user_lname');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('user_number');
            $table->string('user_logo_path');
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
        Schema::dropIfExists('user_detail');
    }
}
