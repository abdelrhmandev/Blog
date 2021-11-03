<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->boolean('featured')->default(0);
            $table->string('image')->nullable();
            $table->unsignedBigInteger('post_category_id')->index()->nullable();
            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('cascade');
            $table->timestamps();
       });
        Schema::create('post_translations', function (Blueprint $table) {                 
            $table->bigInteger('post_id')->unsigned();       
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->string('lang');
            $table->primary(['post_id','lang']);
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');		
        });	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('post_translations');
    }
}
