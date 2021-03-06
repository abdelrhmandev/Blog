<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('tag_translations', function (Blueprint $table) {                 
            $table->bigInteger('tag_id')->unsigned();       
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('lang');
            $table->primary(['tag_id','lang']);
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');		
        });	        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('tag_translations');
    }
}
