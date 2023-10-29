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
        Schema::create('films', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id()->unsigned();
            $table->string('title');
            $table->text('decription');
            $table->string('category');
            $table->string('image');
            $table->float('rating');
            $table->integer('date');
            $table->string('dayOfTheWeek');
            $table->integer('place');
            $table->string('salle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
