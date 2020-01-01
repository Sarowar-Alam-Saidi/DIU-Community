<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentinformations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userID')->nullable();
            $table->string('type')->nullable();
            $table->string('SRid')->nullable();
            $table->string('department')->nullable();
            $table->string('batch')->nullable();
            $table->string('blood');
            $table->string('dob')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('image')->nullable();
            $table->string('bloodStatus')->default('Available');
            $table->string('currentJob')->default('Student');
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
        Schema::dropIfExists('studentinformations');
    }
}
