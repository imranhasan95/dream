<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddparentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addparents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('id_number');
            $table->string('gender');
            $table->date('brithday');
            $table->string('class_section');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('occupation');
            $table->integer('phone_number');
            $table->longText('address');
            $table->string('user_id');
            $table->string('email')->unique();
            $table->string('parent_image');
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
        Schema::dropIfExists('addparents');
    }
}
