<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('followables', function (Blueprint $table) {
            $table->increments('id');
            $table->index(['followable_id','followable_type'], 'follow_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('followables', function (Blueprint $table) {
            $table->dropIndex('follow_key');
            $table->drop('id');
        });
    }
}
