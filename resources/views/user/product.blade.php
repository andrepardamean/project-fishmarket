<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

     <title>fish market</title>
    <link rel="icon"  href="{{ asset('images/uhh2.png') }}" height="80" width="90"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('../css/bootstrap.min1.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('../css/font-awesome.css') }}" />

    <link rel="stylesheet" href="{{ asset('../css/style1.css') }}" />
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
                            <img  src="{{ asset('images/uhh.png') }}" alt="gambar udang" height="80" width="90" />
                            Fish <em style="font-size:small"> Market</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('user.home') }}">Beranda</a></li>
                            <li><a href="{{ route('user.product') }}" class="active">Produk</a></li>
                            <li><a href="{{ route('user.product') }}">Keranjang</a></li>
                            <li><a href="{{ route('user.kontak') }}">Kontak</a></li>
                             <div class="dropdown">
                                <button class="btn  " type="button" data-bs-toggle="dropdown"aria-expanded="false"  >
                                  <img src="{{ asset('images/user(1).png') }}" alt="gambar udang" height="30" width="30" />
                                </button>
                                <ul class="dropdown-menu" style="border-radius: 15px;">
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

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url('{{ asset('images/ikan.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br />
                        <br />
                        <h2>Macam-macam <em>Penjualan</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br />
            <br />

            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('images/' . $product->gambar) }}" alt="" height="200" />
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Rp</sup>{{ $product->harga }}
                            </span>

                            <h4>{{ $product->nama }}</h4>

                            <p>Tanggal Penangkapan : {{ $product->tanggal_penangkapan }}</p>

                            <p>Stok : {{ $product->stok }} Kg</p>
                            <form action="/user/keranjang/{{ $product->id }}" method="GET">
                                @csrf
                                <li><a href="/user/keranjang/{{ $product->id }}">+ Pesan</a></li>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

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
              <li><a class="dribbble" href="https://www.instagram.com/fishmarket_ksi/"><i >
                <img src="{{ asset('../images/instagram.png') }}" height="25" width="25" >
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
                        Copyright © 2023 FISHMARKET WEBSITE
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