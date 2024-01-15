<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Fish Store</title>

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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.produk') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
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
            <div class="container">
                <div class="row mt-3">
                    <div class="container mt-3">
                        @if (Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ Session::get('success') }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif @if (Session::get('failed'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal!</strong> {{ Session::get('success') }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                    <div class="row mt-4">
                        <div class="col"></div>
                        <div class="col-6">
                            <form action="#" method="GET"> @csrf <div class="input-group">
                                    <input type="search" name="search" class="form-control rounded" placeholder="Cari Nomor Hp" aria-label="Search" aria-describedby="search-addon" />
                                    <button type="submit" class="btn btn-outline-primary">search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col"></div>
                        <div class="row mt-5">
                        
                    </div>
                    </div>
                    <table class="table" style="margin-top: 10px">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Pembelian</th>
                                <th scope="col">Nama Pembeli</th>
                                <th scope="col">Email</th>
                                <th scope="col">Pesanan</th>
                                <th scope="col">Tanggal Pemesanan</th>
                                <th scope="col">Nomor Hp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jumlah Pesanan</th>
                                <th scope="col">Status Pemesanan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $pesanan)
                            <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td>{{ $pesanan->id }}</td>
                                <td>{{ $pesanan->nama }}</td>
                                <td>{{ $pesanan->email }}</td>
                                <td>{{ $pesanan->pesanan }}</td>
                                <td>{{ $pesanan->tanggal_pemesanan }}</td>
                                <td>{{ $pesanan->phone }}</td>
                                <td>{{ $pesanan->alamat }}</td>
                                <td>{{ $pesanan->Jumlahpesanan }}</td>
                                <td><span class="{{ $pesanan->status === 'Sudah Dikirim' ? 'fw-semibold text-success' : 'fw-semibold text-danger' }}">
                                    {{ $pesanan->status }} </span> </td>
                                <td>
                                    <a class="btn btn-outline-warning" href="/admin/editpesanan/{{ $pesanan->id }}">Edit</a>
                                    <a class="btn btn-outline-danger" href="/admin/deletepesanan/{{ $pesanan->id }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table><br>
                </div><br><br><br>
                <script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>
                

                <!-- Bootstrap core JavaScript-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                
                <script src="{{ asset('../js/jquery.min.js') }}"></script>
                <script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>

                <!-- Core plugin JavaScript-->
                <script src="{{ asset('../js/jquery.easing.min.js') }}"></script>

                <!-- Custom scripts for all pages-->
                <script src="{{ asset('../js/sb-admin-2.min.js') }}"></script>

                <!-- Page level plugins -->
                <script src="{{ asset('../js/Chart.min.js') }}"></script>

                <!-- Page level custom scripts -->
                <script src="{{ asset('../js/chart-area-demo.js') }}"></script>
                <script src="{{ asset('../js/chart-pie-demo.js') }}"></script>

</body>

</html>