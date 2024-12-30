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
                                                <div
                                                    class="wid-60 hei-60 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
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

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel"
                            aria-labelledby="analytics-tab-1" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne"
                                            style="background: linear-gradient(90deg, rgb(4, 60, 132) 0%, rgb(69, 114, 184) 100%);
                                            color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px;
                                            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">

                                            <i class="fa-regular fa-file-lines me-2"></i>
                                            <span class="fw-bold me-2 me-lg-0">1.1</span> &nbsp;
                                            <span class="text-uppercase">Komitmen dan Kebijakan Keselamatan</span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
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
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                                Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1.2</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Perusahaan mempunyai komitmen yang kuat dari Manajemen yang
                                                                terdokumentasikan, tertulis dan ditandatangani oleh Pimpinan
                                                                Perusahaan tertinggi sebagai langkah nyata terhadap aspek
                                                                keselamatan yang ditunjukkan dalam sikap sehari-hari</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                            <td>Tidak ada perubahan</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1.3</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Perusahaan mempunyai komitmen yang kuat dari Manajemen yang
                                                                terdokumentasikan, tertulis dan ditandatangani oleh Pimpinan
                                                                Perusahaan tertinggi sebagai langkah nyata terhadap aspek
                                                                keselamatan yang ditunjukkan dalam sikap sehari-hari</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                            <td>
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge bg-success">Sesuai</span></td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo"
                                            style="background: linear-gradient(90deg, rgb(4, 60, 132) 0%, rgb(69, 114, 184) 100%);
                                            color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px;
                                            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">

                                            <i class="fa-regular fa-file-lines me-2"></i>
                                            <span class="fw-bold me-2 me-lg-0">2.1</span> &nbsp;
                                            <span class="text-uppercase">Pengorganisasian</span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
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
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Deskripsi Pengorganisasian</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.2</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Perusahaan mempunyai struktur organisasi pengelolaan di
                                                                bidang
                                                                keselamatan, seperti Unit Manajemen Keselamatan atau Petugas
                                                                Keselamatan</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                            <td>Tidak ada perubahan</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.3</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Perusahaan dapat menjabarkan uraian tugas dan fungsi di
                                                                masing-masing jabatan pada struktur organisasi hubungan
                                                                antar
                                                                struktur organisasi tersebut</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                            <td>
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge bg-success">Sesuai</span></td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree"
                                            style="background: linear-gradient(90deg, rgb(4, 60, 132) 0%, rgb(69, 114, 184) 100%);
                                            color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px;
                                            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">

                                            <i class="fa-regular fa-file-lines me-2"></i>
                                            <span class="fw-bold me-2 me-lg-0">3.1</span> &nbsp;
                                            <span class="text-uppercase">Manajemen Bahaya Dan Risiko</span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
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
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Deskripsi Manajemen Bahaya dan Risiko (Persyaratan,
                                                                Ekspektasi,
                                                                Implementasi, Prosedur Terkait)</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.2</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Perusahaan telah memiliki prosedur identifikasi bahaya,
                                                                penilaian dan pengendalian risiko secara komprehensif baik
                                                                terhadap personel, sarana angkutan, penumpang maupun
                                                                lingkungan
                                                                untuk setiap tahapan operasi pengangkutan</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Apakah terdapat perubahan pada dokumen Struktur Organisasi
                                                            </td>
                                                            <td>Tidak ada perubahan</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.3</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Perusahaan telah melakukan identifikasi bahaya, penilaian
                                                                dan
                                                                pengendaliannya dengan metode yang sesuai dengan
                                                                karakteristik
                                                                bahaya yang ada, memiliki matrik penilaian bahaya dan
                                                                risiko,
                                                                matrik identifikasi bahaya, penilaian dan pengendalian
                                                                risiko di
                                                                kantor, bengkel dan operasional serta matrik identifikasi
                                                                bahaya
                                                                lalu lintas</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                            <td>
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td><span class="badge bg-success">Sesuai</span></td>
                                                            <td>-</td>
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
