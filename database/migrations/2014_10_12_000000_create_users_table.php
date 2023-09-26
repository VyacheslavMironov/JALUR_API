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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Image')
                ->nullable()
                ->unique();
            $table->text('Description')
                ->nullable();
            $table->float('Weight')
                ->nullable();
            $table->float('Height')
                ->nullable();
            $table->integer('Age')
                ->nullable();
            $table->enum('Gender', ['Мужчина', 'Женщина'])
                ->default('Женщина')
                ->nullable();
            $table->string('Phone')
                ->nullable()
                ->unique();
            $table->enum('Role', ['Администратор', 'Тренер', 'Клиент'])
                ->default('Клиент')
                ->nullable();
            $table->string('Password')
                ->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
