<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeCareerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_career_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->longText('objective');
            $table->integer('present_salary')->nullable();
            $table->integer('expected_salary')->nullable();
            $table->string('looking_for')->nullable();
            $table->string('available_for')->nullable();
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
        Schema::dropIfExists('resume_career_info');
    }
}
