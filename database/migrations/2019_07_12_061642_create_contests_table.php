<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slogan', 50);
            $table->text('description');
            $table->tinyInteger('active')->default(0);
            $table->date('start_date');
            $table->date('submit_date');
            $table->date('vote_date');
            $table->date('end_date');
            $table->string('hashtag', 30)->nullable();
            $table->text('how_it_work');
            $table->text('rule');
            $table->text('prize');
            $table->integer('view_order')->unsigned()->default(0);
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
        Schema::dropIfExists('contests');
    }
}
