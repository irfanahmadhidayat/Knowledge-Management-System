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
        Schema::create('tbl_moduls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id');
            $table->unsignedBigInteger('user_id');
            $table->string('judul_modul');
            $table->string('deskripsi');
            $table->string('gambar');
            $table->string('pdf');
            $table->string('link_url');
            $table->timestamps();
            $table->string('archive');

            $table->foreign('materi_id')->references('id')->on('tbl_materials')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_moduls');
    }
};
