<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterLevelTable extends Migration
{
    public function up()
    {
        Schema::create('water_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('timestamp')->useCurrent();
            $table->string('location');
            $table->decimal('level', 5, 2);
            $table->string('unit', 50)->default('meters');
            $table->unsignedBigInteger('sensor_id')->nullable();
            $table->unsignedBigInteger('tank_id')->nullable();
            $table->foreign('sensor_id')->references('id')->on('sensors')->onDelete('set null');
            $table->foreign('tank_id')->references('id')->on('tanks')->onDelete('set null');
            $table->foreignId('tank_id')->constrained()->onDelete('cascade');
            $table->decimal('level', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('water_level');
    }
};
