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
        Schema::create('tbl_submits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tugas_id');
            $table->unsignedBigInteger('user_id');
            $table->string('file_path');
            $table->string('link_url');
            $table->enum('status', ['dinilai', 'belum dinilai']);
            $table->datetime('create_time');
            $table->datetime('updatetime');

            $table->foreign('tugas_id')->references('id')->on('assignment')->Delete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_submits');
    }
};
