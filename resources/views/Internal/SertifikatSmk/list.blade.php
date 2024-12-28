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
    </style>
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/internal/dashboard-internal">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Daftar Sertifikat</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Daftar Pengajuan Permohonan Penilaian E-SMK</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-3 col-12 mb-4"> <!-- Menambahkan mb-4 untuk margin bawah -->
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Pengajuan</p>
                            <h4 class="mb-1">980+</h4>
                            <p class="mb-0 text-sm">May 23 - June 01 (2018)</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-primary rounded-circle">
                                <i class="fa-solid fa-file"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-12 mb-4"> <!-- Menambahkan mb-4 untuk margin bawah -->
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Pengajuan Berlangsung</p>
                            <h4 class="mb-1">1,563</h4>
                            <p class="mb-0 text-sm">May 23 - June 01 (2018)</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-info rounded-circle">
                                <i class="fa-solid fa-bars-progress"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-9 mb-4"> <!-- Menambahkan mb-4 untuk margin bawah -->
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Pengajuan Selesai</p>
                            <h4 class="mb-1">42.6%</h4>
                            <p class="mb-0 text-sm">May 23 - June 01 (2018)</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-success rounded-circle">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-9 mb-3"> <!-- Menambahkan mb-4 untuk margin bawah -->
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Pengajuan Kadaluwarsa</p>
                            <h4 class="mb-1">42.6%</h4>
                            <p class="mb-0 text-sm">May 23 - June 01 (2018)</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-warning rounded-circle">
                                <i class="fa-solid fa-file-circle-exclamation"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Download Form -->
    <div id="collapseFilter" class="mt-1">
        <div class="card card-body mb-3">
            <h5 class="card-title mt-1 mb-2"><i class="fa-solid fa-filter fa-20"></i> Filter Download</h5>
            <form id="custom-filter">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="fw-normal" for="daterange">Rentang Tanggal <sup
                                        class="text-danger">*</sup></label>
                                <div class="input-daterange input-group" id="datepicker_range">
                                    <input type="text" class="form-control text-left" placeholder="Tanggal Mulai"
                                        name="range-start" />
                                    <input type="text" class="form-control text-end" placeholder="Tanggal Berakhir"
                                        name="range-end" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-normal" for="input-penilai">Penilai</label>
                                <select class="form-control select2" name="input_penilai" id="input-penilai"></select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-normal" for="input-perusahaan">Perusahaan</label>
                                <select class="form-control select2" name="input_perusahaan" id="input-perusahaan"></select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-normal" for="input-status">Status Sertifikat</label>
                                <select class="form-control select2" name="input_status" id="input-status"></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="row mt-md-0">
                            <div class="col-6 mb-2">
                                <button type="submit" id="btn-find" class="btn btn-primary w-100">
                                    <i class="fa-solid fa-magnifying-glass me-2"></i>Cari
                                </button>
                            </div>
                            <div class="col-6 mb-2">
                                <button type="button" id="resetCustomFilter" class="btn btn-light-secondary w-100">
                                    <i class="fa-solid fa-eraser me-2"></i>Reset
                                </button>
                            </div>
                            <div class="col-12 mb-2">
                                <div id="download-container">
                                    <!-- Tombol utama download sebagai dropdown -->
                                    <div class="dropdown w-100">
                                        <button class="btn w-100 btn-success dropdown-toggle" type="button"
                                            id="downloadDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-download me-2"></i>Download
                                        </button>
                                        <ul class="dropdown-menu w-100" aria-labelledby="downloadDropdown">
                                            <li>
                                                <a class="dropdown-item" id="download-excel" href="#">
                                                    <i class="fas fa-file-excel me-1"></i>Download Excel
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="download-csv" href="#">
                                                    <i class="fas fa-file-csv me-1"></i>Download CSV
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="download-pdf" href="#">
                                                    <i class="fas fa-file-pdf me-1"></i>Download PDF
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel"
                            aria-labelledby="analytics-tab-1" tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple-1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Pendaftaran</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Jenis Pelayanan</th>
                                            <th>Lama Proses</th>
                                            <th>Penilai</th>
                                            <th>Jadwal Interviw</th>
                                            <th>Posisi</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th class="text-end sticky-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2024123</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div
                                                            class="wid-40 hei-40 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                                            <i class="fa-solid fa-building text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">PT WIRASWASTA
                                                                GEMILANG INDONESIA</span> </h6>
                                                                <p class="f-12 mb-0">
                                                                    <a href="#!" class="text-muted"><span
                                                                            class="badge bg-primary">Wawancara</span></a>
                                                                </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>AJAP</td>
                                            <td>2 hari</td>
                                            <td>Ahmad Str.</td>
                                            <td>14 Mei 2024</td>
                                            <td>Direktur</td>
                                            <td>13 Mei 2024</td>
                                            
                                            <td class="text-end sticky-end">
                                                <li class="list-inline-item"><a
                                                        href="/internal/sertifikat/detail"
                                                        class="avtar avtar-s btn-link-info btn-pc-default">
                                                        <i class="ti ti-eye f-20"></i></a>
                                                </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>

                                            <td>2024123</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div
                                                            class="wid-40 hei-40 rounded-circle bg-success d-flex align-items-center justify-content-center">
                                                            <i class="fa-solid fa-building text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">PT AGUNG
                                                                JAYA</span> </h6>
                                                        <p class="f-12 mb-0">
                                                            <a href="#!" class="text-muted"><span
                                                                    class="badge bg-success">Selesai</span></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>AKAP</td>
                                            <td>2 hari</td>
                                            <td>Ahmad Str.</td>
                                            <td>14 Mei 2024</td>
                                            <td>Direktur</td>
                                            <td>13 Mei 2024</td>
                                            
                                            <td class="text-end sticky-end">
                                                <li class="list-inline-item"><a
                                                        href="/internal/sertifikat/detail"
                                                        class="avtar avtar-s btn-link-info btn-pc-default">
                                                        <i class="ti ti-eye f-20"></i></a>
                                                </li>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
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
        var optionsLineChart = {
            chart: {
                type: 'line',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            colors: ['#0d6efd', '#6610f2', '#6f42c1', '#d63384', '#fd7e14', '#ffc107', '#28a745', '#20c997', '#17a2b8'],
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            markers: {
                size: 5,
                colors: ['#fff'],
                strokeColors: ['#0d6efd', '#6610f2', '#6f42c1', '#d63384', '#fd7e14', '#ffc107', '#28a745', '#20c997',
                    '#17a2b8'
                ],
                strokeWidth: 2,
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                    name: 'AJAP',
                    data: [30, 40, 35, 50, 49, 60, 70, 0, 0, 0, 0, 0]
                },
                {
                    name: 'AKAP',
                    data: [20, 30, 25, 40, 45, 55, 65, 81, 0, 0, 120, 125]
                },
                {
                    name: 'AKDP',
                    data: [25, 35, 30, 45, 44, 50, 60, 80, 90, 95, 0, 110]
                },
                {
                    name: 'Alat Berat',
                    data: [15, 25, 20, 30, 35, 0, 50, 65, 75, 80, 85, 90]
                },
                {
                    name: 'Angkot/Angdes',
                    data: [10, 20, 15, 0, 30, 35, 45, 60, 70, 75, 80, 85]
                },
                {
                    name: 'Angkutan B3',
                    data: [5, 15, 10, 20, 25, 0, 40, 55, 65, 70, 75, 80]
                },
                {
                    name: 'Angkutan Barang Umum',
                    data: [12, 22, 18, 0, 32, 37, 0, 62, 72, 78, 83, 88]
                },
                {
                    name: 'Angkutan Lintas Batas Negara',
                    data: [18, 28, 25, 35, 38, 45, 55, 0, 80, 85, 90, 95]
                },
                {
                    name: 'Pariwisata',
                    data: [8, 18, 15, 25, 0, 33, 43, 58, 68, 73, 78, 83]
                }
            ],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                axisBorder: {
                    show: true
                },
                axisTicks: {
                    show: true
                }
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center'
            },
            grid: {
                strokeDashArray: 4
            }
        };

        var chartLine = new ApexCharts(document.querySelector('#line-chart'), optionsLineChart);
        chartLine.render();

        $(document).on("click", ".collapse-filter", function() {
            $("#collapseFilter").toggle(500);
        });
    </script>
@endsection
