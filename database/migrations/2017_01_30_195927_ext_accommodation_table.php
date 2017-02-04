<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtAccommodationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('Accommodations', function(Blueprint $table){
            $table->tinyInteger('wifi');
            $table->tinyInteger('broadband');
            $table->tinyInteger('aircon');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('county');
            $table->string('country');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('Accommodations', function (Blueprint $table){
            $table->dropColumn('wifi');
            $table->dropColumn('broadbnd');
            $table->dropColumn('aircon');
            $table->dropColumn('address_line_1');
            $table->dropColumn('address_line_2');
            $tble->dropColumn('city');
            $table->dropColumn('county');
            $table->dropColumn('country');
        });
    }
}
