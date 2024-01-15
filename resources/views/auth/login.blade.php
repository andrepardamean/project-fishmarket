<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fish market</title>
    <link rel="icon"  href="{{ asset('images/uhh2.png') }}" height="80" width="90"/>
  </head>
<div class="container mt-3">
    @if (Session::get('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Login Gagal!</strong> {{ Session::get('failed') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
      <strong>Berhasil!</strong> {{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
  </div>
  <br>
<div class="wrapper">
  <link rel="stylesheet" href="{{ asset('../css/loginstyle.css') }}" />
  <div class="logo">
    <img src="{{ asset('images/uhh.png') }}" alt="">
  </div>
  <br>
  <center>
    <div class="text-center mt-4 name">
      Fish Market
    </div>
  </center>
  <br>
  <form action="{{ route('postlogin') }}" method="POST" class="p-3 mt-5">
    @csrf
    <div class="form-field d-flex align-items-center">
      <span class="far fa-user"></span>
      <input type="email" placeholder="Email" name="email" required value="{{ old('email') }}">
      <span class="text-danger">
        @error('email')
        {{ $message }}
        @enderror
      </span>
    </div>
    <div class="form-field d-flex align-items-center">
      <span class="fas fa-key"></span>
      <input type="password" name="password" placeholder="Password">
      <span class="text-danger">
        @error('password')
        {{ $message }}
        @enderror
      </span>
    </div>
    <button type="submit" class="btn mt-3">Masuk</button>
  </form>
  <br>
  <div class="text-center fs-6">
    <center>
      <p class="fs-2">Anda belum memiliki akun ?</p>
    </center>
    <center>
      <a href="{{ route('auth.register') }}"><b class="fs-2" style="font-size:large";>Daftar</b></a>
    </center>
  </div>
</div>
