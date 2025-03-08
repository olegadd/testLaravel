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
        Schema::create('address', function (Blueprint $table) {
            $table->foreignId('id_a')->references('id_a')->on('address_owner')->onDelete('cascade');
            $table->string('country', 20);
            $table->string('city', 20);
            $table->string('street', 30);
            $table->integer('house');
            $table->string('building', 10);
            $table->integer('appartment');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
