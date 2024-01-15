<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <title>fish market</title>
  <link rel="icon"  href="{{ asset('images/uhh2.png') }}" height="80" width="90"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	body {
    color: #fff;
    background: #fff;
    font-family: 'Roboto', sans-serif;
}

.form-control {
    min-height: 41px;
    box-shadow: none;
    border-color: #e1e4e5;
}

.form-control:focus {
    border-color: #fff;
}

.form-control,
.btn {
    border-radius: 3px;
}

.signup-form {
    width: 100%; /* Lebar formulir 100% dari wadahnya */
    max-width: 400px; /* Lebar maksimum formulir */
    margin: 0 auto;
    padding: 30px 0;
}

.signup-form form {
    color: #000;
    border-radius: 3px;
    margin-bottom: 15px;
    background: #fff;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #757575;
    padding: 30px;
}

.signup-form h2 {
    color: #333;
    font-weight: bold;
    margin-top: 0;
}

.signup-form hr {
    margin: 0 -30px 20px;
}

.signup-form .form-group {
    margin-bottom: 20px;
}

.signup-form label {
    font-weight: normal;
    font-size: 13px;
}

.signup-form .btn {
    font-size: 16px;
    font-weight: bold;
    background: rgb(5, 144, 230);
    border: none;
    min-width: 140px;
}

.signup-form .btn:hover,
.signup-form .btn:focus {
    background: #3cb094;
    outline: none !important;
}

.signup-form a {
    color: #fff;
    text-decoration: underline;
}

.signup-form a:hover {
    text-decoration: none;
}

.signup-form form a {
    color: rgb(5, 144, 230);
    text-decoration: none;
}

.signup-form form a:hover {
    text-decoration: underline;
}

/* Responsiveness for smaller screens */
@media (max-width: 768px) {
    .signup-form {
        padding: 15px; /* Mengurangi padding pada layar kecil */
    }
}

/* Responsiveness for even smaller screens */
@media (max-width: 576px) {
    .signup-form form {
        padding: 20px; /* Mengurangi padding pada layar sangat kecil */
    }
}

</style>
</head>
<body>
    <div class="signup-form">
        <div class="container mt-3">
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Registrasi Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <form action="{{ route('postregister') }}" method="POST">
            @csrf
            <center>
                <img src="{{ asset('images/uhh2.png') }}" class="img-circle justify-content-center" alt="Gambar malas ngoding" width="80" height="70">
            </center>
            <h2 class="text-center">Register</h2>
            <hr>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="name" required value="{{ old('name') }}">
                <span class="text-danger">
                    @error('name')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" class="form-control" name="email" required value="{{ old('email') }}">
                <span class="text-danger">
                    @error('email')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-1">
                <label class="text-secondary">Pilih Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label>Nomor Hp / Wa</label>
                <input type="text" class="form-control" name="nomor_hp" required>
                <span class="text-danger">
                    @error('nomor_hp')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" required>
                <span class="text-danger">
                    @error('alamat')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <br>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
                <span class="text-danger">
                    @error('password')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" class="form-control" name="password_confirmation" required>
                <span class="text-danger">
                    @error('password_confirmation')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary mt-5">Daftar</button>
            </div>
            <div class="text-center">Sudah Punya Akun ? <a href="{{ route('auth.login') }}">Ayo masuk !</a></div>
        </form>
    </div>
</body>
</html>