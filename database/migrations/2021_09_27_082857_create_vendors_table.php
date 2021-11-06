<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile',20);            
            $table->string('phone',20);  
            $table->string("logo",50)->nullable();
            $table->enum('active',['0','1'])->default('1');
            $table->string('google_map');
            $table->timestamps();
        });		
      
 
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
 
     
    }
}
