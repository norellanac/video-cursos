<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsDetailsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips_departs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('maps_location')->nullable();
            $table->integer('maps_text')->nullable();
            $table->boolean('bookmark');
            $table->timestamp('date', 0);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')->on('cities');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users');

        });

        Schema::create('trips_arrives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('maps_location')->nullable();
            $table->integer('maps_text')->nullable();
            $table->boolean('bookmark');
            $table->timestamp('date', 0);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')->on('cities');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users');

        });

        Schema::create('future_trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('current_location')->nullable();
            $table->integer('spaces');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('p_depart_id');
            $table->foreign('p_depart_id')
                ->references('id')->on('trips_departs');
            $table->unsignedBigInteger('p_arrive_id');
            $table->foreign('p_arrive_id')
                ->references('id')->on('trips_arrives');
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')
                ->references('id')->on('users');
        });
        Schema::create('past_trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('current_location')->nullable();
            $table->integer('spaces');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('p_depart_id');
            $table->foreign('p_depart_id')
                ->references('id')->on('trips_departs');
            $table->unsignedBigInteger('p_arrive_id');
            $table->foreign('p_arrive_id')
                ->references('id')->on('trips_arrives');
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')
                ->references('id')->on('users');
        });

        Schema::create('stops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('maps_location')->nullable();
            $table->integer('maps_text')->nullable();
            $table->boolean('bookmark');
            $table->timestamp('date', 0);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')->on('cities');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->unsignedBigInteger('trip_id');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stops');
        Schema::dropIfExists('future_trips');
        Schema::dropIfExists('past_trips');
        Schema::dropIfExists('trips_departs');
        Schema::dropIfExists('trips_arrives');

    }
}
