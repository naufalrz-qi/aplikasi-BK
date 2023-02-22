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
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->integer('siswa_id');
            $table->date('tanggal');
            $table->time('waktu');
            $table->timestamps();
        });

        Schema::table('presensi', function (Blueprint $table) {
            $table->string('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi');
        Schema::table('presensi', function (Blueprint $table) {
            $table->dropColumn('keterangan');
        });
    }
};
