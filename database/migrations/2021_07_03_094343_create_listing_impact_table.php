<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingImpactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_impact', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id')->nullable()->constrained();
            $table->unsignedBigInteger('impact_id');
            $table->foreign('impact_id')->references('id')->on('impact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing_impact');
    }
}
