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
        Schema::create('admin_detail', function (Blueprint $ad_table) {
            $adtable->id();
            $adtable->string('admin_username');
            $adtable->password('admin_password');
            $adtable->email('admin_email');
            $adtable->string('admin_location');
            $adtable->string('admin_number');
            $adtable->timestamps();
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
