<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;


class PemesananController extends Controller
{
    public function simpanPesanan(Request $request)
    
{
    // Validasi data formulir jika diperlukan
    $request->validate([
        // Sesuaikan dengan kebutuhan validasi Anda
        'nama' => 'required|string',
        'phone' => 'required|numeric',
        'email' => 'required|email',
        'alamat' => 'required|string',
        'pesanan' => 'required|string',
        'Jumlahpesanan' => 'required|numeric',
        'tanggal_pemesanan' => 'required|date',
    ]);

    // Simpan data ke dalam database
    $pesanan = new Pesanan;
    $pesanan->nama = $request->nama;
    $pesanan->phone = $request->phone;
    $pesanan->email = $request->email;
    $pesanan->alamat = $request->alamat;
    $pesanan->pesanan = $request->pesanan;
    $pesanan->Jumlahpesanan = $request->Jumlahpesanan;
    $pesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
    $pesanan->status = 'Belum Dikirim'; 

    // Simpan data ke dalam database
    $pesanan->save();

    // Redirect atau kirim respons ke client sesuai kebutuhan
    return redirect()->route('user.keranjang');
}
}
