
@extends('...Administrator.index', ['title' => 'Tambah Element SMK | Master Data Element'])
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

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/element-pemantauan/list">Master Data Elemen</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail Data Element Pemantauan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Detail Data Element Pemantauan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
                                                <td>Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                    Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>1.2</td>
                                                <td>Perusahaan mempunyai komitmen yang kuat dari Manajemen yang terdokumentasikan, tertulis dan ditandatangani oleh Pimpinan Perusahaan tertinggi sebagai langkah nyata terhadap aspek keselamatan yang ditunjukkan dalam sikap sehari-hari</td>
                                                <td>Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                <td>Tidak ada perubahan</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>1.2</td>
                                                <td>Perusahaan mempunyai komitmen yang kuat dari Manajemen yang terdokumentasikan, tertulis dan ditandatangani oleh Pimpinan Perusahaan tertinggi sebagai langkah nyata terhadap aspek keselamatan yang ditunjukkan dalam sikap sehari-hari</td>
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
                                                <td>Deskripsi Pengorganisasian</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>2.2</td>
                                                <td>Perusahaan mempunyai struktur organisasi pengelolaan di bidang keselamatan, seperti Unit Manajemen Keselamatan atau Petugas Keselamatan</td>
                                                <td>Apakah terdapat perubahan pada dokumen Komitmen</td>
                                                <td>Tidak ada perubahan</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>2.3</td>
                                                <td>Perusahaan dapat menjabarkan uraian tugas dan fungsi di masing-masing jabatan pada struktur organisasi hubungan antar struktur organisasi tersebut</td>
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
                                                <td>Deskripsi Manajemen Bahaya dan Risiko (Persyaratan, Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>3.2</td>
                                                <td>Perusahaan telah memiliki prosedur identifikasi bahaya, penilaian dan pengendalian risiko secara komprehensif baik terhadap personel, sarana angkutan, penumpang maupun lingkungan untuk setiap tahapan operasi pengangkutan</td>
                                                <td>Apakah terdapat perubahan pada dokumen Struktur Organisasi</td>
                                                <td>Tidak ada perubahan</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>3.3</td>
                                                <td>Perusahaan telah melakukan identifikasi bahaya, penilaian dan pengendaliannya dengan metode yang sesuai dengan karakteristik bahaya yang ada, memiliki matrik penilaian bahaya dan risiko, matrik identifikasi bahaya, penilaian dan pengendalian risiko di kantor, bengkel dan operasional serta matrik identifikasi bahaya lalu lintas</td>
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
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ asset('assets') }}/js/plugins/wizard.min.js"></script>
    
    {{-- <script>

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
    </script> --}}
@endsection
