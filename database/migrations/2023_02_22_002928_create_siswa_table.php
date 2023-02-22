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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->timestamps();
        });

        Schema::table('siswa', function (Blueprint $table) {
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('email')->unique();
            $table->string('telepon')->nullable();
            $table->string('agama')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn(['jenis_kelamin', 'tanggal_lahir', 'email', 'telepon', 'agama']);
        });
    }
};
