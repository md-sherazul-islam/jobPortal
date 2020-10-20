<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('company_name');
            $table->string('company_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('company_country');
            $table->string('company_district');
            $table->string('company_policeStation');
            $table->string('company_address');
            $table->string('company_type');
            $table->string('company_description');
            $table->string('company_tradeLicense');
            $table->string('company_websiteUrl');
            $table->string('company_logo');

            $table->string('company_contactPersonName');
            $table->string('company_contactPersonDesignation');
            $table->string('company_contactPersonEmail');
            $table->integer('company_contactPersonPhone');

            $table->string('approved');
            $table->string('verified');

            $table->rememberToken();
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
        Schema::dropIfExists('companys');
    }
}
