<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('funding', function (Blueprint $table) {
            $table->id();
            $table->string('airtable_id')->nullable();
            $table->string('funding_date')->nullable();
            $table->string('post_modified_date')->nullable();
            $table->decimal('amount', 13, 2)->default(0.00);
            $table->text('funded_by')->nullable();
            $table->string('when_funded')->nullable();
            $table->string('link')->nullable();
            $table->string('acquired_by_who')->nullable();
            $table->string('acquired_when')->nullable();
            $table->decimal('acquision_amount', 13, 2)->default(0.00);
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
        Schema::dropIfExists('funding');
    }
}
