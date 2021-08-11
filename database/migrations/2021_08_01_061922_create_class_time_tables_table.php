<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTimeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_time_tables', function (Blueprint $table) {
            $table->id();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('subject_group')->nullable();
            $table->string('subject')->nullable();
            $table->string('day')->nullable();
            $table->string('teacher')->nullable();
            $table->string('time_form')->nullable();
            $table->string('time_to')->nullable();
            $table->string('room_no')->nullable();
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
        Schema::dropIfExists('class_time_tables');
    }
}
