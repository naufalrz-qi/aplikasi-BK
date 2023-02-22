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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('jabatan');
            $table->timestamps();
        });

        Schema::table('pegawai', function (Blueprint $table) {
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('email')->unique();
            $table->string('telepon')->nullable();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
        Schema::table('pegawai', function (Blueprint $table) {
            $table->dropColumn(['jenis_kelamin', 'tanggal_lahir', 'email', 'telepon']);
        });
    }
};
