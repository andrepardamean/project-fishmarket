<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('alamat')->nullable();
            $table->string('pesanan');
            $table->float('Jumlahpesanan');
            $table->date('tanggal_pemesanan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};
