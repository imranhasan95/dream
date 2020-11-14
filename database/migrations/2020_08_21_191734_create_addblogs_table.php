<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addblogs', function (Blueprint $table) {
            $table->id();
            $table->integer('blogcategorie_id');
            $table->integer('blogsubcategorie_id');
            $table->string('blog_name');
            $table->longText('past_description')->nullable();
            $table->longText('shot_details')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('blog_images');
            $table->integer('added_by');
            $table->SoftDeletes();
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
        Schema::dropIfExists('addblogs');
    }
}
