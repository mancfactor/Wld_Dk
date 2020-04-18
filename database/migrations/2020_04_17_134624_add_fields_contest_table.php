<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsContestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contests', function (Blueprint $table) {
            $table->string('contest_heading', 100);
            $table->string('menu_title', 50);
            $table->integer('steps_media_id')->unsigned()->nullable();
            $table->string('step1_title',50)->default("");
            $table->string('step1_body',250)->default("");
            $table->string('step2_title',50)->default("");
            $table->string('step2_body',250)->default("");
            $table->string('step3_title',50)->default("");
            $table->string('step3_body',250)->default("");
            $table->string('video_heading',100)->default("");
            $table->string('video_link',50)->default("");
            $table->string('button1_text',50)->default("");
            $table->string('button1_link',50)->default("");
            $table->string('button2_text',50)->default("");
            $table->string('button2_link',50)->default("");
            $table->string('button3_text',50)->default("");
            $table->string('button3_link',50)->default("");
            $table->string('button4_text',50)->default("");
            $table->string('button4_link',50)->default("");
            $table->string('button5_text',50)->default("");
            $table->string('button5_link',50)->default("");
            $table->string('button6_text',50)->default("");
            $table->string('button6_link',50)->default("");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contests', function (Blueprint $table) {
            //
            $table->dropColumn('contest_heading');
            $table->dropColumn('menu_title');
            $table->dropColumn('steps_media_id');
            $table->dropColumn('step1_title');
            $table->dropColumn('step2_title');
            $table->dropColumn('step3_title');
            $table->dropColumn('step1_body');
            $table->dropColumn('step2_body');
            $table->dropColumn('step3_body');
            $table->dropColumn('video_heading');
            $table->dropColumn('video_link');
            $table->dropColumn('button1_text');
            $table->dropColumn('button1_link');
            $table->dropColumn('button2_text');
            $table->dropColumn('button2_link');
            $table->dropColumn('button3_text');
            $table->dropColumn('button3_link');
            $table->dropColumn('button4_text');
            $table->dropColumn('button4_link');
            $table->dropColumn('button5_text');
            $table->dropColumn('button5_link');
            $table->dropColumn('button6_text');
            $table->dropColumn('button6_link');
        });
    }
}
