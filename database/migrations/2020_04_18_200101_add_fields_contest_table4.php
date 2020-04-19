<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsContestTable4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contests', function (Blueprint $table) {
            //
            $table->string('how_title', 50);
            $table->string('how_body',800)->default("");
            $table->string('how_step1_title',50)->default("");
            $table->string('how_step1_body',800)->default("");
            $table->string('how_step2_title',50)->default("");
            $table->string('how_step2_body',800)->default("");
            $table->string('how_step3_title',50)->default("");
            $table->string('how_step3_body',800)->default("");
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
            $table->dropColumn('how_title');
            $table->dropColumn('how_body');
            $table->dropColumn('how_step1_title');
            $table->dropColumn('how_step1_body');
            $table->dropColumn('how_step2_title');
            $table->dropColumn('how_step2_body');
            $table->dropColumn('how_step3_title');
            $table->dropColumn('how_step3_body');
        });
    }
}
