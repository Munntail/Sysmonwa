<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterPredictionTable extends Migration
{
    public function up()
    {
        Schema::create('water_prediction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('timestamp')->useCurrent();
            $table->unsignedBigInteger('tank_id')->nullable();
            $table->decimal('predicted_consumption', 10, 2)->nullable();
            $table->text('predicted_quality')->nullable();
            $table->timestamp('predicted_empty_time')->nullable();
            $table->foreign('tank_id')->references('id')->on('tanks')->onDelete('set null');
            $table->foreignId('tank_id')->constrained()->onDelete('cascade');
            $table->decimal('predicted_consumption', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('water_prediction');
    }
};
