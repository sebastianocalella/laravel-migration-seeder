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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',60);
            $table->string('departure_station',100);
            $table->string('arrival_station',100);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code',15);
            $table->tinyInteger('wagons_number');
            $table->boolean('is_on_time');
            $table->boolean('is_deleted');
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
        Schema::dropIfExists('trains');
    }
};
