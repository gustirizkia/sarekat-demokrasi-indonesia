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
        Schema::create('kaders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->string("nomor_telepon")->nullable();
            $table->string("foto_diri");
            $table->string("foto_ktp");
            $table->string("provinsi")->nullable();
            $table->string("kota")->nullable();
            $table->string("kecamatan")->nullable();
            $table->string("desa")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kaders');
    }
};
