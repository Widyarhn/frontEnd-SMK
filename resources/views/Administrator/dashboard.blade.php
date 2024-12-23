@extends('...index', ['title' => 'Dashboard'])
@section('asset_css')
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <script src="{{ asset('assets') }}/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card welcome-banner bg-blue-800" style="background: #0f2a7d;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="p-4">
                                <h2 class="text-white">Selamat Datang, Administrator</h2>
                                <p class="text-white">Sistem ini dirancang untuk mendukung perusahaan angkutan umum dalam
                                    menerapkan dan memantau standar keselamatan operasional. Sistem ini memantau kinerja
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="img-welcome-banner">
                                <img src="{{ asset('assets') }}/images/logoapp.png" alt="img" class="img-fluid mt-2"
                                    style="width: 100px;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-1">2</h3>
                    <p class="text-muted mb-0">Total Perusahaan</p>
                  </div>
                  <div class="col-4 text-end">
                    <i class="fa-regular fa-building fa-lg text-primary f-36"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-1">200</h3>
                    <p class="text-muted mb-0">Tidak Tersertifikasi</p>
                  </div>
                  <div class="col-4 text-end">
                    <i class="fa-regular fa-rectangle-xmark fa-lg text-danger f-36"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-1">200</h3>
                    <p class="text-muted mb-0">Proses Sertifikasi</p>
                  </div>
                  <div class="col-4 text-end">
                    <i class="fa-solid fa-chalkboard-teacher fa-lg text-warning f-36"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-1">200</h3>
                    <p class="text-muted mb-0">Tersertifikasi</p>
                  </div>
                  <div class="col-4 text-end">
                    <i class="fa-regular fa-square-check fa-lg text-success f-36"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">Tipe Perusahaan</h5>
                        </div>
                    </div>
                    <h5 class="text-end my-2"><span class="badge bg-primary"> </span></h5>
                    <div id="customer-rate-graph"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Proses Sertifikasi</h5>
                    </div>
                    <div id="total-income-graph"></div>
                    <div class="row g-3 mt-3">
                        <div class="col-sm-3">
                            <div class="bg-body p-3 rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <span class="p-1 d-block bg-primary rounded-circle">
                                            <span class="visually-hidden">New alerts</span>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0">Pengajuan</p>
                                    </div>
                                </div>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="bg-body p-3 rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <span class="p-1 d-block bg-warning rounded-circle">
                                            <span class="visually-hidden">New alerts</span>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0">Tidak Lulus Penilaian</p>
                                    </div>
                                </div>
                                <h6 class="mb-0">$23,876 </h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="bg-body p-3 rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <span class="p-1 d-block bg-success rounded-circle">
                                            <span class="visually-hidden">New alerts </span>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0">Lulus Penilaian</p>
                                    </div>
                                </div>
                                <h6 class="mb-0">$23,876 </h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="bg-body p-3 rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <span class="p-1 d-block bg-success rounded-circle">
                                            <span class="visually-hidden"></span>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0">Lulus Verifikasi Penilaian</p>
                                    </div>
                                </div>
                                <h6 class="mb-0">$23,876 </h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="bg-body p-3 rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <span class="p-1 d-block bg-info rounded-circle">
                                            <span class="visually-hidden"></span>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0">Wawancara Terjadwal</p>
                                    </div>
                                </div>
                                <h6 class="mb-0">$23,876 </h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="bg-body p-3 rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <span class="p-1 d-block bg-success rounded-circle">
                                            <span class="visually-hidden"></span>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0">Verifikasi Direktur</p>
                                    </div>
                                </div>
                                <h6 class="mb-0">$23,876 </h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="bg-body p-3 rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <span class="p-1 d-block bg-danger rounded-circle">
                                            <span class="visually-hidden"></span>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0">Ditolak</p>
                                    </div>
                                </div>
                                <h6 class="mb-0">$23,876 </h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="bg-body p-3 rounded">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <span class="p-1 d-block bg-dark rounded-circle">
                                            <span class="visually-hidden"></span>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0">Kadaluwarsa</p>
                                    </div>
                                </div>
                                <h6 class="mb-0">$23,876 </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Penilai Dengan Disposisi Terbanyak</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Proses</th>
                                    <th>Selesai</th>
                                    <th>Total Disposisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="row">
                                                <h6 class="mb-2"><span class="text-truncate w-100">Foundations</span>
                                                </h6>
                                                <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                                        Leather panels. Laces. Rounded toe. </span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="row">
                                                <h6 class="mb-2"><span class="text-truncate w-100">Foundations</span>
                                                </h6>
                                                <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                                        Leather panels. Laces. Rounded toe. </span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Informasi Belum Laporan Tahunan</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tahun</th>
                                    <th>Tanggal Berakhir</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="row">
                                                <h6 class="mb-2"><span class="text-truncate w-100">Foundations</span>
                                                </h6>
                                                <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                                        Leather panels. Laces. Rounded toe. </span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2024</td>
                                    <td>3 Desember 2024</td>
                                    <td>
                                        <li class="list-inline-item"><a data-bs-toggle="modal"
                                                data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                    class="ti ti-eye f-20"></i></a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="row">
                                                <h6 class="mb-2"><span class="text-truncate w-100">Foundations</span>
                                                </h6>
                                                <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                                        Leather panels. Laces. Rounded toe. </span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2024</td>
                                    <td>3 Desember 2024</td>
                                    <td>
                                        <li class="list-inline-item"><a data-bs-toggle="modal"
                                                data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                    class="ti ti-eye f-20"></i></a></li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/dashboard-default.js"></script>
    <script src="../assets/js/plugins/simple-datatables.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
            sortable: false,
            perPage: 5
        });
        const dataTable2 = new simpleDatatables.DataTable('#pc-dt-simple2', {
            sortable: false,
            perPage: 10
        });
        // new SimpleBar(document.querySelector('.sale-scroll'));
        // new SimpleBar(document.querySelector('.feed-scroll'));
        new SimpleBar(document.querySelector('.revenue-scroll'));
        new SimpleBar(document.querySelector('.income-scroll'));
        new SimpleBar(document.querySelector('.customer-scroll'));
    </script>
@endsection
