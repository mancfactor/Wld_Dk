<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsContestTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contests', function (Blueprint $table) {
            $table->integer('intro_media1_id')->unsigned()->nullable();
            $table->string('intro_body1',250)->default("");
            $table->string('intro_body2',250)->default("");
            $table->string('intro_button1_text',50)->default("")->nullable();
            $table->string('intro_button1_link',50)->default("")->nullable();
            $table->integer('intro_media2_id')->unsigned()->nullable();
            $table->string('intro_body3',250)->default("");
            $table->string('intro_button2_text',50)->default("")->nullable();
            $table->string('intro_button2_link',50)->default("")->nullable();
        
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
            $table->dropColumn('intro_media1_id');
            $table->dropColumn('intro_body1');
            $table->dropColumn('intro_body2');
            $table->dropColumn('intro_button1_text');
            $table->dropColumn('intro_button1_link');
            $table->dropColumn('intro_media2_id');
            $table->dropColumn('intro_body3');
            $table->dropColumn('intro_button2_text');
            $table->dropColumn('intro_button2_link');       
        });
    }
}