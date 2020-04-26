<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropForKeyFollowable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('followables', function (Blueprint $table) {
            $table->dropForeign('followables_user_id_foreign');
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
            $userForeignKey = config('follow.users_table_foreign_key', 'user_id');
            $table->foreign($userForeignKey)
            ->references(config('follow.users_table_primary_key', 'id'))
            ->on(config('follow.users_table_name', 'users'))
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }
}
