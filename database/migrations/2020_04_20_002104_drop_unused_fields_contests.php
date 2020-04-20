<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropUnusedFieldsContests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contests', function (Blueprint $table) {
            $table->dropColumn('rule');
            $table->dropColumn('prize');
            $table->dropColumn('view_order');
            $table->dropColumn('description');
            $table->dropColumn('how_it_work');
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
            $table->text('rule');
            $table->text('prize');
            $table->integer('view_order')->unsigned()->default(0);
            $table->text('description');
            $table->text('how_it_work');
            
        });
    }
}
