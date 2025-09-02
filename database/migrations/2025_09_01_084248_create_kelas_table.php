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
        Schema::create('kelas', function (Blueprint $table) {
                $table->string('kelasId', 12)->primary();

                $table->string('nama', 100);
                $table->year('tahunAjaran');

                $table->timestamps();

                // FK ke pengajar
                $table->string('pengajarId', 12);

                // FK ke matakuliah
                $table->string('mkId', 12);

                // Foreign key definisi
                $table->foreign('pengajarId')
                    ->references('pengajarId')
                    ->on('pengajars')
                    ->onDelete('cascade');

                $table->foreign('mkId')
                    ->references('mkId')
                    ->on('matakuliah')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};