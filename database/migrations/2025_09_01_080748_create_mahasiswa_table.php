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


            $table->integer('userId'); 
            $table->string('prodiId', 12);

            $table->timestamps();

            // Definisi foreign key
            $table->foreign('userId')
                ->references('userId')->on('users')
                ->onDelete('cascade');

            $table->foreign('prodiId')
                ->references('prodiId')->on('programstudi')
                ->onDelete('cascade');
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