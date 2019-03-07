<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fistname');
            $table->string('lastname');
            $table->string('sex');
            $table->string('dob');
            $table->string('email');
            $table->string('rac');
            $table->string('status');
            $table->string('nationality');
            $table->string('national_card');
            $table->string('passport');
            $table->string('phone');
            $table->string('village');
            $table->string('commune');
            $table->string('district');
            $table->string('province');
            $table->string('current_address');
            $table->string('dateregistered');
            $table->string('photo');
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
        Schema::dropIfExists('students');
    }
}
