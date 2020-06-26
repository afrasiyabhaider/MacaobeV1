<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnInVariationLocationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('variation_location_details', function (Blueprint $table) {
            $table->integer('transfered_from')->unsigned()->after('location_id')->default(1);
            $table->foreign('transfered_from')->references('id')->on('business_locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('variation_location_details', function (Blueprint $table) {
            $table->dropColumn('transfered_from');
        });
    }
}
