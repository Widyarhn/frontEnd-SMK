@extends('Administrator.index', ['title' => 'Dashboard'])
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Proses Sertifikasi</h5>
                    </div>
                    <div id="pie-chart-2" style="width: 100%;"></div>
                    <div class="row g-3 mt-3">
                        <!-- Start of Cards -->
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-primary rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Pengajuan</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-warning rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Tidak Lulus Penilaian</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-success rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Lulus Penilaian</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-info rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Lulus Verifikasi Penilaian</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block rounded-circle"
                                        style="width: 10px; height: 10px; background:#9B59B6;"></span>
                                </div>
                                <p class="mb-1">Wawancara Terjadwal</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block rounded-circle"
                                        style="width: 10px; height: 10px; background:#006400;"></span>
                                </div>
                                <p class="mb-1">Verifikasi Direktur</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-danger rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Ditolak</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block rounded-circle"
                                        style="width: 10px; height: 10px; background:#F4D03F;"></span>
                                </div>
                                <p class="mb-1">Kadaluwarsa</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <!-- End of Cards -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Mixed Chart</h5>
                    </div>
                    <div class="my-2" id="mixed-chart-2"></div>
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
                    <div class="my-2" id="bar-chart-3"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
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
        <div class="col-lg-6">
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
    {{-- <script src="{{ asset('assets') }}/js/pages/dashboard-default.js"></script> -- --}}
    <script src="{{ asset('assets') }}/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    {{-- <script src="{{ asset('assets') }}//js/pages/chart-apex.js"></script> --}}
    <script>
        var options_bar_chart_3 = {
            chart: {
                height: 350,
                type: 'bar'
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    dataLabels: {
                        position: 'top'
                    }
                }
            },
            colors: ['#4680FF', '#2CA87F'],
            dataLabels: {
                enabled: true,
                offsetX: -6,
                style: {
                    fontSize: '12px',
                    colors: ['#fff']
                }
            },
            stroke: {
                show: true,
                width: 1,
                colors: ['#fff']
            },
            series: [{
                    data: [44, 55, 41, 64, 22, 43, 21, 35, 50]
                },
                {
                    data: [53, 32, 33, 52, 13, 44, 32, 40, 120]
                }
            ],
            xaxis: {
                categories: [
                    'AJAP',
                    'AKAP',
                    'AKDP',
                    'Alat Berat',
                    'Angkot/Angdes',
                    'Angkutan B3',
                    'Angkutan Barang Umum',
                    'Angkutan Lintas Batas Negara',
                    'Pariwisata'
                ]
            }
        };
        var chart_bar_chart_3 = new ApexCharts(document.querySelector('#bar-chart-3'), options_bar_chart_3);
        chart_bar_chart_3.render();


        var options_pie_chart_2 = {
            chart: {
                height: 320,
                type: 'donut'
            },
            series: [44, 55, 41, 17, 15, 23, 30, 22], // Tambahkan total sesuai jumlah data
            colors: ['#4680FF', '#E58A00', '#2CA87F', '#3EC9D6', '#9B59B6', '#006400', '#DC2626',
                '#F4D03F'
            ], // Warna tambahan
            labels: [
                'Pengajuan',
                'Tidak Lulus Penilaian',
                'Lulus Penilaian',
                'Lulus Verifikasi Penilaian',
                'Wawancara Terjadwal',
                'Verifikasi Direktur',
                'Ditolak',
                'Kadaluwarsa'
            ], // Tambahkan label untuk mencocokkan data
            legend: {
                show: false,
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    donut: {
                        labels: {
                            show: true,
                            name: {
                                show: false
                            },
                            value: {
                                show: true
                            }
                        }
                    }
                }
            },
            dataLabels: {
                enabled: true,
                dropShadow: {
                    enabled: false
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var chart_pie_chart_2 = new ApexCharts(document.querySelector('#pie-chart-2'), options_pie_chart_2);
        chart_pie_chart_2.render();


        var options_mixed_chart_2 = {
            chart: {
                height: 350,
                type: 'line',
                stacked: false
            },
            stroke: {
                width: [0, 2, 5],
                curve: 'smooth'
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%'
                }
            },
            colors: ['#DC2626', '#4680FF', '#E58A00'],
            series: [{
                    name: 'Facebook',
                    type: 'column',
                    data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
                },
                {
                    name: 'Vine',
                    type: 'area',
                    data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
                },
                {
                    name: 'Dribbble',
                    type: 'line',
                    data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
                }
            ],
            fill: {
                opacity: [0.85, 0.25, 1],
                gradient: {
                    inverseColors: false,
                    shade: 'light',
                    type: 'vertical',
                    opacityFrom: 0.85,
                    opacityTo: 0.55,
                    stops: [0, 100, 100, 100]
                }
            },
            labels: [
                '01/01/2003',
                '02/01/2003',
                '03/01/2003',
                '04/01/2003',
                '05/01/2003',
                '06/01/2003',
                '07/01/2003',
                '08/01/2003',
                '09/01/2003',
                '10/01/2003',
                '11/01/2003'
            ],
            markers: {
                size: 0
            },
            xaxis: {
                type: 'datetime'
            },
            yaxis: {
                min: 0
            },
            tooltip: {
                shared: true,
                intersect: false,
                y: {
                    formatter: function(y) {
                        if (typeof y !== 'undefined') {
                            return y.toFixed(0) + ' views';
                        }
                        return y;
                    }
                }
            },
            legend: {
                labels: {
                    useSeriesColors: true
                },
                markers: {
                    customHTML: [
                        function() {
                            return '';
                        },
                        function() {
                            return '';
                        },
                        function() {
                            return '';
                        }
                    ]
                }
            }
        };
        var charts_mixed_chart_2 = new ApexCharts(document.querySelector('#mixed-chart-2'), options_mixed_chart_2);
        charts_mixed_chart_2.render();

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
