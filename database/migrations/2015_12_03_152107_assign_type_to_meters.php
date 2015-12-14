<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssignTypeToMeters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meters', function (Blueprint $table) {
            $table->dropColumn('commodity');
            $table->integer('type_id')->unsigned();

            $table->foreign('type_id')->references('id')->on('meter_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meters', function (Blueprint $table) {
            $table->dropForeign('meters_type_id_foreign');
            $table->dropColumn('type_id');
            $table->enum("commodity", ['gas', 'heating', 'hot_water', 'cold_water']);
        });
    }
}
