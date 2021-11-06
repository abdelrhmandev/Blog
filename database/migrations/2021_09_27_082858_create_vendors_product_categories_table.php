<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 
        Schema::create('vendors_product_categories', function (Blueprint $table) {
            $table->bigInteger('product_category_id')->unsigned();
            $table->bigInteger('vendor_id')->unsigned();  
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade');	
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');	
        });		
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('vendors_product_categories');
     
    }
}
