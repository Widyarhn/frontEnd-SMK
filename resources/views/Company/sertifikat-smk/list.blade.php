@extends('...Company.index', ['title' => 'Sertifikat SMK'])
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
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/company/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Permohonan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Sertifikat SMK</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Sertifikat SMK</h2>
                    </div>
                    <a href="/company/pengajuan-sertifikat/create" data-pc-animate="fade-in-scale"
                        class="btn btn-md btn-primary px-3 p-2">
                        <i class="fas fa-plus-circle me-2"></i> Buat Permohonan
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row"><!-- [ sample-page ] start -->
        <div class="col-12">
            <div class="table-responsive">
                <div class="datatable-wrapper datatable-loading no-footer searchable fixed-columns">
                    <div class="datatable-top">
                        <div class="datatable-dropdown">
                            <label>
                                <select class="datatable-selector">
                                    <option value="5">5</option>
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                </select> entries per page
                            </label>
                        </div>
                        <div class="datatable-search">
                            <input class="datatable-input" placeholder="Search..." type="search"
                                title="Search within table" aria-controls="pc-dt-simple-1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 help-main large-view">
                    <div class="card ticket-card open-ticket">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-auto mb-3 mb-sm-0">
                                    <div class="d-sm-inline-block d-flex align-items-center">
                                        <img class="media-object wid-60 img-radius"
                                            src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="ms-3 ms-sm-0">
                                            <ul class="text-sm-center list-unstyled mt-2 mb-0 d-inline-block">
                                                <li class="list-unstyled-item"><a href="#" class="link-secondary">1
                                                        Catatan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="popup-trigger">
                                        <div class="h5 font-weight-bold">No. Surat Permohonan:
                                            PMH/090/123/22212</div>
                                        <div class="help-sm-hidden">
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1">
                                                    <i class="ti ti-file-certificate"></i>
                                                    <span class="badge bg-light-primary">Pengajuan
                                                        Baru</span>
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1">
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt="" class="wid-20 rounded me-2 img-fluid">Diproses
                                                    Oleh <b>Penilai</b>
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1">
                                                    <i
                                                        class="wid-20 material-icons-two-tone text-center f-14 me-2">calendar_today</i>Diajukan
                                                    1 hari yang lalu
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1">
                                                    <i
                                                        class="wid-20 material-icons-two-tone text-center f-14 me-2">calendar_today</i>Terakhir
                                                    diubah 22 jam yang lalu
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="h5 mt-3">
                                            <i class="material-icons-two-tone f-16 me-1">notification_important</i>Catatan
                                            Permohonan
                                        </div>
                                        <div class="help-md-hidden">
                                            <div class="bg-body mb-3 p-3">
                                                <h6>
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt="" class="wid-20 avatar me-2 rounded">
                                                    Last comment from <a href="#" class="link-secondary">Robert
                                                        alia:</a>
                                                </h6>
                                                <p class="mb-0">
                                                    <b>hello John lui</b>,<br>you need to create
                                                    <b>"toolbar-options" div only</b> once in a
                                                    page<br>in your code,<br>this div fill found
                                                    every
                                                    "td" tag in your page,<br>just...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <button type="button" class="me-2 btn btn-sm btn-light-danger"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            <i class="ti ti-eye me-1"></i> Lihat Catatan
                                        </button>
                                        <a href="/company/pengajuan-sertifikat/detail"
                                            class="me-2 btn btn-sm btn-light-secondary">
                                            <i class="feather icon-eye mx-1"></i>Lihat Pengajuan
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ticket-card close-ticket">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-auto mb-3 mb-sm-0">
                                    <div class="d-sm-inline-block d-flex align-items-center">
                                        <img class="media-object wid-60 img-radius"
                                            src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="ms-3 ms-sm-0">
                                            <ul class="text-sm-center list-unstyled mt-2 mb-0 d-inline-block">
                                                <li class="list-unstyled-item"><a href="#" class="link-secondary">0
                                                        Catatan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="popup-trigger">
                                        <div class="h5 font-weight-bold">No. Surat Permohonan:
                                            PMH/110/998/499012</div>
                                        <div class="help-sm-hidden">
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1">
                                                    <i class="ti ti-file-certificate"></i>
                                                    <span class="badge bg-light-success">Pengajuan
                                                        Selesai</span>
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1">
                                                    <i
                                                        class="wid-20 material-icons-two-tone text-center f-14 me-2">calendar_today</i>Diajukan
                                                    1 tahun yang lalu
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1">
                                                    <i
                                                        class="wid-20 material-icons-two-tone text-center f-14 me-2">calendar_today</i>Terakhir
                                                    diubah 1 tahun yang lalu
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="h5 mt-3">
                                            <i class="material-icons-two-tone f-16 me-1">insert_drive_file</i>Nomor
                                            Sertifikat SK/00912/99812
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                            class="me-2 btn btn-sm btn-light-primary">
                                            <i class="feather icon-eye mx-1"></i>Lihat Dokumen
                                        </a>
                                        <a href="/company/pengajuan-sertifikat/detail"
                                            class="me-2 btn btn-sm btn-light-secondary">
                                            <i class="feather icon-eye mx-1"></i>Lihat Pengajuan
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="exampleModalCenter" class="modal fade" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>


    {{-- <script src="{{ asset('assets') }}//js/pages/chart-apex.js"></script> --}}
    <script>
        // IFRAME
        const pdfUrl = 'https://storage.hubdat.dephub.go.id/tdbupj-dev/testing--yGywXxuU5hzB9256gu-c.pdf';

        const loadingTask = pdfjsLib.getDocument(pdfUrl);
        loadingTask.promise.then(function(pdf) {
            const container = document.getElementById('pdf-viewer');
            for (let i = 1; i <= pdf.numPages; i++) {
                pdf.getPage(i).then(function(page) {
                    const scale = 1.5;
                    const viewport = page.getViewport({
                        scale
                    });

                    // Create canvas element
                    const canvas = document.createElement('canvas');
                    const context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;
                    canvas.style.borderBottom = '1px solid #ddd'; // Border between pages
                    canvas.style.marginBottom = '10px'; // Margin between pages

                    // Render PDF page on canvas
                    const renderContext = {
                        canvasContext: context,
                        viewport: viewport,
                    };
                    page.render(renderContext);

                    // Append canvas to container
                    container.appendChild(canvas);
                });
            }
        }).catch(function(error) {
            console.error('Error loading PDF:', error);
            const errorMessage = document.createElement('p');
            errorMessage.textContent = 'Failed to load PDF. Please try again later.';
            document.getElementById('pdf-viewer').appendChild(errorMessage);
        });

        // Set the countdown time (e.g., 5 minutes from now)
        const skIssueDate = new Date("2023-12-29"); // Tanggal terbit SK
        const nextReportDate = new Date(skIssueDate);
        nextReportDate.setFullYear(nextReportDate.getFullYear() + 1); // Laporan tahunan setahun setelah SK

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = nextReportDate - now;

            const countdownCard = document.getElementById("countdown-card");
            const countdownMessage = document.getElementById("countdown-message");
            const countdownIcon = document.getElementById("countdown-icon");

            if (distance >= 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("countdown").innerHTML =
                    `${days}d ${hours.toString().padStart(2, '0')}h ${minutes.toString().padStart(2, '0')}m ${seconds.toString().padStart(2, '0')}s`;

                // Update warna, pesan, dan ikon berdasarkan sisa waktu
                if (days > 30) {
                    countdownCard.style.background = "rgba(60, 179, 113, 0.8)"; // Hijau: Waktu masih lama
                    countdownMessage.textContent = "Waktu Anda Masih Panjang";
                    countdownIcon.className = "fa fa-smile"; // Ikon senyum
                } else if (days <= 30 && days > 7) {
                    countdownCard.style.background = "rgba(255, 255, 0, 0.8)"; // Kuning: Waktu mendekati deadline
                    countdownMessage.textContent = "Jangan Lupa Siapkan Laporan";
                    countdownIcon.className = "fa fa-exclamation-circle"; // Ikon peringatan
                } else {
                    countdownCard.style.background = "rgba(255, 0, 0, 0.8)"; // Merah: Deadline sudah dekat
                    countdownMessage.textContent = "Segera Kirimkan Laporan Anda";
                    countdownIcon.className = "fa fa-times-circle"; // Ikon bahaya
                }
            } else {
                document.getElementById("countdown").innerHTML = "Waktu Habis!";
                countdownCard.style.background = "rgba(128, 128, 128, 0.8)"; // Abu-abu: Waktu habis
                countdownMessage.textContent = "Laporan tahunan belum dilakukan!";
                countdownIcon.className = "fa fa-ban"; // Ikon larangan
            }
        }

        // Update countdown setiap detik
        setInterval(updateCountdown, 1000);


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
