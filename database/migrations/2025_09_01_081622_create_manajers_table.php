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
        Schema::create('manajers', function (Blueprint $table) {
            $table->string('managerId', 12)->primary();
            $table->string('nik', 16);
            $table->string('nama', 250);
            $table->string('noHp', 12);
            $table->text('alamat');
            $table->string('pendidikanTerakhir', 50)->nullable();
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manajers');
    }
};
