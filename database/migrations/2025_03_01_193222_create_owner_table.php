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
        Schema::create('owner', function (Blueprint $table) {
            $table->foreignId('id_p')->references('id_p')->on('phone_owner')->onDelete('cascade');
            $table->foreignId('id_p')->references('id_p')->on('address_owner')->onDelete('cascade');
            $table->string('FIO', 100);
            $table->date('birthday');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner');
    }
};
