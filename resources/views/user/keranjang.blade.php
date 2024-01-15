<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/js_checkout.js"></script>
  <title>fish market</title>
  <link rel="icon" href="{{ asset('images/uhh2.png') }}" height="80" width="90" />

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="{{ asset('../css/bootstrap.min1.css') }}">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min1.js"></script>


  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min1.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style1.css') }}" />
  <link rel="stylesheet" href="{{ asset('../css/footer.css') }}" />
</head>

<body>
  <script>
    $(document).ready(function() {
      $('.btn-primary').click(function() {
        // Menampilkan modal
        $('#myModal').modal('show');
      });

      $('.send_form').click(function() {
        // Tangkap data formulir
        var formData = $('#contact').serialize();

        // Kirim data formulir ke server menggunakan AJAX
        $.ajax({
          type: 'POST',
          url: '{{ route("simpan-pemesanan") }}',
          data: formData,
          success: function(response) {
            // Mengarahkan langsung ke halaman sebelumnya
            window.history.back();
          },
          error: function(error) {
            // Handle error jika terjadi
            alert('Terjadi kesalahan saat mengirim pesanan. Silakan coba lagi.');
          }
        });

      });
    });
  </script>

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
            <li><a href="/user/keranjang/{id}" class="active">Keranjang</a></li>
            <li><a href="{{ route('user.kontak') }}">Kontak</a></li>
            <div class="dropdown">
              <button class="btn  " type="button" data-bs-toggle="dropdown" aria-expanded="false">
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

  <section class="section section-bg" id="call-to-action" style="background-image: url('{{ asset('images/ikan.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br />
            <br />
            <h2>Pemesanan</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <br />
      <br />
      <div class="row">
        <div class="col-md-8">
          <div class="contact-form">
            <form id="contact" action="/simpanpesanan" method="post">
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <label>Nama :</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" id="nama" value="{{ Auth::user()->name }}" />
                </div>
                <div class="col-sm-6 col-xs-12">
                  <label>Nomor Hp / WhatsApp :</label>
                  <input type="number" name="phone" class="form-control" placeholder="Nomor Hp / WhatsApp" id="phone" value="{{ Auth::user()->nomor_hp }}" />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <label>Email :</label>
                  <input type="email" name="email" class="form-control" placeholder="Email" id="email" value="{{ Auth::user()->email }}" />
                </div>
                <div class="col-sm-6 col-xs-12">
                  <label>Alamat :</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat" id="alamat" value="{{ Auth::user()->alamat }}" />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <label>Pesanan :</label>
                  <input type="text" name="pesanan" class="form-control" id="pesanan" value="{{ $produk->nama }}" />
                </div>
                <div class="col-sm-6 col-xs-12">
                  <label>Jumlah Pesanan (Kg) :</label>
                  <input type="number" name="Jumlahpesanan" class="form-control" placeholder="Jumlah Pesanan" id="Jumlahpesanan" step="any" />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <label>Tanggal Pemesanan :</label>
                  <input type="date" name="tanggal_pemesanan" class="form-control" placeholder="Tanggal Pemesanan" id="tanggal_pemesanan" />
                </div>
                <div class="col-sm-6 col-xs-12 form-group">
                  <label>Catatan</label>
                  <textarea name="description" class="form-control" rows="4" id="description"></textarea>
                </div>
              </div>
              <input type="hidden" name="id_produk" value="{{ $produk->id }}">
              <div class="row">
                @csrf
                <div class="col-lg-12">
                  <div class="main-button">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Konfirmasi Pesanan</button>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        Lakukan Pemesanan ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">batalkan</button>
                        <button type="button" class="send_form" href="javascript:void(0)" title="Send to Whatsapp">Pesan</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <br />
        </div>
        <div class="col-md-4">
          <ul class="list-groupitem list-group-no-border">
            <li class="list-group-item" style="margin: 0 0 -1px">
              <div class="row">
                <div class="col-6">
                  <p id="selectedProductInfo">Harga: </p>
                </div>
                <div class="col-6">
                  <h5 id="subTotal" class="text-right">Rp {{ $produk->harga }}</h5>
                </div>
              </div>
            </li>
            <li class="list-group-item" style="margin: 0 0 -1px">
              <div class="row">
                <div class="col-6">
                  <h4><strong>Total</strong></h4>
                </div>
                <div class="col-6">
                  <h4 id="totalAmount" class="text-right">Rp {{ $produk->total }}</h4>
                </div>
              </div>
            </li>
          </ul>
          <br />

        </div>

        <script>
          $(document).ready(function() {
            // Fungsi untuk menghitung total harga
            function hitungTotal() {
              // Ambil nilai harga dari elemen dengan id subTotal
              var harga = parseFloat($("#subTotal").text().replace("Rp ", "").replace(",", ""));

              // Ambil nilai jumlah pesanan dari elemen dengan id Jumlahpesanan
              var jumlahPesanan = parseFloat($("#Jumlahpesanan").val()) || 0;

              // Hitung total harga
              var total = harga * jumlahPesanan;

              // Tampilkan total harga dengan format mata uang
              $("#totalAmount").text("Rp " + total.toLocaleString());
            }

            // Panggil fungsi hitungTotal saat halaman dimuat dan setiap kali input Jumlahpesanan berubah
            $(document).ready(hitungTotal);
            $("#Jumlahpesanan").on("input", hitungTotal);
          });
        </script>

        </li>
        </ul>

        <br />
      </div>
    </div>
    </div>
  </section>
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



  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/kirim.js') }}"></script>
  <script src="{{ asset('js/js_checkout.js') }}"></script>
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