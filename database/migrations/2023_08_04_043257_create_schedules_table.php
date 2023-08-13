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
            $table->integer('WorkoutId');
            $table->integer('Couch');
            $table->enum('WeekDay',
                ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс']);
            $table->boolean('Active');
            $table->integer('ScheduleTimeId');
            $table->timestamps();
            $table->foreign('WorkoutId')
                ->references('id')
                ->on('workouts')
                ->onDelete('cascade');
            $table->foreign('Couch')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('ScheduleTimeId')
                ->references('id')
                ->on('schedule_times')
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
