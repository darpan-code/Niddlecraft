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
        Schema::create('customers_queries', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('subject', 255)->nullable();
            $table->text('message')->nullable();
            $table->string('status', 255)->nullable();
            $table->date('date')->nullable();
            $table->string('time', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_queries');
    }
};
