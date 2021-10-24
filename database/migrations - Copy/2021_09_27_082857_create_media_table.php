<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string("object_type"); // Posts,Pages
            $table->string("object_id"); // Post Id, Page id
            $table->string("type"); // jpg , csv , xls
            $table->string("url"); //uploads/file.jpg
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
        Schema::dropIfExists('meida');
    }
}
