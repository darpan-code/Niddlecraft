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
        // User Shipping address table
        Schema::create('user_address', function (Blueprint $table) {
            $table->id('aid');
            $table->integer('user_id');
            $table->text('address')->nullable();
            $table->text('landmark')->nullable();
            $table->string('city', 255)->nullable();
            $table->string('district', 255)->nullable();
            $table->string('pincode', 255)->nullable();
            $table->string('state', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_address');
    }
};
