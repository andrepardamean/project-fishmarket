<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

      <title>fish market</title>
    <link rel="icon"  href="{{ asset('images/uhh2rmv.png') }}" height="80" width="90"/>
    
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
                            <img  src="{{ asset('images/uhh.png') }}" alt="gambar udang" height="80" width="90" />
                            Fish <em style="font-size:small"> Market</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('auth.login') }}" class="active">Beranda</a></li>
                            <li><a href="{{ route('auth.login') }}">Produk</a></li>
                            <li><a href="{{ route('auth.login') }}">Keranjang</a></li>
                            <li><a href="{{ route('auth.login') }}">Kontak</a></li>
                            <li><a href="{{ route('auth.login') }}">Login</a></li>
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

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('images/ikan.mp4') }}" type="video/mp4" />
                
        </video>

        

        <div class="video-overlay header-text">
            <div class="caption">
                <h6 style="color: rgb(5, 144, 230);">SELAMAT DATANG DI</h6>
                <h1 style="color: white;">WEBSITE JUAL IKAN TERLENGKAP</h1>
                <br>
                <div class="main-button">
                    <a href="{{ route('user.kontak') }}">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Jenis <em>Dagangan</em></h2>
                        <br>
                        <p>Pada website ini nantinya akan menjual 2 jenis hasil tangakapan nelayan yaitu ikan laut dan udang</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-around bg-secondary mb-3">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('images/ikan1.jpg') }}" alt="gambar ikan" height="200" />
                        </div>
                        <div class="down-content m-4">
                            <h4>Jenis Ikan</h4>
                            <p>
                                Pada bagian ini nantinya akan menampilkan jenis-jenis ikan
                                
                            </p>
                            <ul class="social-icons">
                                <button href="{{ route('auth.login') }}">+ Lihat Selengkapnya</button>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('images/udang.jpg') }}" alt="gambar udang" height="200" />
                        </div>
                        <div class="down-content m-4">
                            <h4>Jenis Udang</h4>
                            <p>
                                Pada bagian ini nantinya akan menampilkan jenis-jenis udang
                               
                            </p>
                            <ul class="social-icons">
                                <button  href="{{ route('auth.login') }}">+ Lihat Selengkapnya</button>
                            </ul>
                        </div>
                    </div>
                </div>
    </section>
    <!-- ***** Cars Ends ***** -->

     <div class="section-heading">
                        <h2><em>Melayani</em></h2>
                        <br>
                    </div> 

    <div class="container text-center mt-1">
  <div class="row">
    <div class="col">
        
      <img src="{{ asset('../images/pemm.png') }}" height="100" width="120" >
        <br>
      Membantu nelayan
    </div>
    <div class="col">
      <img src="{{ asset('../images/codo.png') }}" height="100" width="120" >
      <br>
       Menggunakan sistem COD
    </div>
  </div>
  <div class="row mt-5">
    <div class="col">
      <img src="{{ asset('../images/ikann.png') }}" height="100" width="120" >
       <br>
      Berkualitas baik
    </div>
    <div class="col">
      <img src="{{ asset('../images/ciity.png') }}" height="100" width="110" >
        <br>
      Seluruh kota bengkalis
    </div>
    <div class="col mt-1">
      <img src="{{ asset('../images/antara.png') }}" height="100" width="120" >
       <br>
      Antar di tempat
    </div>
  </div>
</div>
    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Team <em>Kami</em></h2>
                    <br>
                    <p>
                        Pada pembuatana website ini kami terdiri dari 5 anggota team, yaitu :
                    </p>
                </div>
            </div>

            <section class="container">
                <div class="card__container swiper col-lg-9 ">
                    <div class="card__content">
                        <div class="swiper-wrapper">
                            <article class="card__article swiper-slide">
                                <div class="card__image">
                                    <img src="{{ asset('../images/andre.jpeg') }}" style="width: 15rem;" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                </div>

                                <div class="card__data">
                                    <h3 class="card__name">Andre Pardamean Lumban Gaol</h3>
                                </div>
                            </article>

                            <article class="card__article swiper-slide">
                                <div class="card__image">
                                    <img src="{{ asset('../images/donn.jpeg') }}" style="width: 15rem;" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                </div>

                                <div class="card__data">
                                    <h3 class="card__name">M.Alfikri Maulana</h3>
                                </div>
                            </article>

                            <article class="card__article swiper-slide">
                                <div class="card__image">
                                    <img src="{{ asset('../images/erii.jpeg') }}" style=" width: 15rem;" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                </div>

                                <div class="card__data">
                                    <h3 class="card__name">Eri Irawan</h3>
                                </div>
                            </article>

                            <article class="card__article swiper-slide">
                                <div class="card__image">
                                    <img src="{{ asset('../images/rima.jpeg') }}" style="width: 15rem;" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                </div>

                                <div class="card__data">
                                    <h3 class="card__name">Nur rahmadani</h3>
                                </div>
                            </article>

                            <article class="card__article swiper-slide">
                                <div class="card__image">
                                    <img src="{{ asset('../images/fattt.jpeg') }}" style="width: 15rem; height: 320px" alt="image" class="card__img">
                                    <div class="card__shadow"></div>
                                </div>

                                <div class="card__data">
                                    <h3 class="card__name">Nur Faathira</h3>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Navigation buttons -->
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left"></i>
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

    <!-- ***** Footer Start ***** -->
    <!-- Site footer -->
    <footer class="site-footer mt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
             <img src= "{{ asset('images/uhh2rmv.png') }}" height="40" width="50" style="margin-right:500px ;"/>
            <p class="text-justify" style="color: white;"> 
                              Di website ini, Anda dapat menemukan berbagai jenis ikan dan berbagai 
                              jenis udang yang pastinya masih segar, dengan harga yang kompetitif.
                              Sehingga anda juga dapat dengan mudah memesan ikan segar langsung dari nelayan.
                              <br>
                              cari kami di:
</p>
          </div>


          <div class=" col-md-6 mt-4">
            <h6>Quick Links</h6>
            <ul class="footer-links">
                <li><a href="{{ route('auth.login') }}">Produk</a></li>
                            <li><a href="{{ route('auth.login') }}">Keranjang</a></li>
                            <li><a href="{{ route('auth.login') }}">Kontak</a></li>
                            <li><a href="{{ route('auth.login') }}">Login</a></li>
            </ul>
          </div>
          <div class=" col-sm-2 " >
            <ul class="social-icons" style="margin-right: 310px;">
              <li><a class="dribbble" href="https://www.instagram.com/fishmarket_ksi/"><i >
                <img src="{{ asset('../images/instagram(1).png') }}"  height="25" width="25" >
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

     <!--=============== SWIPER JS ===============-->
    <script src=" {{ asset('../js/swiper-bundle.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src=" {{ asset('../js/main.js') }}"></script>
    
</body>

</html>