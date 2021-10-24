<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('constants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->index();
            $table->string('value')->index();
            $table->integer('arrange')->index();                       
            $table->foreign('category_id')->references('id')->on('constants_categories')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('constants_translations', function (Blueprint $table) {
            $table->bigInteger('constant_id')->unsigned();  
            $table->string('lang');
            $table->string('title')->index();
            $table->primary(['constant_id','lang']);
            $table->foreign('id')->references('id')->on('constants')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constants');
        Schema::dropIfExists('constants_translations');
    }
}
