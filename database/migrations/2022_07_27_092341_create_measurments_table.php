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
        Schema::create('measurments', function (Blueprint $table) {
            $table->id();
            $table->string('collar')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('chest')->nullable();
            $table->string('sleeves')->nullable();
            $table->string('waist')->nullable();
            $table->string('shirt_length')->nullable();
            $table->string('paint_length')->nullable();
            $table->string('bottom')->nullable();
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
        Schema::dropIfExists('measurments');
    }
};
