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
        Schema::create('renungans', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // 'nama' in old code
            $table->text('ayat')->nullable();
            $table->text('isi_renungan'); // 'renungan' in old code
            $table->date('tanggal'); // for "renungan of the day" logic
            $table->string('video_url')->nullable(); // 'alamat' in old code (youtube link)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renungans');
    }
};
