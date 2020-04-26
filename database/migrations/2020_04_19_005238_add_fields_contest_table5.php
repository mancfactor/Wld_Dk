<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsContestTable5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contests', function (Blueprint $table) {
            $table->string('rules_title',50)->default("");
            $table->text('rules_body');
            $table->string('prize_heading',50)->default("");
            $table->string('prize_title',100)->default("");
            $table->string('prize_body',100)->default("")->nullable();
            $table->string('prize_first_title',50)->default("");
            $table->string('prize_first_body',100)->default("");
            $table->string('prize_second_title',50)->default("")->nullable();
            $table->string('prize_second_body',100)->default("")->nullable();
            $table->string('prize_third_title',50)->default("")->nullable();
            $table->string('prize_third_body',100)->default("")->nullable();
            $table->string('prize_special_title',50)->default("");
            $table->string('prize_special_body',350)->default("");
            $table->string('prize_voting_title',50)->default("");
            $table->string('prize_voting_body',350)->default("");
            $table->string('prize_elgible_title',50)->default("");
            $table->string('prize_elgible_body',350)->default("");
            $table->string('prize_commission_title',50)->default("");
            $table->string('prize_commission_body',350)->default("");
            $table->string('faq_heading',50)->default("");
            $table->string('faq_qa1_title',100)->default("");
            $table->string('faq_qa1_body',300)->default("");
            $table->string('faq_qa2_title',100)->default("")->nullable();
            $table->string('faq_qa2_body',300)->default("")->nullable();
            $table->string('faq_qa3_title',100)->default("")->nullable();
            $table->string('faq_qa3_body',300)->default("")->nullable();
            $table->string('faq_qa4_title',100)->default("")->nullable();
            $table->string('faq_qa4_body',300)->default("")->nullable();
            $table->string('faq_qa5_title',100)->default("")->nullable();
            $table->string('faq_qa5_body',300)->default("")->nullable();

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
            $table->dropColumn('rules_title');
            $table->dropColumn('rules_body');
            $table->dropColumn('prize_heading');
            $table->dropColumn('prize_title');
            $table->dropColumn('prize_first_title');
            $table->dropColumn('prize_first_body');
            $table->dropColumn('prize_second_title');
            $table->dropColumn('prize_second_body');
            $table->dropColumn('prize_third_title');
            $table->dropColumn('prize_third_body');
            $table->dropColumn('prize_special_title');
            $table->dropColumn('prize_special_body');
            $table->dropColumn('prize_voting_title');
            $table->dropColumn('prize_voting_body');
            $table->dropColumn('prize_elgible_title');
            $table->dropColumn('prize_elgible_body');
            $table->dropColumn('prize_commission_title');
            $table->dropColumn('prize_commission_body');
            $table->dropColumn('faq_heading');
            $table->dropColumn('faq_qa1_title');
            $table->dropColumn('faq_qa1_body');
            $table->dropColumn('faq_qa2_title');
            $table->dropColumn('faq_qa2_body');
            $table->dropColumn('faq_qa3_title');
            $table->dropColumn('faq_qa3_body');
            $table->dropColumn('faq_qa4_title');
            $table->dropColumn('faq_qa4_body');
            $table->dropColumn('faq_qa5_title');
            $table->dropColumn('faq_qa5_body');
        });
    }
}
