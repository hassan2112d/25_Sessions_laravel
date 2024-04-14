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
                $table->id();
                $table->string('name', 30);
                $table->integer('age');
                $table->string('email', 40)->nullable()->unique();
                $table->string('password');
                $table->string('address')->nullable();
                $table->string('city')->nullable();
                $table->string('phone')->nullable();
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
