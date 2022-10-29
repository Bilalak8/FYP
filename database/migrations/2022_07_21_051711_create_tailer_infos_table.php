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
        Schema::create('tailer_infos', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name')->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('suit_price')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('services')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('add_tailer_id');
            $table->foreign('add_tailer_id')->references('id')->on('add_tailers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tailer_infos');
    }
};
