<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMdlImsStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mdl_ims_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('dob');
            $table->string('age');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('religion');
            $table->string('gender');
            $table->string('image');
            $table->string('prsnt_address');
            $table->string('prmnnt_address');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('sibling1');
            $table->string('sibling2');
            $table->string('class_id');
            $table->string('section_id');
            $table->string('shift_Id');
            $table->string('group_id');
            $table->string('optional_subject');
            $table->string('roll_no');
            $table->string('session');
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
        Schema::dropIfExists('mdl_ims_students');
    }
}
