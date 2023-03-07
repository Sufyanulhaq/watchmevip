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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('userId')->nullable();
            $table->string('username')->nullable();
            $table->string('fullname')->nullable();
            $table->string('bio')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('genderPronoun')->nullable();
            $table->string('location')->nullable();
            $table->string('webUrl')->nullable();
            $table->string('photo')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
