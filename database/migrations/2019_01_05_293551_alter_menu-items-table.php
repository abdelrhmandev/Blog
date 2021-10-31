<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(config('menu.table_prefix') . config('menu.table_name_items'), function ($table) {
            $table->string('target_type',100);
            $table->integer('target_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( config('menu.table_prefix') . config('menu.table_name_menus'));
    }
}
