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

            $table->string('kelasId', 12)->nullable();

            $table->unsignedInteger('userId')->nullable();
            $table->foreign('userId')
                ->references('userId')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');


            $table->foreign('kelasId')
                ->references('kelasId')
                ->on('kelas')
                ->onUpdate('cascade')
                ->onDelete('set null');
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
