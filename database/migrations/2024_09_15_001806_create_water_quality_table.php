<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterQualityTable extends Migration
{
    public function up()
    {
        Schema::create('water_quality', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('timestamp')->useCurrent();
            $table->string('location');
            $table->decimal('ph_level', 3, 2);
            $table->decimal('turbidity', 5, 2);
            $table->text('contaminants')->nullable();
            $table->unsignedBigInteger('sensor_id')->nullable();
            $table->unsignedBigInteger('tank_id')->nullable();
            $table->foreign('sensor_id')->references('id')->on('sensors')->onDelete('set null');
            $table->foreign('tank_id')->references('id')->on('tanks')->onDelete('set null');
            $table->foreignId('tank_id')->constrained()->onDelete('cascade');
            $table->decimal('pH', 4, 2);
            $table->decimal('turbidity', 5, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('water_quality');
    }
};
