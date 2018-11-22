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
            $table->integer('user_id')->unsigned()->index();
            $table->string('main_image');
            $table->string('bg_image')->default('https://biznesskit.com/engine/img/portfolio-templates/bg.jpg');
            $table->string('design')->default('1');
            $table->string('theme')->default('index.php');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('tag_line_1')->nullable();
            $table->string('tag_line_2')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('google_plus_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('about_title')->default('About Me');
            $table->string('about_story_title')->default('A little about myself');
            $table->text('about_story')->nullable();
            $table->tinyInteger('resume_downloadable')->default(0);
            $table->string('resume_download_link')->nullable();
            $table->string('skill_title')->default('My skills');
            $table->string('skill_1')->default('public speaking');
            $table->string('skill_1_level')->default('95');
            $table->string('skill_2')->default('management');
            $table->string('skill_2_level')->default('98');
            $table->string('skill_3')->default('design');
            $table->string('skill_3_level')->default('90');
            $table->string('skill_4')->default('organization');
            $table->string('skill_4_level')->default('98');
            $table->text('vision_statement')->nullable();
            $table->string('speciality_title')->default('What I do');
            $table->string('speciality_sub_title')->nullable();
            $table->text('speciality_1')->nullable();
            $table->string('speciality_1_icon')->default('fa-microphone');
            $table->text('speciality_1_text')->nullable();
            $table->text('speciality_1_url')->nullable();
            $table->string('speciality_1_img')->default('https://biznesskit.com/engine/img/portfolio-templates/01.jpg');
            $table->text('speciality_2')->nullable();
            $table->string('speciality_2_icon')->default('fa-microphone');
            $table->text('speciality_2_text')->nullable();
            $table->text('speciality_2_url')->nullable();
            $table->string('speciality_2_img')->default('https://biznesskit.com/engine/img/portfolio-templates/02.jpg');
            $table->text('speciality_3')->nullable();
            $table->string('speciality_3_icon')->default('fa-microphone');
            $table->text('speciality_3_text')->nullable();
            $table->text('speciality_3_url')->nullable();
            $table->string('speciality_3_img')->default('https://biznesskit.com/engine/img/portfolio-templates/03.jpg');
            $table->text('speciality_4')->nullable();
            $table->string('speciality_4_icon')->default('fa-microphone');
            $table->text('speciality_4_text')->nullable();
            $table->text('speciality_4_url')->nullable();
            $table->string('speciality_4_img')->default('https://biznesskit.com/engine/img/portfolio-templates/04.jpg');
            $table->text('mission_statement')->nullable();
            $table->string('contact_section_title')->default('Drop me a message');
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
