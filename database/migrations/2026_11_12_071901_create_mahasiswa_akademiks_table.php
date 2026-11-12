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
        Schema::create('mahasiswa_akademiks', function (Blueprint $table) {
    $table->string('nim', 11)->primary();
    $table->string('kd_jurusan', 10);
    $table->string('kd_ruang', 10);
    $table->string('nip', 10);
    $table->string('nama_mahasiswa', 35);
    $table->char('jenis_kelamin', 1);
    $table->integer('angkatan');
    $table->string('alamat', 50);
    $table->string('email', 30);
    $table->string('telepon', 12);
    $table->timestamps();

    $table->foreign('kd_jurusan')->references('kd_jurusan')->on('jurusans')->onDelete('cascade');
    $table->foreign('kd_ruang')->references('kd_ruang')->on('ruang_kuliahs')->onDelete('cascade');
    $table->foreign('nip')->references('nip')->on('dosens')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_akademiks');
    }
};
