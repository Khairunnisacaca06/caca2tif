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
        Schema::create('prasyarats', function (Blueprint $table) {
    $table->string('id_prasyarat', 10)->primary();
    $table->string('mk_prasyarat', 35);
    $table->integer('semester');
    $table->integer('jumlah_sks');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prasyarats');
    }
};
