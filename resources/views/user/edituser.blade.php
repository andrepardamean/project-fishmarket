<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

     <title>Fish market</title>
    <link rel="icon"  href="{{ asset('images/uhh2.png') }}" height="80" width="90"/>

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href=" {{ asset('../css/swiper-bundle.min.css') }} ">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href=" {{ asset('../css/style3.css') }} ">

    <link rel="stylesheet" type="text/css" href="{{ asset('../css/bootstrap.min1.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('../css/font-awesome.css') }}" />

    <link rel="stylesheet" href="{{ asset('../css/style2.css') }}" />
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('user.home') }}" class="logo">Fish <em> Market</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('user.home') }}">Beranda</a></li>
                            <li><a href="{{ route('user.product') }}">Produk</a></li>
                            <li><a href="{{ route('user.product') }}">Keranjang</a></li>
                            <li><a href="{{ route('user.kontak') }}">Kontak</a></li>
                            <div class="dropdown">
                                <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="19" width="25" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ffffff" d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('user.profil') }}">Profil</a></li>
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <section class="section section-bg" id="call-to-action">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">

            </div>

            <!-- Content Header (Page header) -->
            <div class="container">
        <div class="container mt-3">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong>{{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Update Data User</h5>
                        <form action="/postedituser/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf   
                        <br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nama</label>
                                <input type="text" class="form-control border border-secondary form-control" name="name" required value="{{ $data->name }}">
                                <span class="text-danger"> 
                                    @error('name')
                                        {{ $message }}
                                    @enderror 
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">email</label>
                                <input type="email" class="form-control border border-secondary form-control" name="email" required value="{{ $data->email }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nomor Hp</label>
                                <input type="text" class="form-control border border-secondary form-control" name="nomor_hp" required value="{{ $data->nomor_hp }}">
                                <span class="text-danger">
                                    @error('nomor_hp')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Alamat</label>
                                <input type="text" class="form-control border border-secondary form-control" name="alamat" required value="{{ $data->alamat }}">
                                <span class="text-danger">
                                    @error('alamat')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <button type="submit" class="btn btn-success mt-5">Update Data Ikan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>

        </div>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2024 Fish Market</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->

    <script src="{{ asset('../js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('../js/popper.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!--=============== SWIPER JS ===============-->
    <script src=" {{ asset('../js/swiper-bundle.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src=" {{ asset('../js/main.js') }}"></script>

    <!-- Plugins -->
    <script src=" {{ asset('../js/scrollreveal.min.js') }}"></script>
    <script src=" {{ asset('../js/waypoints.min.js') }}"></script>
    <script src=" {{ asset('../js/jquery.counterup.min.js') }}"></script>
    <script src=" {{ asset('../js/imgfix.min.js') }}"></script>
    <script src=" {{ asset('../js/mixitup.js') }}"></script>
    <script src=" {{ asset('../js/accordions.js') }}"></script>

    <!-- Global Init -->
    <script src=" {{ asset('../js/custom.js') }}"></script>
</body>

</html>