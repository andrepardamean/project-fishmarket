<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tambah Data Ikan</title>
        <!-- Custom fonts for this template-->
    <link href="{{ asset('../css/all.min.css.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('../css/sb-admin-2.min.css') }}">
</head>

<body id="page-top">
        <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1569C7;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <img  src="{{ asset('images/uhh.png') }}" alt="gambar udang" height="80" width="90" />
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.produk') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Produk</span></a>
            </li>
            
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pemesanan') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pemesanan</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Logout</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->
    <div class="container">
        <div class="container mt-3">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
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
                        <h5 class="card-title text-center">Tambah Data Pemesanan</h5>
                        <form action="{{ route('postTambahpemesanan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nama Pembeli</label>
                                <input type="text" class="form-control border border-secondary form-control" name="nama" required value="{{ old('nama') }}">
                                <span class="text-danger">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Email</label>
                                <input type="email" class="form-control border border-secondary form-control" name="email" required value="{{ old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nama Pesanan</label>
                                <input type="text" class="form-control border border-secondary form-control" name="pesanan" required value="{{ old('pesanan') }}">
                                <span class="text-danger">
                                    @error('pesanan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Tanggal Pemesanan</label>
                                <input type="date" class="form-control border border-secondary form-control" name="tanggal_pemesanan" required value="{{ old('tanggal_pemesanan') }}">
                                <span class="text-danger">
                                    @error('tanggal_pemesanan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nomor Hp</label>
                                <input type="text" class="form-control border border-secondary form-control" name="nomor_hp" required value="{{ old('nomor_hp') }}">
                                <span class="text-danger">
                                    @error('nomor_hp')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Alamat</label>
                                <input type="text" class="form-control border border-secondary form-control" name="alamat" required value="{{ old('alamat') }}">
                                <span class="text-danger">
                                    @error('alamat')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Harga</label>
                                <input type="number" class="form-control border border-secondary form-control" name="harga" required value="{{ old('harga') }}">
                                <span class="text-danger">
                                    @error('harga')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Jumlah Pesanan</label>
                                <input type="number" class="form-control border border-secondary form-control" name="jumlah_pesanan" required value="{{ old('jumlah_pesanan') }}">
                                <span class="text-danger">
                                    @error('jumlah_pesanan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Total</label>
                                <input type="number" class="form-control border border-secondary form-control" name="total" required value="{{ old('total') }}">
                                <span class="text-danger">
                                    @error('total')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <button type="submit" class="btn btn-success mt-5">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>