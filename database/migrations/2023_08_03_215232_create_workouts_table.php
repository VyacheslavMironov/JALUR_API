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
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->integer('TypeWorkoutId');
            $table->string('Name');
            $table->string('Image');
            $table->text('Description');
            $table->timestamps();

            $table->foreign('TypeWorkoutId')
                ->references('id')
                ->on('type_workouts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workouts');
    }
};
