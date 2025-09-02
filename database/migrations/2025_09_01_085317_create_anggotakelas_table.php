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
        Schema::create('anggotakelas', function (Blueprint $table) {
            $table->string('anggotaKelasId', 12)->primary();

            $table->dateTime('createdAt')->useCurrent();
            $table->timestamps();

            // FK ke users
            $table->integer('userId');

            // FK ke kelas
            $table->string('kelasId', 12)->nullable();

            // Definisi FK
            $table->foreign('userId')
                ->references('userId')->on('users')
                ->onDelete('cascade');

            $table->foreign('kelasId')
                ->references('kelasId')->on('kelas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotakelas');
    }
};