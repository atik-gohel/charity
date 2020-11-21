<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributer', function (Blueprint $table) {
            $table->id();
            $table->string('contributer_fname');
            $table->string('contributer_lname');
            $table->email('contributer_email');
            $table->string('contributer_number');
            $table->string('contributer_type');
            $table->password('contributer_password');
            $table->string('contributer_city');
            $table->string('contributer_address');
            $table->string('contributer_detail');
            $table->string('contributer_logo_path');
            $table->double('contributer_ratting')->nullable();
            $table->string('contributer_address');
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
        Schema::dropIfExists('contributer');
    }
}
