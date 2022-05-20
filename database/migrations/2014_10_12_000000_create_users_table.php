<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // User Personal information table
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('phone_number', 255);
            $table->string('email', 255);
            $table->string('gender', 255);
            $table->date('dob');
            $table->text('img');
            $table->text('password');
        });

        // User Shipping address table
        Schema::create('user_address', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('address');
            $table->text('landmark');
            $table->string('city', 255);
            $table->string('district', 255);
            $table->integer('pincode');
            $table->string('state', 255);
        });

        // User Body measurements table
        Schema::create('user_body_measurements', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('shoulder', 100);
            $table->string('chest', 100);
            $table->string('bust', 100);
            $table->string('underBust', 100);
            $table->string('waist', 100);
            $table->string('wearingWaist', 100);
            $table->string('hip', 100);
            $table->string('thigh', 100);
            $table->string('upperArm', 100);
            $table->string('inseam', 100);
            $table->string('outseam', 100);
            $table->string('totalRise', 100);
            $table->string('hipAtCrotch', 100);
            $table->string('calf', 100);
            $table->string('bustPoint', 100);
            $table->string('knee', 100);
            $table->string('hpsToWaist', 100);
            $table->string('frontHip', 100);
            $table->string('backHip', 100);
            $table->string('frontRise', 100);
            $table->string('backRise', 100);
            $table->string('height', 100);
            $table->string('waistToKnee', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profile');
        Schema::dropIfExists('user_address');
        Schema::dropIfExists('user_body_measurements');
    }
};
