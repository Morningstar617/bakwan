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
            $table->id('uid')->primary();
            $table->string('name');
<<<<<<< HEAD
            $table->integer('uid');
=======
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
            $table->string('password');
            $table->enum('role', ['admin','mahasiswa','dosen','univ']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('users');
=======
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
    }
};
