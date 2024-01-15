<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <title>fish market</title>
  <link rel="icon" href="{{ asset('images/uhh2.png') }}" height="80" width="90" />

  <link rel="stylesheet" type="text/css" href="{{ asset('../css/bootstrap.min1.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('../css/font-awesome.css') }}assets/css/font-awesome.css">

  <link rel="stylesheet" href="{{ asset('../css/style1.css') }}">
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
            <li><a href="{{ route('user.kontak') }}"  class="active">Kontak</a></li>
            <div class="dropdown">
              <button class="btn  " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/user(1).png') }}" alt="gambar udang" height="30" width="30" />
              </button>
              <ul class="dropdown-menu" style="border-radius: 15px;">
                <li><a href="{{ route('user.profil') }}">Profil</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>

              </ul>
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="section section-bg" id="call-to-action" style="background-image: url('{{ asset('images/ikan.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br>
            <br>
            <h2>Kontak <em>Kami</em></h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Features Item Start ***** -->
  <section class="section" id="features">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Info <em> Kontak</em></h2>
          </div>
        </div>

        <div class="col-md-4">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
            </svg>
            <i class="fa fa-phone"></i>
          </div>

          <h5><a href="tel:+6282288957205">0895 4181 28121</a></h5>

          <br>
        </div>

        <div class="col-md-4">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
            </svg>
            <i class="fa fa-envelope"></i>
          </div>

          <h5><a href="mailto:andremarbun002@gmail.com">andremarbun002@gmail.com</a></h5>

          <br>
        </div>

        <div class="col-md-4">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
            </svg>
            <i class="fa fa-map-marker"></i>
          </div>

          <h5><a href="https://www.instagram.com/fishmarket_ksi/">Instagram</a></h5>
          <br>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Features Item End ***** -->

  <!-- ***** Contact Us Area Starts ***** -->
  <section class="section" id="contact-us" style="margin-top: 0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div id="map">
            <iframe src="https://maps.google.com/maps?q=Pulau+Bengkalis,+Riau,+Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="515px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="contact-form section-bg" style="background-image: url('{{ asset('images/ikan.jpg') }}')">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <fieldset>
                  <input name="name" type="text" id="name" placeholder="Nama Anda*" required="" value="" />
                </fieldset>
              </div>
              <div class="col-md-6 col-sm-12">
                <fieldset>
                  <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Anda*" required="" value="" />
                </fieldset>
              </div>
              <div class="col-md-12 col-sm-12">
                <fieldset>
                  <input name="subject" type="text" id="subject" placeholder="Judul Pesan" value="" />
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" id="message" placeholder="isi Pesan" required="" value=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <button><a href="{{ route('user.kontak') }}" class="main-button text-white">Kirim Pesan</a></button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Contact Us Area Ends ***** -->

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
            Copyright © 2023 FISHMARKET WEBSITE
          </p>
        </div>
      </div>
    </div>


    </div>
    </div>
  </footer>



  <script src="{{ asset('../js/email') }}"></script>

  <!-- jQuery -->
  <script src="{{ asset('../js/jquery-2.1.0.min.js') }}"></script>

  <!-- Bootstrap -->
  <script src="{{ asset('../js/popper.js') }}"></script>
  <script src="{{ asset('../js/bootstrap.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <!-- Plugins -->
  <script src="{{ asset('../js/scrollreveal.min.js') }}"></script>
  <script src="{{ asset('../js/waypoints.min.js') }}"></script>
  <script src="{{ asset('../js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('../js/imgfix.min.js') }}"></script>
  <script src="{{ asset('../js/mixitup.js') }}"></script>
  <script src="{{ asset('../js/accordions.js') }}"></script>

  <!-- Global Init -->
  <script src="{{ asset('../js/custom.js') }}"></script>

</body>

</html>