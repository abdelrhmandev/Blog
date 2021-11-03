<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 8, 2)->nullable();
            $table->enum('published', ['0','1']);
     
    
            $table->timestamps();
        });
        Schema::create('shipping_translations', function (Blueprint $table) {                 
            $table->bigInteger('shipping_id')->unsigned();       
            $table->string('title');
            $table->string('lang');
            $table->primary(['shipping_id','lang']);
            $table->foreign('shipping_id')->references('id')->on('shippings')->onDelete('cascade');		
        });	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shippings');
        Schema::dropIfExists('shipping_translations');
    }
}
