@extends('...Internal.index', ['title' => 'Detail | Data Perusahaan'])
@section('asset_css')
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <script src="{{ asset('assets') }}/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <style>
        .table th.sticky-end,
        .table td.sticky-end {
            position: sticky;
            right: 0;
            background-color: #fff;
            /* Warna background agar cocok */
            z-index: 1;
            /* Prioritaskan di atas elemen lain */
            border-left: 1px solid #dee2e6;
            /* Tambahkan garis batas */
        }

        .accordion-button {
            color: white !important;
        }

        .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1);
        }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/internal/dashboard-internal">Home</a></li>
                        <li class="breadcrumb-item"><a href="/internal/laporan-tahunan/list">Laporan Tahunan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail Laporan Tahunan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Detail Laporan Tahunan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                    <h5><i data-feather="lock" class="icon-svg-primary wid-20"></i><span class="p-l-5">Private Ticket
                            #1831786</span></h5>
                </div> --}}
                <div class="card-body border-bottom py-2">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="d-inline-block my-3">Informasi Perusahaan</h4>
                        </div>
                    </div>
                </div>
                <div class="border-bottom card-body">
                    <div class="row">
                        <div class="col-sm-auto mb-3 mb-sm-0">
                            <div class="d-sm-inline-block d-flex align-items-center">
                                {{-- <img class="wid-60 img-radius mb-2" src="{{asset('assets')}}/images/user/avatar-4.jpg"
                                    alt="Generic placeholder image " /> --}}
                                <div
                                    class="wid-60 hei-60 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-building text-white fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="">
                                        <h4 class="d-inline-block">PT TRISTAR JAVA TRANSINDO</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="mb-2"><b>NIB : 9120109831421</b></p>
                                <ul class="list-group list-group-flush ">
                                    <li class="list-group-item px-0">
                                        <div class="row mt-1">
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Nomor Telepon</p>
                                                <p class="mb-0">(+1-876) 8654 239 581</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Email</p>
                                                <p class="mb-0">anshan.dh81@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <p class="mb-1 text-muted">Alamat</p>
                                        <p class="mb-0">Street 110-B Kalians Bag, Dewan, M.P. New York</p>
                                    </li>
                                    <li class="list-group-item px-0 pb-0 mb-2">
                                        <p class="mb-1 text-muted">Jenis Layanan</p>
                                        <ol>
                                            <li>AJAP</li>
                                            <li>AKAP</li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom py-2">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="d-inline-block my-3">Penanggung Jawab</h4>
                        </div>
                    </div>
                </div>
                <div class="border-bottom card-body">
                    <div class="row">
                        <div class="col-sm-auto mb-3 mb-sm-0">
                            <div class="d-sm-inline-block d-flex align-items-center">
                                {{-- <img class="wid-60 img-radius mb-2" src="{{asset('assets')}}/images/user/avatar-4.jpg"
                                    alt="Generic placeholder image " /> --}}
                                <div
                                    class="wid-60 hei-60 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-large text-white fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="">
                                        <h4 class="d-inline-block">ANG HOEY TIONG</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="mb-3"><b>No. Telp : 0216281700</b></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom py-2">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="d-inline-block my-3">Informasi Pengguna</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col px-5">
                            <ul class="list-group list-group-flush ">
                                <li class="list-group-item px-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Username</p>
                                            <p class="mb-0">ANGHOEYTIONG</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Email</p>
                                            <p class="mb-0">admtjt26@gmail.comm</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Nomor Telepon</p>
                                            <p class="mb-0">(+1-876) 8654 239 581</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Tanggal Pengajuan</p>
                                            <p class="mb-0">12 Desember 2024</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div id="basicwizard" class="form-wizard row justify-content-center">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item" data-target-form="#contactDetailForm">
                                    <a href="#1.1Detail" data-bs-toggle="tab" data-toggle="tab" class="nav-link active">
                                        <span class="d-none d-sm-inline fw-bold f-18"><i class="fa-solid fa-shield me-2">
                                            </i>1.1</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-target-form="#jobDetailForm">
                                    <a href="#2.1Detail" data-bs-toggle="tab" data-toggle="tab"
                                        class="nav-link icon-btn">
                                        <span class="d-none d-sm-inline fw-bold f-18"><i class="fa-solid fa-shield me-2">
                                            </i>2.1</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-target-form="#educationForm">
                                    <a href="#3.1Detail" data-bs-toggle="tab" data-toggle="tab"
                                        class="nav-link icon-btn">
                                        <span class="d-none d-sm-inline fw-bold f-18"><i class="fa-solid fa-shield me-2">
                                            </i>3.1</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-target-form="#jobDetailForm">
                                    <a href="#4.1Detail" data-bs-toggle="tab" data-toggle="tab"
                                        class="nav-link icon-btn">
                                        <span class="d-none d-sm-inline fw-bold f-18"><i class="fa-solid fa-shield me-2">
                                            </i>4.1</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="1.1Detail">
                                    <form id="contactForm" method="get">
                                        <div class="text-center">
                                            <h3 class="mb-2">Komitmen dan Kebijakan Keselamatan</h3>
                                        </div>
                                        <div class="table-responsive py-5">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Uraian</th>
                                                        <th>Pertanyaan</th>
                                                        <th>Jawab</th>
                                                        <th>Kesesuaian</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.1</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                            Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.2</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan mempunyai komitmen yang kuat dari Manajemen yang terdokumentasikan, tertulis dan ditandatangani oleh Pimpinan Perusahaan tertinggi sebagai langkah nyata terhadap aspek keselamatan yang ditunjukkan dalam sikap sehari-hari</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                        <td>Tidak ada perubahan</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.2</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan mempunyai komitmen yang kuat dari Manajemen yang terdokumentasikan, tertulis dan ditandatangani oleh Pimpinan Perusahaan tertinggi sebagai langkah nyata terhadap aspek keselamatan yang ditunjukkan dalam sikap sehari-hari</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                        <td>
                                                            <a href="">
                                                                <p class="mb-0"><i
                                                                        class="fa-regular fa-file-pdf me-1"></i><label
                                                                        class="mb-0">Lihat Dokumen</label></p>
                                                            </a>
                                                        </td>
                                                        <td><span class="badge bg-light-success">Sesuai</span></td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="2.1Detail">
                                    <form id="jobForm" method="post" action="#">
                                        <div class="text-center">
                                            <h3 class="mb-2">Pengorganisasian</h3>
                                        </div>
                                        <div class="table-responsive py-5">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Uraian</th>
                                                        <th>Pertanyaan</th>
                                                        <th>Jawab</th>
                                                        <th>Kesesuaian</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2.1</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Pengorganisasian</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.2</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan mempunyai struktur organisasi pengelolaan di bidang keselamatan, seperti Unit Manajemen Keselamatan atau Petugas Keselamatan</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                        <td>Tidak ada perubahan</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.3</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan dapat menjabarkan uraian tugas dan fungsi di masing-masing jabatan pada struktur organisasi hubungan antar struktur organisasi tersebut</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                        <td>
                                                            <a href="">
                                                                <p class="mb-0"><i
                                                                        class="fa-regular fa-file-pdf me-1"></i><label
                                                                        class="mb-0">Lihat Dokumen</label></p>
                                                            </a>
                                                        </td>
                                                        <td><span class="badge bg-light-success">Sesuai</span></td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="3.1Detail">
                                    <form id="educationForm" method="post" action="#">
                                        <div class="text-center">
                                            <h3 class="mb-2">Manajemen Bahaya Dan Risiko</h3>
                                        </div>
                                        <div class="table-responsive py-5">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Uraian</th>
                                                        <th>Pertanyaan</th>
                                                        <th>Jawab</th>
                                                        <th>Kesesuaian</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3.1</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Manajemen Bahaya dan Risiko (Persyaratan, Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.2</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan telah memiliki prosedur identifikasi bahaya, penilaian dan pengendalian risiko secara komprehensif baik terhadap personel, sarana angkutan, penumpang maupun lingkungan untuk setiap tahapan operasi pengangkutan</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Apakah terdapat perubahan pada dokumen Struktur Organisasi</td>
                                                        <td>Tidak ada perubahan</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.3</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan telah melakukan identifikasi bahaya, penilaian dan pengendaliannya dengan metode yang sesuai dengan karakteristik bahaya yang ada, memiliki matrik penilaian bahaya dan risiko, matrik identifikasi bahaya, penilaian dan pengendalian risiko di kantor, bengkel dan operasional serta matrik identifikasi bahaya lalu lintas</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                        <td>
                                                            <a href="">
                                                                <p class="mb-0"><i
                                                                        class="fa-regular fa-file-pdf me-1"></i><label
                                                                        class="mb-0">Lihat Dokumen</label></p>
                                                            </a>
                                                        </td>
                                                        <td><span class="badge bg-light-success">Sesuai</span></td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="4.1Detail">
                                    <form id="jobForm" method="post" action="#">
                                        <div class="text-center">
                                            <h3 class="mb-2">Fasilitas Pemeliharaan Dan Perbaikan</h3>
                                        </div>
                                        <div class="table-responsive py-5">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Uraian</th>
                                                        <th>Pertanyaan</th>
                                                        <th>Jawab</th>
                                                        <th>Kesesuaian</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>4.1</td>
                                                        <td>Deskripsi Fasilitas Pemeliharaan dan Perbaikan (Persyaratan, Ekspektasi, Implementasi, Prosedur Terkait</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.2</td>
                                                        <td>Perusahaan melengkapi kegiatan operasional angkutan dengan menyediakan fasilitas pemeliharaan dan perbaikan kendaraan bermotor sebagai syarat utama keselamatan dan perbaikan kendaraan bermotor yang digunakan untuk mendukung kegiatan perusahaan</td>
                                                        <td>Apakah terdapat perubahan dokumen prosedur pengoperasian kendaraan</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.3</td>
                                                        <td>Pemeliharaan dan perbaikan kendaraan dengan penyediaan sarana dan prasarana pendukung yang memadai untuk mendukung keselamatan seperti bengkel, klinik, ruang istirahat pengemudi, ruang parkir, fasilitas penyimpanan suku cadang dan lain-lain</td>
                                                        <td>Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                        <td>
                                                            <a href="">
                                                                <p class="mb-0"><i
                                                                        class="fa-regular fa-file-pdf me-1"></i><label
                                                                        class="mb-0">Lihat Dokumen</label></p>
                                                            </a>
                                                        </td>
                                                        <td><span class="badge bg-light-success">Sesuai</span></td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="finish">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="text-center">
                                                <i class="ph-duotone ph-gift f-50 text-danger"></i>
                                                <h3 class="mt-4 mb-3">Thank you !</h3>
                                                <div class="mb-3">
                                                    <div class="form-check d-inline-block">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheck1" />
                                                        <label class="form-check-label" for="customCheck1">I agree with
                                                            the Terms
                                                            and Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex wizard justify-content-center flex-wrap gap-2 mt-3">
                                    <div class="d-flex">
                                        <div class="previous me-2">
                                            <button type="button" class="btn btn-secondary kembali"> Kembali </button>
                                        </div>
                                        <div class="next me-2">
                                            <button type="button" class="btn btn-primary selanjutnya"> Selanjutnya
                                            </button>
                                        </div>
                                        <div class="save">
                                            <button type="button" class="btn btn-success simpan"> Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Define your controller buttons here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/pages/invoice-list.js"></script>
    <script src="../assets/js/plugins/datepicker-full.min.js"></script>
    <script src="../assets/js/pages/ac-datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var options17 = {
            series: [30],
            chart: {
                height: 150,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: '60%',
                        background: 'transparent',
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: 'front'
                    },
                    track: {
                        background: '#4680FF50',
                        strokeWidth: '50%'
                    },

                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            formatter: function(val) {
                                return parseInt(val);
                            },
                            offsetY: 7,
                            color: '#4680FF',
                            fontSize: '20px',
                            fontWeight: '700',
                            show: true
                        }
                    }
                }
            },
            colors: ['#4680FF'],
            fill: {
                type: 'solid'
            },
            stroke: {
                lineCap: 'round'
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-earning-graph-1'), options17);
        chart.render();

        var options18 = {
            series: [30], // Persentase atau nilai yang ingin ditampilkan
            chart: {
                height: 150,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: '60%',
                        background: 'transparent',
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: 'front'
                    },
                    track: {
                        background: '#28A74550', // Ganti dengan warna hijau transparan (hijau 50% opacity)
                        strokeWidth: '50%' // Lebar track
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            formatter: function(val) {
                                return parseInt(val); // Format nilai menjadi integer
                            },
                            offsetY: 7,
                            color: '#28A745', // Ganti dengan warna hijau
                            fontSize: '20px',
                            fontWeight: '700',
                            show: true
                        }
                    }
                }
            },
            colors: ['#28A745'], // Ganti warna grafik menjadi hijau
            fill: {
                type: 'solid' // Isi grafik menggunakan warna solid
            },
            stroke: {
                lineCap: 'round' // Stroke dengan ujung membulat
            }
        };

        // Render chart
        var chart = new ApexCharts(document.querySelector('#total-earning-graph-2'), options18);
        chart.render();


        var options19 = {
            series: [30],
            chart: {
                height: 150,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: '60%',
                        background: 'transparent',
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: 'front'
                    },
                    track: {
                        background: '#DC262650',
                        strokeWidth: '50%'
                    },

                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            formatter: function(val) {
                                return parseInt(val);
                            },
                            offsetY: 7,
                            color: '#DC2626',
                            fontSize: '20px',
                            fontWeight: '700',
                            show: true
                        }
                    }
                }
            },
            colors: ['#DC2626'],
            fill: {
                type: 'solid'
            },
            stroke: {
                lineCap: 'round'
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-earning-graph-3'), options19);
        chart.render();

        var options20 = {
            series: [30],
            chart: {
                height: 150,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: '60%',
                        background: 'transparent',
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: 'front'
                    },
                    track: {
                        background: '#28A74550', // Warna latar belakang track tetap merah muda
                        strokeWidth: '50%'
                    },

                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            formatter: function(val) {
                                return parseInt(val);
                            },
                            offsetY: 7,
                            color: '#006400', // Ubah warna teks menjadi hijau tua
                            fontSize: '20px',
                            fontWeight: '700',
                            show: true
                        }
                    }
                }
            },
            colors: ['#006400'], // Ubah warna grafik menjadi hijau tua
            fill: {
                type: 'solid'
            },
            stroke: {
                lineCap: 'round'
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-earning-graph-4'), options20);
        chart.render();

        document.addEventListener("click", (e) => {
            if (e.target.classList.contains('selanjutnya')) {
                let currentTab = document.querySelector('.tab-pane.active');
                let nextTab = currentTab.nextElementSibling;

                if (nextTab) {
                    currentTab.classList.remove('show', 'active');
                    nextTab.classList.add('show', 'active');
                }
            }

            if (e.target.classList.contains('kembali')) {
                let currentTab = document.querySelector('.tab-pane.active');
                let prevTab = currentTab.previousElementSibling;

                if (prevTab) {
                    currentTab.classList.remove('show', 'active');
                    prevTab.classList.add('show', 'active');
                }
            }
        });

        $(document).on("click", ".collapse-filter", function() {
            $("#collapseFilter").toggle(500);
        });
    </script>
@endsection
