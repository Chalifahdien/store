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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->integer('total_harga');
            $table->string('nama_pembeli', 100)->nullable();
            $table->enum('metode_bayar', ['Tunai', 'Midtrans']);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('status_pesanan', ['Diproses', 'Menunggu Pembayaran', 'Selesai', 'Dibatalkan'])->default('Diproses');
            $table->string('midtrans_order_id', 100)->nullable();
            $table->string('midtrans_status', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
