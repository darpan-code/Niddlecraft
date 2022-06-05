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
            $table->id('uid');
            $table->string('name', 255)->nullable();
            $table->string('phone_number', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->date('dob')->nullable();
            $table->text('img')->nullable();
            $table->text('password')->nullable();
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
    }
};
