<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly__programmes', function (Blueprint $table) {
            $table->id();
            $table->string('days');
            $table->time('start_time');
            $table->time('end_time');
            $table->bigInteger('lecture_id')->unsigned();
            $table->bigInteger('classroom_id')->unsigned();
            $table->bigInteger('branch_id')->unsigned();
            $table->bigInteger('subject_id')->unsigned();
            $table->bigInteger('teacher_id')->unsigned();
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
        Schema::dropIfExists('weekly__programmes');
    }
}
