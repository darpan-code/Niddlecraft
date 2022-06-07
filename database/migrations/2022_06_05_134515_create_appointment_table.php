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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id('apid');
            $table->integer('user_id');
            $table->string('service', 255)->nullable();
            $table->string('service_type', 255)->nullable();
            $table->string('service_place', 255)->nullable();
            $table->text('design_img')->nullable();
            $table->date('order_date')->nullable();
            $table->string('order_time', 255)->nullable();
            $table->date('delivery_date')->nullable();
            $table->string('order_status', 255)->nullable();
            $table->string('reason', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
};
