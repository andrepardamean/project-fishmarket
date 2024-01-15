<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

    <title>fish market</title>
    <link rel="icon" href="{{ asset('images/uhh2.png') }}" height="80" width="90" />

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href=" {{ asset('../css/swiper-bundle.min.css') }} ">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href=" {{ asset('../css/style3.css') }} ">

    <link rel="stylesheet" type="text/css" href="{{ asset('../css/bootstrap.min1.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('../css/font-awesome.css') }}" />

    <link rel="stylesheet" href="{{ asset('../css/style2.css') }}" />
    <link rel="stylesheet" href="{{ asset('../css/footer.css') }}" />
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
        <div class="row">
            <div class="col-11">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('user.home') }}" class="logo ">
                        <img style="margin-left: 50px;" src="{{ asset('images/uhh.png') }}" alt="gambar udang" height="80" width="90" />
                        Fish <em style="font-size:small"> Market</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('user.home') }}">Beranda</a></li>
                        <li><a href="{{ route('user.product') }}">Produk</a></li>
                        <li><a href="{{ route('user.product') }}">Keranjang</a></li>
                        <li><a href="{{ route('user.kontak') }}">Kontak</a></li>
                        <div class="dropdown">
                            <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/user(1).png') }}" alt="gambar udang" height="30" width="30" />
                            </button>
                            <ul class="dropdown-menu" style="border-radius: 15px;">
                                <li><a href="{{ route('user.profil') }}"  class="active">Profil</a></li>
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

    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="cta-content">
                <br>
                <br>

            </div>
        </div>
    </div>
    </div>
    </section>
    <hr>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">

        </div>

        <!-- Content Header (Page header) -->
        <div class="container mt-5">
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">

                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" class="main-breadcrumb">
                            <ol class="breadcrumb">

                                <li class="breadcrumb-item active" aria-current="page">
                                    <h4 style="color: black;"> Profile</h4>
                                </li>
                            </ol>
                        </nav>

                        <!-- /Breadcrumb -->
                        <div class="row gutters-sm">
                            <div class="col-md-5">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0 text-left">ID User</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0 text-left">Nama User<h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0 text-left">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0 text-left">Nomor Hp</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0 text-left">Alamat</h6>
                                            </div>
                                            <div class="col-sm-5 text-secondary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0 text-left">{{ Auth::user()->id }}</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0 text-left">{{ Auth::user()->name }}
                                                    <h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0 text-left">{{ Auth::user()->email }}</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0 text-left">{{ Auth::user()->nomor_hp }}</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0 text-left">{{ Auth::user()->alamat }}</h6>
                                            </div>
                                            <div class="col-sm-5 text-secondary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col"><a class="btn btn-success" href="/user/edituser/{{ $nohp->id }}">Update Profil</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ***** Footer Start ***** -->
    <footer class="site-footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify" style="color: white;">
                        Di website ini, Anda dapat menemukan berbagai jenis ikan dan berbagai
                        jenis udang yang pastinya masih segar, dengan harga yang kompetitif.
                        Sehingga anda juga dapat dengan mudah memesan ikan segar langsung dari nelayan.
                        <br>
                        cari kami di:
                    </p>
                </div>

                <div class=" col-md-6">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('user.product') }}">Produk</a></li>
                        <li><a href="{{ route('user.product') }}">Keranjang</a></li>
                        <li><a href="{{ route('user.kontak') }}">Kontak</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class=" col-sm-2 ">
                    <ul class="social-icons">
                        <li><a class="dribbble" href="https://www.instagram.com/fishmarket_ksi/"><i>
                                    <img src="{{ asset('../images/instagram.png') }}" height="25" width="25">
                                </i></a></li>

                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <p style="color: white;">
                        Copyright © 2023 FISHSTORE WEBSITE
                    </p>
                </div>
            </div>
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