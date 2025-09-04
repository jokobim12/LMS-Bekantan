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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('mhsId', 12)->primary();
            $table->string('nim', 10);
            $table->string('namaLengkap', 250);
            $table->string('noHp');
            $table->text('alamat');
            $table->string('jenisKelamin', 10);
            $table->date('tanggalLahir')->nullable();
            $table->string('tempatLahir', 100)->nullable();
            $table->year('angkatan')->nullable();

            // Kolom prodiId nullable (untuk onDelete set null)
            $table->string('prodiId', 12)->nullable();

            $table->timestamps();

            // Kolom userId nullable dan unsigned (untuk onDelete set null dan FK ke users)
            $table->integer('userId')->unsigned()->nullable();

            // Foreign key ke tabel users
            $table->foreign('userId')
                ->references('userId')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');

            // Foreign key ke tabel programstudi (pastikan struktur & tipe sama di tabel programstudi)
            $table->foreign('prodiId')
                ->references('prodiId')
                ->on('programstudi')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
