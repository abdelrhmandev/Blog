<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('cities', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('country_id');
			$table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->timestamps();
			});
		Schema::create('city_translations', function (Blueprint $table) {            
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('lang');
            $table->unsignedBigInteger('city_id');
            $table->primary(['city_id','lang']);
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');       
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('cities');
		Schema::dropIfExists('city_translations');
	}
}
