<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\Pesanan;
use App\Models\User;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class navbar extends Controller
{
    public function product() {
        $data['products'] = produk::all(); // Mengambil semua data produk dari tabel 'produk'
        return view('user.product', $data); // Mengirim data ke view 'user.product'
    }

   // app/Http/Controllers/Navbar.php
    // navbar.php
    public function keranjang($id)
    {
        // Ambil satu produk berdasarkan ID
        Log::info("ID: " . $id);
        $produk = Produk::find($id);
        // Pastikan $produk tidak null sebelum melewatkan ke view
        if (!$produk) {
            // Lakukan penanganan kesalahan, misalnya redirect atau tampilkan pesan
            return redirect()->route('user.keranjang')->with('error', 'Produk tidak ditemukan.');
        }

        return view('user.keranjang', compact('produk'));
    }

    public function simpanPesanan(Request $request)
    {
        // Validasi data formulir jika diperlukan
        $request->validate([
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

        $produk = Produk::find($request->id_produk);

        if ($produk) {
            $produk->stok -= $request->Jumlahpesanan;
            $produk->save();
        } else {
            // Lakukan penanganan kesalahan jika produk tidak ditemukan
            return redirect()->route('user.keranjang')->with('error', 'Produk tidak ditemukan.');
        }

        // Redirect atau kirim respons ke client sesuai kebutuhan
        return redirect()->route('user.keranjang', ['id' => $request->id_produk]);
        
    }

    public function pesanProduk(Request $request, $id)
    {
        $produk = Produk::where('id', $id)->get();
        // Validasi input jika diperlukan
        $request->validate([
            'Jumlahpesanan' => 'required|numeric|min:1', // Sesuaikan dengan aturan validasi Anda
        ]);

        // $id adalah id produk yang ingin diambil harganya

        if ($produk) {

        // Ambil harga produk dari database atau sumber lainnya
        $harga = $produk->harga; // Gantilah dengan cara sesuai pengambilan harga produk

        // Ambil jumlah pesanan dari input form
        $Jumlahpesanan = $request->input('Jumlahpesanan');

        // Hitung total harga
        $totalHarga = $harga * $Jumlahpesanan;

        // Sisipkan total harga ke dalam data pesanan sebelum disimpan
        $dataPesanan = [
            'harga' => $harga,
            'Jumlahpesanan' => $Jumlahpesanan,
            'total_harga' => $totalHarga,
            // Informasi lainnya...
        ];

        // Simpan data pesanan ke dalam database atau tempat penyimpanan lainnya
        // ...

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('user.home')->with('success', 'Pesanan berhasil ditempatkan.');
    }}

     public function kontak() {
        return view('user.kontak');
    }

    public function kontak1(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ];

    // Kirim email
    Mail::to('andrepardamean002@email.com')->send(new ContactMail($data));

    // Redirect atau kirim respons sukses
    return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
    public function profil() {
        $nohp = Auth::user();
        
        return view('user.profil', compact('nohp'));
    }
    public function edituser($id)
    {
        $data = User::find($id);
        return view('user.edituser', ['data' => $data]);
    } 
    public function postedituser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' =>'required|email',
            'nomor_hp' => 'required',
            'alamat' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nomor_hp = $request->nomor_hp;
        $user->alamat = $request->alamat;
        $user->save();
        if ($user) {
            return back()->with('success', 'Data User berhasil diupdate!');
        } else {
            return back()->with('failed', 'Data User gagal diupdate!');
        }
    }

}