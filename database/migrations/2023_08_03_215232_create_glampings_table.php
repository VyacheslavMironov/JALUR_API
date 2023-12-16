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
        Schema::create('glampings', function (Blueprint $table) {
            $table->id();
            $table->string('Name')
                ->nullable(false);
            $table->string('Description', 1000);
            $table->string('Image')
                ->nullable(false);
            $table->date('Date');
            $table->time('Time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('glampings');
    }
};
