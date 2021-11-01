<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('attribute_id');
            $table->foreign('attribute_id')->references('id')->on('attributes');
            $table->text('value');
            $table->decimal('price', 2)->nullable();
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
        Schema::dropIfExists('attribute_values');
    }
}

/*
        $sizes = ['small', 'medium', 'large'];
        $colors = ['black', 'blue', 'red', 'orange'];

        foreach ($sizes as $size)
        {
            AttributeValue::create([
                'attribute_id'      =>  1,
                'value'             =>  $size,
                'price'             =>  null,
            ]);
        }
        foreach ($colors as $color)
        {
            AttributeValue::create([
                'attribute_id'      =>  2,
                'value'             =>  $color,
                'price'             =>  null,
            ]);
        }
*/