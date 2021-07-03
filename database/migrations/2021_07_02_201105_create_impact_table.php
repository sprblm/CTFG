<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('impact', function (Blueprint $table) {
            $table->id();
            $table->string('airtable_id')->nullable();
            $table->string('impact_date')->nullable();
            $table->string('post_modified_date')->nullable();
            $table->string('url')->nullable();
            $table->longText('statement')->nullable();
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
        Schema::dropIfExists('impact');
    }
}
