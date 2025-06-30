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
        Schema::create('log_stok', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');
            $table->enum('tipe', ['masuk', 'keluar']);
            $table->integer('jumlah');
            $table->text('keterangan')->nullable();
            $table->dateTime('tanggal')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_stok');
    }
};
