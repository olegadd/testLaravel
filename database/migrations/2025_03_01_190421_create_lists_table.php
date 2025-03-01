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
        Schema::create('lists', function (Blueprint $table) {
            $table->id('list_id');

            $table->foreignId('route_id')->references('route_id')->on('routes')->onDelete('cascade');

            $table->foreignId('bus_id')->references('bus_id')->on('buses')->onDelete('cascade');

            $table->date('date');
            $table->integer('trips_perfomed');

            $table->foreignId('driver_id')->references('driver_id')->on('drivers')->onDelete('cascade');

            $table->integer('conductor_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lists');
    }
};
