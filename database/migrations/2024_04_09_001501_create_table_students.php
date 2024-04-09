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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name')->nullable();
            $table->string('lastname');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('address');
            $table->timestamp('birthdate');
            $table->boolean('status');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
