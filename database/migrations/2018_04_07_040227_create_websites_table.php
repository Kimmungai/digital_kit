<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('main_image')->nullable();
            $table->string('design')->nullable();
            $table->string('theme')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('tag_line_1')->nullable();
            $table->string('tag_line_2')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('google_plus_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_story_title')->nullable();
            $table->text('about_story')->nullable();
            $table->tinyInteger('resume_downloadable')->default(1);
            $table->string('resume_download_link')->nullable();
            $table->string('skill_title')->nullable();
            $table->string('skill_1')->nullable();
            $table->string('skill_1_level')->nullable();
            $table->string('skill_2')->nullable();
            $table->string('skill_2_level')->nullable();
            $table->string('skill_3')->nullable();
            $table->string('skill_3_level')->nullable();
            $table->string('skill_4')->nullable();
            $table->string('skill_4_level')->nullable();
            $table->string('vision_statement')->nullable();
            $table->string('speciality_title')->nullable();
            $table->string('speciality_1')->nullable();
            $table->string('speciality_1_icon')->nullable();
            $table->text('speciality_1_text')->nullable();
            $table->string('speciality_2')->nullable();
            $table->string('speciality_2_icon')->nullable();
            $table->text('speciality_2_text')->nullable();
            $table->string('speciality_3')->nullable();
            $table->string('speciality_3_icon')->nullable();
            $table->text('speciality_3_text')->nullable();
            $table->string('speciality_4')->nullable();
            $table->string('speciality_4_icon')->nullable();
            $table->text('speciality_4_text')->nullable();
            $table->string('mission_statement')->nullable();
            $table->string('portfolio_title')->nullable();
            $table->string('portfolio_sub_title')->nullable();
            $table->string('portfolio_category_1')->nullable();
            $table->string('portfolio_category_2')->nullable();
            $table->string('portfolio_category_3')->nullable();
            $table->string('portfolio_category_4')->nullable();
            $table->string('work_1')->nullable();
            $table->string('work_1_image')->nullable();
            $table->string('work_1_text')->nullable();
            $table->string('work_1_category')->nullable();
            $table->string('work_2')->nullable();
            $table->string('work_2_image')->nullable();
            $table->string('work_2_text')->nullable();
            $table->string('work_2_category')->nullable();
            $table->string('work_3')->nullable();
            $table->string('work_3_image')->nullable();
            $table->string('work_3_text')->nullable();
            $table->string('work_3_category')->nullable();
            $table->string('work_4')->nullable();
            $table->string('work_4_image')->nullable();
            $table->string('work_4_text')->nullable();
            $table->string('work_4_category')->nullable();
            $table->string('work_5')->nullable();
            $table->string('work_5_image')->nullable();
            $table->string('work_5_text')->nullable();
            $table->string('work_5_category')->nullable();
            $table->string('work_6')->nullable();
            $table->string('work_6_image')->nullable();
            $table->string('work_6_text')->nullable();
            $table->string('work_6_category')->nullable();
            $table->string('contact_section_title')->nullable();
            $table->string('contact_receiving_email')->nullable();
            $table->string('contact_auto_reply_message')->nullable();
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
        Schema::dropIfExists('websites');
    }
}
