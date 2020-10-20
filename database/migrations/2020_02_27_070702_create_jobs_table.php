<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->string('job_title');
            $table->string('job_category');
            $table->integer('job_vacancy');
            $table->string('job_context');
            $table->longText('job_description');
            $table->string('job_location');
            $table->string('job_educationalRequirement');
            $table->string('job_salary');
            $table->string('job_exprience');
            $table->string('job_applicationDeadline');


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
        Schema::dropIfExists('jobs');
    }
}
