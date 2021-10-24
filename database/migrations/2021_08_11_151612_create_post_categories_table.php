<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->default(0)->nullable();
            $table->boolean('featured')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::create('post_categories_translations', function (Blueprint $table) {                 
            $table->unsignedBigInteger('post_category_id');       
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->string('lang');
            $table->primary(['post_category_id','lang']);
            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('cascade');		
        });	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_categories');
        Schema::dropIfExists('post_categories_translations');
    }
}
