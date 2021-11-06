<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
        Schema::create('brand_translations', function (Blueprint $table) {                 
            $table->bigInteger('brand_id')->unsigned();       
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('lang');
            $table->primary(['brand_id','lang']);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');		
        });	        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
        Schema::dropIfExists('brand_translations');
    }
}
