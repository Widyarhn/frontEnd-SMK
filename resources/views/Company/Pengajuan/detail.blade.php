@extends('...Company.index', ['title' => 'Detail Pengajuan'])
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
                        <li class="breadcrumb-item"><a href="/company/dashboard-company">Home</a></li>
                        <li class="breadcrumb-item"><a href="/company/pengajuan-sertifikat/list">Pengajuan Sertifikat</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Detail Pengajuan Sertifikat</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Detail Pengajuan Sertifikat</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="mb-2 d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Total Dokumen Penilaian</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                            <svg class="pc-icon text-success wid-15 hei-15">
                                <use xlink:href="#custom-arrow-up"></use>
                            </svg>
                            70.5%
                        </p>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-6">
                            <h5 class="mb-2 mt-3"></h5>
                            <div class="d-flex align-items-center gap-1">
                                <h5 class="mb-0">3</h5>
                                <p class="mb-0 text-muted d-flex align-items-center gap-2">Dokumen</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="total-invoice-1-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="d-flex mb-2 align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Lulus Penilaian</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                            <svg class="pc-icon text-warning wid-15 hei-15">
                                <use xlink:href="#custom-arrow-down"></use>
                            </svg>
                            -8.73%
                        </p>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-6">
                            <h5 class="mb-2 mt-3"></h5>
                            <div class="d-flex align-items-center gap-1">
                                <h5 class="mb-0">5</h5>
                                <p class="mb-0 text-muted d-flex align-items-center gap-2">Lulus</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="total-invoice-2-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="mb-2 d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Tidak Lulus Penilaian</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                            <svg class="pc-icon text-danger wid-15 hei-15">
                                <use xlink:href="#custom-arrow-down"></use>
                            </svg>
                            -3.73%
                        </p>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-6">
                            <h5 class="mb-2 mt-3"></h5>
                            <div class="d-flex align-items-center gap-1">
                                <h5 class="mb-0">5</h5>
                                <p class="mb-0 text-muted d-flex align-items-center gap-2">Tidak Lulus</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="total-invoice-3-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="mb-2 d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Persentase Penilaian Lulus</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                            <svg class="pc-icon text-info wid-15 hei-15">
                                <use xlink:href="#custom-arrow-down"></use>
                            </svg>
                            -3.73%
                        </p>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-6">
                            <h5 class="mb-2 mt-3"></h5>
                            <div class="d-flex align-items-center gap-1">
                                <h5 class="mb-0">12%</h5>
                                <p class="mb-0 text-muted d-flex align-items-center gap-2">Penilaian</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="total-invoice-4-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card mt-4">
                <div class="card-header">
                    <h5>Detail Pengajuan Sertifikat</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2 fw-bold">Jenis Pelayanan :</label>
                            <div class="media-body d-flex align-items-center">
                                <ul class="list">
                                    <li class="mb-2">
                                        <strong><a href="#" class="link-secondary">AKAP</a></strong>
                                        | <span class="badge bg-light text-black">Angkutan Barang Umum</span>
                                    </li>
                                    <li class="mb-2">
                                        <strong><a href="#" class="link-secondary">AJAP</a></strong>
                                        | <span class="badge bg-light text-black">Angkutan Barang Umum</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                            style="background: linear-gradient(90deg, rgb(4 60 132) 0%, rgb(69 114 184) 100%); color: white;">
                                            Lihat Surat Permohonan
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <label class="mb-2">Nomor Surat : </label>
                                                        <div class="media-body">
                                                            <p class="mb-0"><i class="fa-solid fa-file me-1"></i><label
                                                                    class="mb-0">12 Desember 2024</label></p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <label class="mb-2 wid-100">Tanggal Surat</label>
                                                        <div class="media-body">
                                                            <p class="mb-0"><i
                                                                    class="feather icon-calendar me-1"></i><label
                                                                    class="mb-0">12 Desember 2024</label></p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <a href="">
                                                                <p class="mb-0"><i
                                                                        class="fa-regular fa-file-pdf me-1"></i><label
                                                                        class="mb-0">Lihat Dokumen</label></p>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2 fw-bold">Jadwal Verifikasi Daring :</label>
                            <div class="media-body">
                                <p class="mb-0"><i class="fa-solid fa-calendar-days me-2"></i><label class="mb-0">12
                                        Desember 2024</label></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8 col-12">
            <div id="basicwizard" class="form-wizard row justify-content-center">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item" data-target-form="#contactDetailForm">
                                    <a href="#1.1Detail" data-bs-toggle="tab" data-toggle="tab" class="nav-link active">
                                        <span class="d-none d-sm-inline fw-bold f-18"><i class="fa-solid fa-shield me-2">
                                            </i>1</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-target-form="#jobDetailForm">
                                    <a href="#2.1Detail" data-bs-toggle="tab" data-toggle="tab"
                                        class="nav-link icon-btn">
                                        <span class="d-none d-sm-inline fw-bold f-18"><i class="fa-solid fa-shield me-2">
                                            </i>2</span>
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
                                            <h3 class="mb-2">1. Komitmen dan Kebijakan Keselamatan</h3>
                                        </div>
                                        <div class="table-responsive py-5">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Uraian</th>
                                                        <th>Dokumen / Bukti Dukung Jawaban</th>
                                                        <th>Jawaban Sebelumnya</th>
                                                        <th>Penilaian</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.1</td>
                                                        <td>Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                            Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                        <td>Deskripsi Komitmen dan Kebijakan Keselamatan</td>
                                                        <td>
                                                            <div>
                                                                <strong>File Deskripsi Komitmen dan Kebijakan Keselamatan Persyaratan,
                                                                    Ekspektasi, Implementasi, Prosedur Terkait</strong>
                                                                <a href="#">
                                                                    <p class="mb-0">
                                                                        <i class="fa-regular fa-file-pdf me-1"></i>
                                                                        <label class="mb-0">Lihat Dokumen</label>
                                                                    </p>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row align-items-center">
                                                                <div class="col-auto pe-0">
                                                                    <div
                                                                        class="wid-40 hei-40 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
                                                                        <i class="fa-solid fa-clipboard-check text-white"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <h6 class="mb-1"><span
                                                                            class="text-truncate">Poin: 2.5</span> </h6>
                                                                    <p class="f-12 mb-0">
                                                                        <a href="#!" class="text-muted"><span
                                                                                class="badge bg-success">Sudah Sesuai</span></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.2</td>
                                                        <td>Perusahaan mempunyai kebijakan keselamatan tertulis dari manajemen yang memuat visi, misi dan tujuan yang hendak dicapai dan mempunyai sasaran keselamatan untuk mendukung perwujudan kebijakan keselamatan perusahaan menuju peningkatan berkelanjutan</td>
                                                        <td>Bukti Pernyataan Dokumen (foto pernyataan kebijakan dan Visi Misi)</td>
                                                        <td>
                                                            <div>
                                                                <strong>File Dokumen Kebijakan</strong>
                                                                <a href="#">
                                                                    <p class="mb-0">
                                                                        <i class="fa-regular fa-file-pdf me-1"></i>
                                                                        <label class="mb-0">Lihat Dokumen</label>
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            
                                                            <div>
                                                                <strong>File Dokumen Visi Misi</strong>
                                                                <a href="#">
                                                                    <p class="mb-0">
                                                                        <i class="fa-regular fa-file-pdf me-1"></i>
                                                                        <label class="mb-0">Lihat Dokumen</label>
                                                                    </p>
                                                                </a>
                                                            </div>
                                                        </td>                                                        
                                                        <td>
                                                            <div class="row align-items-center">
                                                                <div class="col-auto pe-0">
                                                                    <div
                                                                        class="wid-40 hei-40 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
                                                                        <i class="fa-solid fa-clipboard-check text-white"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <h6 class="mb-1"><span
                                                                            class="text-truncate">Poin: 1</span> </h6>
                                                                    <p class="f-12 mb-0">
                                                                        <a href="#!" class="text-muted"><span
                                                                                class="badge bg-danger">Tidak sesuai sangat salah sekali bisa tembus gak ini</span></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="2.1Detail">
                                    <form id="jobForm" method="get">
                                        <div class="text-center">
                                            <h3 class="mb-2">2. Pengorganisasian</h3>
                                        </div>
                                        <div class="table-responsive py-5">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Uraian</th>
                                                        <th>Dokumen / Bukti Dukung Jawaban</th>
                                                        <th>Jawaban Sebelumnya</th>
                                                        <th>Penilaian</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2.1</td>
                                                        <td>Deskripsi Pengorganisasian</td>
                                                        <td>Deskripsi Pengorganisasian (Persyaratan, Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                        <td>
                                                            <div>
                                                                <strong>File Deskripsi Komitmen dan Kebijakan Keselamatan Persyaratan, Ekspektasi, Implementasi, Prosedur Terkait</strong>
                                                                <a href="#">
                                                                    <p class="mb-0">
                                                                        <i class="fa-regular fa-file-pdf me-1"></i>
                                                                        <label class="mb-0">Lihat Dokumen</label>
                                                                    </p>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row align-items-center">
                                                                <div class="col-auto pe-0">
                                                                    <div
                                                                        class="wid-40 hei-40 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
                                                                        <i class="fa-solid fa-clipboard-check text-white"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <h6 class="mb-1"><span
                                                                            class="text-truncate">Poin: 2.5</span> </h6>
                                                                    <p class="f-12 mb-0">
                                                                        <a href="#!" class="text-muted"><span
                                                                                class="badge bg-success">Sudah Sesuai</span></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.2</td>
                                                        <td>Perusahaan mempunyai struktur organisasi pengelolaan di bidang keselamatan, seperti Unit Manajemen Keselamatan atau Petugas Keselamatan</td>
                                                        <td>Dokumen struktur organisasi Unit Manajemen Keselamatan Petugas Keselamatan</td>
                                                        <td>
                                                            <div>
                                                                <strong>File Struktur Organisasi</strong>
                                                                <a href="#">
                                                                    <p class="mb-0">
                                                                        <i class="fa-regular fa-file-pdf me-1"></i>
                                                                        <label class="mb-0">Lihat Dokumen</label>
                                                                    </p>
                                                                </a>
                                                            </div>
                                                        </td>                                                        
                                                        <td>
                                                            <div class="row align-items-center">
                                                                <div class="col-auto pe-0">
                                                                    <div
                                                                        class="wid-40 hei-40 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
                                                                        <i class="fa-solid fa-clipboard-check text-white"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <h6 class="mb-1"><span
                                                                            class="text-truncate">Poin: 2</span> </h6>
                                                                    <p class="f-12 mb-0">
                                                                        <a href="#!" class="text-muted"><span
                                                                                class="badge bg-danger">Tidak sesuai sangat salah sekali bisa tembus gak ini</span></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
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
    <script src="../assets/js/plugins/datepicker-full.min.js"></script>
    <script src="../assets/js/pages/ac-datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var total_invoice_1_chart_options = {
            chart: {
                type: 'area',
                height: 55,
                sparkline: {
                    enabled: true
                }
            },
            colors: ['#2ca87f'],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    type: 'vertical',
                    inverseColors: false,
                    opacityFrom: 0.5,
                    opacityTo: 0
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            series: [{
                data: [0, 20, 10, 45, 30, 55, 20, 30]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Ticket ';
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-invoice-1-chart'), total_invoice_1_chart_options);
        chart.render();

        var total_invoice_2_chart_options = {
            chart: {
                type: 'area',
                height: 55,
                sparkline: {
                    enabled: true
                }
            },
            colors: ['#e58a00'],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    type: 'vertical',
                    inverseColors: false,
                    opacityFrom: 0.5,
                    opacityTo: 0
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            series: [{
                data: [30, 20, 55, 30, 45, 10, 20, 0]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Ticket ';
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-invoice-2-chart'), total_invoice_2_chart_options);
        chart.render();

        var total_invoice_3_chart_options = {
            chart: {
                type: 'area',
                height: 55,
                sparkline: {
                    enabled: true
                }
            },
            colors: ['#dc2626'],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    type: 'vertical',
                    inverseColors: false,
                    opacityFrom: 0.5,
                    opacityTo: 0
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            series: [{
                data: [0, 20, 10, 45, 30, 55, 20, 30]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Ticket ';
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-invoice-3-chart'), total_invoice_3_chart_options);
        chart.render();

        var total_invoice_4_chart_options = {
            chart: {
                type: 'area',
                height: 55,
                sparkline: {
                    enabled: true
                }
            },
            colors: ['#17a2b8'], // Warna diubah ke text-info
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    type: 'vertical',
                    inverseColors: false,
                    opacityFrom: 0.5,
                    opacityTo: 0
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            series: [{
                data: [0, 20, 10, 45, 30, 55, 20, 30]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Ticket ';
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-invoice-4-chart'), total_invoice_4_chart_options);
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
