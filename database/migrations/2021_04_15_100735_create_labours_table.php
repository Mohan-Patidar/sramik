<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labours', function (Blueprint $table) {
            $table->id();
            $table->string('labour_id');
            $table->string('date');
            $table->string('image')->nullable();
            $table->string('leader_name')->nullable();
            $table->string('leader_contact')->nullable();
            $table->string('labour_name');
            $table->string('dob')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->string('f_name')->nullable();
            $table->string('age')->nullable();
            $table->string('samagr')->nullable();
            $table->string('village')->nullable();
            $table->string('posto')->nullable();
            $table->string('tehsil')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('gender')->nullable();
            $table->string('work')->nullable();
            $table->string('experience')->nullable();
            $table->string('class')->nullable();
            $table->string('year')->nullable();
            $table->string('marks')->nullable();
            $table->string('max')->nullable();
            $table->string('percentage')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('branch')->nullable();
            $table->string('bank_add')->nullable();
            $table->string('pan')->nullable();
            $table->string('acc_holder')->nullable();
            $table->string('ex_work')->nullable();
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
        Schema::dropIfExists('labours');
    }
}
