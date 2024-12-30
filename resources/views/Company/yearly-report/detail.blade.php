@extends('...Company.index', ['title' => 'Laporan | Laporan Tahunan'])
@section('asset_css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/style.css" />
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <script src="{{ asset('assets') }}/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
@endsection

@section('page_css')
    <style>
        .accordion-button:not(.collapsed) {
            color: #0d6efd;
            background-color: #f8f9fa;
        }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/company/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/company/yearly-report/list">Laporan Tahunan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail Laporan Tahunan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Laporan Tahunan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="basicwizard" class="form-wizard row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-8 col-12">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="col-sm-auto mb-3 mb-sm-0 me-3">
                                            <div class="d-sm-inline-block d-flex align-items-center">
                                                <div class="wid-60 hei-60 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-building text-white fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex flex-column flex-sm-row align-items-center">
                                                <h4 class="d-inline-block mb-0 me-2">PT TRISTAR JAVA TRANSINDO |</h4>
                                                <p class="mb-0"><b>NIB : 9120109831421</b></p>
                                            </div>



                                            <!-- Nomor telepon dan informasi lainnya di bawah h4 dan p -->
                                            <div class="help-sm-hidden">
                                                <ul class="list-unstyled mt-0 mb-0 text-muted">
                                                    <li class="d-sm-inline-block d-block mt-1 me-3">
                                                        <i class="fa-solid fa-phone me-1"></i>
                                                        +6289 4562 8963
                                                    </li>
                                                    <li class="d-sm-inline-block d-block mt-1 me-3">
                                                        <i class="fa-regular fa-envelope me-1"></i>
                                                        tristarjava@mail.com
                                                    </li>
                                                    <li class="d-sm-inline-block d-block mt-1 me-3">
                                                        <i class="fa-solid fa-location-dot me-1"></i>
                                                        Street 110-B Kalians Bag, Dewan, M.P. New York
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 d-flex">
                            <div class="border rounded p-3 w-100">
                                <h5>Jenis Pelayanan</h5>
                                <ol>
                                    <li>AJAP</li>
                                    <li>Angkutan barang umum</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 d-flex">
                            <div class="border rounded p-3 w-100">
                                <h5>Penanggung Jawab</h5>
                                <p class="mb-0"><i class="fa-solid fa-user me-2"></i>Ang Hoey Tiong</p>
                                <p class="mb-0"><i class="fa-solid fa-phone me-2"></i>(970) 982-3353</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 d-flex">
                            <div class="border rounded p-3 w-100">
                                <h5>Sertifilat SMK</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0">No. Sertifikat</p>
                                        <p class="mb-0"><i class="fa-solid fa-file me-2"></i>SK/90012/12/1299/XVI</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0">Tahun Laporan
                                        </p>
                                        <p class="mb-0"><i class="fa-solid fa-calendar-day me-2"></i>2023</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                <i class="fas fa-file me-2"></i><strong>1. Komitmen dan Kebijakan Keselamatan</strong>
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form id="contactForm" method="get">
                                    <div class="table-responsive py-5">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Uraian</th>
                                                    <th class="text-center">
                                                        Pertanyaan Monitoring</th>
                                                    <th class="text-center">
                                                        Status</th>
                                                    <th class="text-center"> Jawaban
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.1</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.?</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-light-success">Jawaban
                                                            Terverifikasi</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="mt-2 text-center">
                                                            <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                                class="btn btn-sm btn-primary"
                                                                style="border-radius: 5px; padding: 6px 12px; font-size: 12px;">
                                                                <i class="feather icon-eye me-2"></i>Lihat Dokumen
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1.2</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.?</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-light-success">Jawaban
                                                            Terverifikasi</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="mt-2 text-center">
                                                            <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                                class="btn btn-sm btn-primary"
                                                                style="border-radius: 5px; padding: 6px 12px; font-size: 12px;">
                                                                <i class="feather icon-eye me-2"></i>Lihat Dokumen
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>1.2</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.?</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-light-secondary">Tidak ada perubahan</span>
                                                    </td>
                                                    <td class="text-center">
                                                        -
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                <i class="fas fa-file me-2"></i><strong>2. Pengorganisasian</strong>
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form id="jobForm" method="post" action="#">
                                    <div class="table-responsive py-5">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Uraian</th>
                                                    <th class="text-center">
                                                        Pertanyaan Monitoring</th>
                                                    <th class="text-center">
                                                        Status</th>
                                                    <th class="text-center"> Jawaban
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.1</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.?</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-light-success">Jawaban
                                                            Terverifikasi</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="mt-2 text-center">
                                                            <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                                class="btn btn-sm btn-primary"
                                                                style="border-radius: 5px; padding: 6px 12px; font-size: 12px;">
                                                                <i class="feather icon-eye me-2"></i>Lihat Dokumen
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1.2</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.?</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-light-success">Jawaban
                                                            Terverifikasi</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="mt-2 text-center">
                                                            <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                                class="btn btn-sm btn-primary"
                                                                style="border-radius: 5px; padding: 6px 12px; font-size: 12px;">
                                                                <i class="feather icon-eye me-2"></i>Lihat Dokumen
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>1.2</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.</td>
                                                    <td
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                        eget nisl nec turpis commodo pellentesque. Aliquam rhoncus risus
                                                        sed mi vulputate, ac finibus ante bibendum.?</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-light-secondary">Tidak ada perubahan</span>
                                                    </td>
                                                    <td class="text-center">
                                                        -
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ asset('assets') }}/js/plugins/wizard.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionItems = document.querySelectorAll('.accordion-button');
            const collapseElements = document.querySelectorAll('.accordion-collapse');

            // Pastikan semua accordion terbuka saat halaman dimuat
            collapseElements.forEach((collapseElement) => {
                if (!collapseElement.classList.contains('show')) {
                    collapseElement.classList.add('show');
                }
            });

            accordionItems.forEach((button) => {
                button.addEventListener('click', function() {
                    const collapseItem = this.getAttribute('data-bs-target');
                    const collapseElement = document.querySelector(collapseItem);

                    if (collapseElement.classList.contains('show')) {
                        collapseElement.classList.remove('show');
                    } else {
                        collapseElement.classList.add('show');
                    }
                });
            });
        });


        document.addEventListener("DOMContentLoaded", function() {
            const dropdownMenu = document.querySelector("#dropdownTahun + .dropdown-menu");
            const currentYear = new Date().getFullYear();

            // Menambahkan hanya 5 tahun terakhir
            for (let i = 0; i < 5; i++) {
                const year = currentYear - i;
                const li = document.createElement("li");
                li.innerHTML = `<a class="dropdown-item" href="#">${year}</a>`;
                dropdownMenu.appendChild(li);
            }
        });
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
            if (e.target.classList.contains("btn-yes") || e.target.classList.contains("btn-no")) {
                const yesButton = e.target.closest(".btn-group").querySelector(".btn-yes");
                const noButton = e.target.closest(".btn-group").querySelector(".btn-no");
                const hiddenInput = e.target.closest("td").querySelector(".response-value");

                if (e.target.classList.contains("btn-yes")) {
                    yesButton.classList.add("active");
                    noButton.classList.remove("active");
                    hiddenInput.value = "Iya";
                } else if (e.target.classList.contains("btn-no")) {
                    noButton.classList.add("active");
                    yesButton.classList.remove("active");
                    hiddenInput.value = "Tidak";
                }
            }
            if (e.target.classList.contains("btn-yes2") || e.target.classList.contains("btn-no2")) {
                const yesButton = e.target.closest(".btn-group").querySelector(".btn-yes2");
                const noButton = e.target.closest(".btn-group").querySelector(".btn-no2");
                const hiddenInput = e.target.closest("td").querySelector(".response-value2");

                if (e.target.classList.contains("btn-yes2")) {
                    yesButton.classList.add("active");
                    noButton.classList.remove("active");
                    hiddenInput.value = "Iya";
                } else if (e.target.classList.contains("btn-no2")) {
                    noButton.classList.add("active");
                    yesButton.classList.remove("active");
                    hiddenInput.value = "Tidak";
                }
            }
        });
    </script>
@endsection
