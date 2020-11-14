<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addstudents', function (Blueprint $table) {
            $table->id();
            $table->string('firat_name');
            $table->string('last_name');
            $table->string('Subject');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('admissions_no');
            $table->date('birthday');
            $table->date('joining_date');
            $table->string('card_id');
            $table->string('classe_name');
            $table->string('section');
            $table->string('religion');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('Father_Occupation');
            $table->string('mother_Occupation');
            $table->integer('mobile_number');
            $table->string('nationality');
            $table->longText('address');
            $table->longText('current_address')->nullable();
            $table->string('passport')->nullable();
            $table->string('status');
            $table->string('user_id');
            $table->string('email')->unique();
            $table->string('student_imegre');
            $table->string('parents_imegre');
            $table->softDeletes();
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
        Schema::dropIfExists('addstudents');
    }
}
