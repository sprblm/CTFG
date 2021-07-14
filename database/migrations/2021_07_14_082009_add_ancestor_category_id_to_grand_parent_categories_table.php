<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAncestorCategoryIdToGrandParentCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grand_parent_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('ancestor_category_id')->nullable()->after('id');
            $table->foreign('ancestor_category_id')->references('id')->on('ancestor_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grand_parent_categories', function (Blueprint $table) {
            //
        });
    }
}
