<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeacherIdToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->unsignedBigInteger('teacher_id')->nullable()
            ->on('users')->onUpdate('cascade')->onDelete('set null');;
        $table->foreign('teacher_id')->references('id')->on('users');
        $table->unsignedBigInteger('supporter_id')->nullable()
            ->on('users')->onUpdate('cascade')->onDelete('set null');;
        $table->foreign('supporter_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}
