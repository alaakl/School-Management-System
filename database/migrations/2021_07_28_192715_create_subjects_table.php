<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('grade_id')->constrained('Grades')->cascadeOnDelete();
            // $table->bigInteger('grade_id');
            // $table->foreignId('grade_id')->references('id')->on('Grades')->onDelete('cascade');
            // $table->bigInteger('classroom_id');
            $table->foreignId('classroom_id')->references('id')->on('Classrooms')->onDelete('cascade');
            // $table->bigInteger('teacher_id');
            $table->foreignId('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
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
        Schema::dropIfExists('subjects');
    }
}
