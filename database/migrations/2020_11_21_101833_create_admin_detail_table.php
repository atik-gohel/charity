<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_username');
            $table->string('admin_password');
            $table->string('admin_email');
            $table->string('admin_location');
            $table->string('admin_number');
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
        Schema::dropIfExists('admin_detail');
    }
}
