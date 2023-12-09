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
        Schema::create('pay_info_models', function (Blueprint $table) {
            $table->id();
            $table->string('PayId')
                ->unique()
                ->nullable(false);
            $table->string('StatusPay')
                ->nullable(false);
            $table->string('DatePay')
                ->nullable(false);
            $table->string('Description')
                ->nullable(false);
            $table->float('ValuePay')
                ->nullable(false);
            $table->timestamps();
            $table->foreign('UserId')
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
        Schema::dropIfExists('pay_info_models');
    }
};
