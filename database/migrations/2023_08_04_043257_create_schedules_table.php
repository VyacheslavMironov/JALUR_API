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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('TypeWorkoutId');
            $table->integer('Couch');
            $table->enum('WeekDay', 
                ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс']);
            $table->date('StartDate');
            $table->time('StartTime');
            $table->time('EndTime');
            $table->timestamps();
            $table->foreign('TypeWorkoutId')
                ->references('id')
                ->on('type_workouts')
                ->onDelete('cascade');
            $table->foreign('Couch')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
