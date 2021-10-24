<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstantsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constants_categories', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('constants_categories_translations', function (Blueprint $table) {
            $table->bigInteger('constants_category_id')->unsigned();  
            $table->string('lang');
            $table->string('title')->index();
            $table->primary(['constants_category_id','lang']);
            $table->foreign('id')->references('id')->on('constants_categories')->onDelete('cascade');            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constants_categories');
        Schema::dropIfExists('constants_categories_translations');
    }
}
