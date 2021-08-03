<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->string('project_stage')->after('status')->nullable();
            $table->string('features')->after('status')->nullable();
            $table->string('used_by')->after('status')->nullable();
            $table->string('no_of_employees')->after('status')->nullable();
            $table->string('pricing_information')->after('status')->nullable();
            $table->string('wikidata_api_field')->after('status')->nullable();
            $table->string('last_modified')->after('open_source_license')->nullable();
            $table->string('created')->after('open_source_license')->nullable();
            $table->string('slack_url')->after('blog_url')->nullable();
            $table->string('crunchbase_url')->after('blog_url')->nullable();
            $table->string('wikimedia_url')->after('blog_url')->nullable();
            $table->string('tiktok_url')->after('blog_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            //
        });
    }
}
