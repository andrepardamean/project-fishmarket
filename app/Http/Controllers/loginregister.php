<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Charts\ChartPemesanan;

class loginregister extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function userHome() {
        return view('user.home');
    }

     public function adminHome(ChartPemesanan $chartPemesanan) {
        $chart = $chartPemesanan->build();
        return view('admin.home', compact('chart'));
    }

    public function postRegister(Request $request) { 
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email:dns', 
            'jenisKelamin' => 'required', 
            'password' => 'required|min:8|max:20|confirmed',
            'nomor_hp' => 'required|string',
            'alamat' => 'required|string'
        ]); 
            $user = new User; 
            $user->name = $request->name; 
            $user->email = $request->email; 
            $user->jenis_kelamin = $request->jenisKelamin; 
            $user->password = Hash::make($request->password);  
            $user->nomor_hp = $request->nomor_hp;
            $user->alamat = $request->alamat;

            $user->save(); 
    
        if($user){ 
            return redirect('/auth/login')->with('success', 'Akun berhasil dibuat, silahkan melakukan proses login!');  
        } else { 
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!'); 
        } 
    } 
 
    public function postLogin(Request $request) { 
        $request->validate([ 
            'email' => 'required|email:dns', 
            'password' => 'required|min:8|max:20' 
        ]); 
        
        if(Auth::attempt($request->only('email','password'))) { 
            $user = Auth::user();       
            if ($user->level == 'user') {                 
                return redirect('/user/home');
            } elseif ($user->level == 'admin') {
                return redirect('/admin/home');
            }
        }      
        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!'); 
    } 
 
    public function logout() {         
        Auth::logout();         
        return redirect('/'); 
    } 

}


