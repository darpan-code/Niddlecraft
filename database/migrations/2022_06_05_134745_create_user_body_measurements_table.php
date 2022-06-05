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
        // User Body measurements table
        Schema::create('user_body_measurements', function (Blueprint $table) {
            $table->id('mid');
            $table->integer('user_id');
            $table->string('shoulder', 100)->nullable();
            $table->string('chest', 100)->nullable();
            $table->string('bust', 100)->nullable();
            $table->string('underBust', 100)->nullable();
            $table->string('waist', 100)->nullable();
            $table->string('wearingWaist', 100)->nullable();
            $table->string('hip', 100)->nullable();
            $table->string('thigh', 100)->nullable();
            $table->string('upperArm', 100)->nullable();
            $table->string('inseam', 100)->nullable();
            $table->string('outseam', 100)->nullable();
            $table->string('totalRise', 100)->nullable();
            $table->string('hipAtCrotch', 100)->nullable();
            $table->string('calf', 100)->nullable();
            $table->string('bustPoint', 100)->nullable();
            $table->string('knee', 100)->nullable();
            $table->string('hpsToWaist', 100)->nullable();
            $table->string('frontHip', 100)->nullable();
            $table->string('backHip', 100)->nullable();
            $table->string('frontRise', 100)->nullable();
            $table->string('backRise', 100)->nullable();
            $table->string('height', 100)->nullable();
            $table->string('waistToKnee', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_body_measurements');
    }
};
