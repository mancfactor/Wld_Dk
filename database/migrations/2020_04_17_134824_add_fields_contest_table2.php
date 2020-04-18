<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsContestTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contests', function (Blueprint $table) {
            $table->string('button1_text',50)->default("")->nullable();
            $table->string('button1_link',50)->default("")->nullable();
            $table->string('button2_text',50)->default("")->nullable();
            $table->string('button2_link',50)->default("")->nullable();
            $table->string('button3_text',50)->default("")->nullable();
            $table->string('button3_link',50)->default("")->nullable();
            $table->string('button4_text',50)->default("")->nullable();
            $table->string('button4_link',50)->default("")->nullable();
            $table->string('button5_text',50)->default("")->nullable();
            $table->string('button5_link',50)->default("")->nullable();
            $table->string('button6_text',50)->default("")->nullable();
            $table->string('button6_link',50)->default("")->nullable();
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
