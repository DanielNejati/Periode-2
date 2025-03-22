<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('festivals', function (Blueprint $table) {
            $table->unsignedBigInteger('festival_id')->autoIncrement()->primary();
            $table->string('name');
            $table->string('duration');
            $table->string('location');
            $table->string('festival_type');
            $table->string('picture')->nullable();
            $table->double('price');
            $table->timestamps();
        });

        Schema::create('buses', function (Blueprint $table) {
            $table->unsignedBigInteger('bus_id')->autoIncrement()->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('festival_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('festival_id')->references('festival_id')->on('festivals')->onDelete('cascade');
        });

        Schema::create('busrides', function (Blueprint $table) {
            $table->unsignedBigInteger('bus_ride_id')->autoIncrement()->primary();
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('festival_id');
            $table->double('duration');
            $table->time('departure_time');
            $table->string('departure');
            $table->string('location');
            $table->date('date');
            $table->timestamps();

            $table->foreign('bus_id')->references('bus_id')->on('buses')->onDelete('cascade');
            $table->foreign('festival_id')->references('festival_id')->on('festivals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('busrides');
        Schema::dropIfExists('buses');
        Schema::dropIfExists('festivals');
    }
};
