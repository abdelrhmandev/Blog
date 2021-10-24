<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->enum('published',['0','1'])->default('1');
            $table->timestamps();
        });		
        Schema::create('page_translations', function (Blueprint $table) {                 
            $table->bigInteger('page_id')->unsigned();       
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('slug')->unique();
            $table->string('lang');
            $table->primary(['page_id','lang']);
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');		
        });	
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
        Schema::dropIfExists('page_translations');
    }
}
