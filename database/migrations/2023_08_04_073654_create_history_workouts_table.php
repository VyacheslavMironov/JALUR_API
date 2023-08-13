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
        Schema::create('history_workouts', function (Blueprint $table) {
            $table->id();
            $table->integer('TypeWorkoutId');
            $table->integer('WorkoutId');
            $table->integer('UserId');
            $table->boolean('Active');
            $table->integer('CountFreezingDay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_workouts');
    }
};
