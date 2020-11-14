<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddteachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addteachers', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname');
            $table->string('last_name');
            $table->string('joining_date');
            $table->string('Subject');
            $table->integer('phone_number');
            $table->string('gender');
            $table->string('brithday');
            $table->string('card_id');
            $table->string('religion');
            $table->string('classe');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nationality');
            $table->longText('address');
            $table->string('social_science');
            $table->string('section');
            $table->integer('user_id');
            $table->string('teacher_imegre');
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
        Schema::dropIfExists('addteachers');
    }
}
