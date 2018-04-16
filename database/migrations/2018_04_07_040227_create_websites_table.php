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
            $table->string('main_image');
            $table->string('theme');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('tag_line_1');
            $table->string('tag_line_2');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('google_plus_link');
            $table->string('linkedin_link');
            $table->string('instagram_link');
            $table->string('about_title');
            $table->string('about_story_title');
            $table->text('about_story');
            $table->tinyInteger('resume_downloadable')->default(1);
            $table->string('resume_download_link');
            $table->string('skill_title');
            $table->string('skill_1');
            $table->string('skill_1_level');
            $table->string('skill_2');
            $table->string('skill_2_level');
            $table->string('skill_3');
            $table->string('skill_3_level');
            $table->string('skill_4');
            $table->string('skill_4_level');
            $table->string('vision_statement');
            $table->string('speciality_title');
            $table->string('speciality_1');
            $table->string('speciality_1_icon');
            $table->text('speciality_1_text');
            $table->string('speciality_2');
            $table->string('speciality_2_icon');
            $table->text('speciality_2_text');
            $table->string('speciality_3');
            $table->string('speciality_3_icon');
            $table->text('speciality_3_text');
            $table->string('speciality_4');
            $table->string('speciality_4_icon');
            $table->text('speciality_4_text');
            $table->string('mission_statement');
            $table->string('portfolio_title');
            $table->string('portfolio_sub_title');
            $table->string('portfolio_category_1');
            $table->string('portfolio_category_2');
            $table->string('portfolio_category_3');
            $table->string('portfolio_category_4');
            $table->string('work_1');
            $table->string('work_1_image');
            $table->string('work_1_text');
            $table->string('work_1_category');
            $table->string('work_2');
            $table->string('work_2_image');
            $table->string('work_2_text');
            $table->string('work_2_category');
            $table->string('work_3');
            $table->string('work_3_image');
            $table->string('work_3_text');
            $table->string('work_3_category');
            $table->string('work_4');
            $table->string('work_4_image');
            $table->string('work_4_text');
            $table->string('work_4_category');
            $table->string('work_5');
            $table->string('work_5_image');
            $table->string('work_5_text');
            $table->string('work_5_category');
            $table->string('work_6');
            $table->string('work_6_image');
            $table->string('work_6_text');
            $table->string('work_6_category');
            $table->string('contact_section_title');
            $table->string('contact_receiving_email');
            $table->string('contact_auto_reply_message');
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
