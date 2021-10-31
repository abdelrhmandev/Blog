<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('parent_id')->default(0)->nullable();
            $table->boolean('featured')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::create('product_categories_translations', function (Blueprint $table) {                 
            $table->bigInteger('product_category_id')->unsigned();       
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->string('lang');
            $table->primary(['product_category_id','lang']);
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade');		
        });	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
        Schema::dropIfExists('product_categories_translations');
    }
}
