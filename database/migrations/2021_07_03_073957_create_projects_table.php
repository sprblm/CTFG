<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('airtable_id')->nullable();

            $table->json('cats')->nullable();
            $table->json('tags')->nullable();
            $table->json('images')->nullable();
            $table->json('location')->nullable();
            $table->json('links')->nullable();
            $table->json('host_org')->nullable();
            $table->json('founders')->nullable();
            $table->json('impact')->nullable();
            $table->json('funding')->nullable();


            $table->string('name')->nullable();
            $table->text('introduction')->nullable();
            $table->string('type')->nullable();
            $table->string('organization_type')->nullable();
            $table->longText('description')->nullable();
            $table->string('status')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('website_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('youtube_channel')->nullable();
            $table->text('contact_page_url')->nullable();
            $table->text('github_url')->nullable();
            $table->string('email')->nullable();
            $table->text('events_page_url')->nullable();
            $table->text('jobs_page_url')->nullable();
            $table->text('blog_url')->nullable();
            $table->text('built_with')->nullable();
            $table->string('claimed_status')->nullable();
            $table->string('founded')->nullable();
            $table->string('closed')->nullable();
            $table->longText('shutdown_reason')->nullable();
            $table->string('postmortem')->nullable();
            $table->string('host_organization')->nullable();
            $table->text('host_organization_url')->nullable();
            $table->string('language')->nullable();
            $table->string('secondary_language')->nullable();
            $table->string('open_source')->nullable();
            $table->string('open_source_license')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
