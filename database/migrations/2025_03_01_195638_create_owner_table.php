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
            $table->string('id_pp', 20)->nullable();
            $table->string('id_p', 20)->nullable();
            $table->foreign('id_pp')->references('id_pp')->on('phone_owner')->onDelete('cascade');
            $table->foreign('id_p')->references('id_p')->on('address_owner')->onDelete('cascade');
            $table->string('FIO', 50);
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
