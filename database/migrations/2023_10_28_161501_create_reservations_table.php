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
        Schema::create('reservations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer("nbrTotalOfPlaces");
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('film_id');
            $table->timestamps();
            // $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('reservations', function($table)
        {
            $table->foreign('film_id')->references('id')->on('films');
        });
        Schema::table('reservations', function($table)
        {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
