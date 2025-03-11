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
        Schema::create('tbl_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('modul_id');
            $table->string('judul_tugas');
            $table->text('deskripsi');
            $table->dateTime('deadline');
            $table->timestamps();
            $table->string('archive');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('modul_id')->references('id')->on('tbl_moduls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_assignments');
    }
};
