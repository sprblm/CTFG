<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptiveFieldsToListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->longText('raw_description')->after('description')->nullable();
            $table->longText('markdown_description')->after('description')->nullable();
            $table->smallInteger('is_slideshare_embed')->default(0)->after('status');
            $table->smallInteger('is_youtube_channel')->default(0)->after('status');
            $table->smallInteger('is_twitter_feed')->default(0)->after('status');
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
