<?php

namespace App\Http\Controllers;

use App\Charts\ChartPeminjaman;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{ 
    public function user(Request $request) {
        $search = $request->input('search');
        $data = User::where(function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })->paginate(5);
        return view('admin.user', compact('data'));
    }
    public function deleteuser($id)
    {
        $user = User::find($id);
        $filepath = 'id/' . $user->id;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }
        $user->delete();
        if ($user) {
            return back()->with('success', 'User berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus User!');
        }
    }

    public function produk() {
        return view('admin.produk');
    }

    public function adminProduk(Request $request)
    {
        $search = $request->input('search');
        $data = produk::where(function ($query) use ($search) {
            $query->where('nama', 'LIKE', '%' . $search . '%');
        })->paginate(100);
        return view('admin.produk', compact('data'));
    }
     public function tambahProduk()
    {
        return view('admin.tambahProduk');
    }

    public function postTambahProduk(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tanggal_penangkapan' => 'required|date',
            'stok' => 'required',
            'gambar' => 'required|image|max:5120',
            
        ]);
        $produk = new produk;
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->tanggal_penangkapan = $request->tanggal_penangkapan;
        $produk->stok = $request->stok;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $produk->gambar = $filename;
        }
        $produk->save();
        if ($produk) {
            return back()->with('success', 'Produk baru berhasil ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }
    }
    public function editproduk($id)
    {
        $data = produk::find($id);
        return view('admin.editProduk', ['data' => $data]);
    } 
    public function postEditProduk(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tanggal_penangkapan' => 'required|date',
            'stok' => 'required',
            'gambar' => 'required|image|max:5120',
        ]);
        $produk = produk::find($id);
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->tanggal_penangkapan = $request->tanggal_penangkapan;
        $produk->stok = $request->stok;
        if ($request->hasFile('gambar')) {
            $filepath = 'images/' . $produk->gambar;
            if (File::exists($filepath)) {
                File::delete($filepath);
            }
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/', $filename);
            $produk->gambar = $filename;
        }
        $produk->save();
        if ($produk) {
            return back()->with('success', 'Produk Ikan berhasil diupdate!');
        } else {
            return back()->with('failed', 'Produk Ikan gagal diupdate!');
        }
    }
    public function deleteproduk($id)
    {
        $produk = produk::find($id);
        $filepath = 'images/' . $produk->gambar;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }
        $produk->delete();
        if ($produk) {
            return back()->with('success', 'Data Ikan berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data buku!');
        }
    }

    function pemesanan() {
        $data =  Pesanan::all();
        return view('admin.pemesanan', compact('data'));
    }

    public function adminpemesanan(Request $request)
    {
        $search = $request->input('search');
        $data = Pesanan::where(function ($query) use ($search) {
            $query->where('nomor_hp', 'LIKE', '%' . $search . '%');
        })->paginate(100);
        return view('admin.pemesanan', compact('data'));
    }

     public function deletepesanan($id)
    {
        $pesanan = pesanan::find($id);
        $filepath = 'id/' . $pesanan->id;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }
        $pesanan->delete();
        if ($pesanan) {
            return back()->with('success', 'Data Ikan berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data buku!');
        }
    }

    public function editpesanan($id)
    {
        $data = pesanan::find($id);
        return view('admin.editpesanan', ['data' => $data]);
    } 
    public function posteditpesanan(Request $request, $id)
    {
        $request->validate([
            
            'status' => 'required',
        ]);
        $pesanan = pesanan::find($id);
        
        $pesanan->status = $request->status;
        
        $pesanan->save();
        if ($pesanan) {
            return back()->with('success', 'pesanan Ikan berhasil diupdate!');
        } else {
            return back()->with('failed', 'pesanan Ikan gagal diupdate!');
        }

    }
    
    

}
