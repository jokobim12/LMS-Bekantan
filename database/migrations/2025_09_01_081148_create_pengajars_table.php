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
        Schema::create('pengajars', function (Blueprint $table) {
            $table->string('pengajarId', 12)->primary();
            $table->string('nip', 16)->unique();
            $table->string('nama', 250);
            $table->string('noHp', 15);
            $table->text('alamat');
            $table->string('pendidikanTerakhir', 50);
            $table->string('bidangIlmu', 50);

            // Kolom FK harus nullable untuk onDelete('set null')
            $table->unsignedInteger('userId')->nullable();

            $table->foreign('userId')
                ->references('userId')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajars');
    }
};
