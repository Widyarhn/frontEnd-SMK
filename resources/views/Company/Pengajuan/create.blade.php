@extends('...Company.index', ['title' => 'Form Pengajuan Sertifikat | SMK-PAU'])
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

    <style>
        .nav-wrapper {
            max-width: 100%;
            overflow-x: auto;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        .nav-wrapper::-webkit-scrollbar {
            height: 6px;
        }

        .nav-wrapper::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 10px;
        }

        .nav-wrapper::-webkit-scrollbar-thumb:hover {
            background: #555;
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
                        <li class="breadcrumb-item" aria-current="page">Form Pengajuan Sertifikat</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Form Pengajuan Sertifikat</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="basicwizard" class="form-wizard row justify-content-center">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="nav-wrapper" style="overflow-x: auto; white-space: nowrap;">
                        <ul class="nav nav-pills nav-justified" id="wizardTabs">
                            <li class="nav-item" data-target-form="#formDocuments">
                                <a href="#formDocuments" data-bs-toggle="tab" class="nav-link active">
                                    <span class="fw-bold f-18"><i class="fa-solid fa-file-lines me-2"></i>Dokumen</span>
                                </a>
                            </li>
                            <li class="nav-item" data-target-form="#1detail">
                                <a href="#1.1Detail" data-bs-toggle="tab" class="nav-link">
                                    <span class="fw-bold f-18"><i class="fa-solid fa-shield me-2"></i>1.1</span>
                                </a>
                            </li>
                            <li class="nav-item" data-target-form="#2detail">
                                <a href="#2.1Detail" data-bs-toggle="tab" class="nav-link">
                                    <span class="fw-bold f-18"><i class="fa-solid fa-shield me-2"></i>2.1</span>
                                </a>
                            </li>
                            <!-- Dynamically add more tabs here -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="formDocuments">
                            <form id="formDocuments" method="get">
                                <div class="text-center">
                                    <h3 class="mb-4">Dokumen/Form Yang Harus Dilengkapi</h3>
                                </div>
                                <div class="row mt-5">
                                    <!-- Jenis Pelayanan -->
                                    <div class="col-12 mb-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example" disabled>
                                                <option selected>AJAP</option>
                                                <option value="1">AJAP</option>
                                            </select>
                                            <label for="floatingSelect">Jenis Pelayanan</label>
                                        </div>
                                    </div>
                                    <!-- Nomor Surat -->
                                    <div class="col-lg-6 col-12 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nomorSurat" placeholder="" />
                                            <label for="nomorSurat">Nomor Surat</label>
                                        </div>
                                    </div>
                                    <!-- Tanggal Surat -->
                                    <div class="col-lg-6 col-12 mb-4">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="tanggalSurat" />
                                            <label for="tanggalSurat">Tanggal Surat</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-4">
                                        <label class="mb-2">Upload Surat Permohonan Penilaian</label>
                                        <div class="mb-3">
                                            <input class="form-control" type="file" />
                                            <small class="text-muted">Maksimal ukuran file 5 MB.</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-4 d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avtar avtar-xs btn-light-primary">
                                                    <a href="path/to/template-surat.pdf"
                                                        download="Template_Surat_Permohonan_Penilaian.pdf"
                                                        title="Download Template">
                                                        <i class="f-16 fa-solid fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Unduh Template Surat Permohonan Penilaian</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="1.1Detail">
                            <form id="1detail" method="post" action="#">
                                <div class="text-center">
                                    <h3 class="mb-2">Komitmen dan Kebijakan Keselamatan</h3>
                                    <small style="color: blue">Maksimal ukuran file yang diunggah 5 MB.</small>
                                </div>
                                <div class="table-responsive py-5">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Uraian</th>
                                                <th>Dokumen / Bukti Dukungan Jawaban</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.1</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan, Ekspektasi,
                                                    Implementasi, Prosedur Terkait)</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Deskripsi Komitmen dan Kebijakan Keselamatan</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    File Deskripsi Komitmen dan Kebijakan Keselamatan Persyaratan,
                                                    Ekspektasi, Implementasi, Prosedur Terkait
                                                    <div class="col-lg-6 col-12 mb-4">
                                                        <label class="mb-2">Upload Surat Permohonan Penilaian</label>
                                                        <div class="mb-3">
                                                            <input class="form-control" type="file" />
                                                            <small class="text-muted">Maksimal ukuran file 5 MB.</small>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1.2</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Perusahaan mempunyai komitmen yang kuat dari Manajemen yang
                                                    terdokumentasikan, tertulis dan ditandatangani oleh Pimpinan Perusahaan
                                                    tertinggi sebagai lamngkah nyata terhadap aspek keselamatan yang
                                                    ditunjukkan dalam sikap sehari-hari</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Bukti Pernyataan Dokumen (foto pernyataan komitmen)</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    File Dokumen Komitmen
                                                    <div class="col-lg-6 col-12 mb-4">
                                                        <label class="mb-2">Upload Surat Permohonan Penilaian</label>
                                                        <div class="mb-3">
                                                            <input class="form-control" type="file" />
                                                            <small class="text-muted">Maksimal ukuran file 5 MB.</small>
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
                            <form id="2detail" method="post" action="#">
                                <div class="text-center">
                                    <h3 class="mb-2">Pengorganisasian</h3>
                                    <small style="color: blue">Maksimal ukuran file yang diunggah 5 MB.</small>
                                </div>
                                <div class="table-responsive py-5">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Uraian</th>
                                                <th>Dokumen / Bukti Dukungan Jawaban</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2.1</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Pengorganisasian</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Pengorganisasian (Persyaratan, Ekspektasi, Implementasi,
                                                    Prosedur Terkait)</td>
                                                    <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Deskripsi Komitmen dan Kebijakan Keselamatan Persyaratan,
                                                    Ekspektasi, Implementasi, Prosedur Terkait
                                                    <div class="col-lg-6 col-12 mb-4">
                                                        <label class="mb-2">Upload Surat Permohonan Penilaian</label>
                                                        <div class="mb-3">
                                                            <input class="form-control" type="file" />
                                                            <small class="text-muted">Maksimal ukuran file 5 MB.</small>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.2</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan mempunyai struktur organisasi pengelolaan di bidang
                                                    keselamatan, seperti Unit Manajemen Keselamatan atau Petugas Keselamatan
                                                </td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Dokumen struktur organisasi Unit Manajemen Keselamatan Petugas
                                                    Keselamatan</td>
                                                    <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Struktur Organisasi
                                                    <div class="col-lg-6 col-12 mb-4">
                                                        <label class="mb-2">Upload Surat Permohonan Penilaian</label>
                                                        <div class="mb-3">
                                                            <input class="form-control" type="file" />
                                                            <small class="text-muted">Maksimal ukuran file 5 MB.</small>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <!-- Dynamically add more tab panes here -->
                        <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                            <div class="first">
                                <button type="button" class="btn btn-light">Simpan Sebagai Draft</button>
                            </div>
                            <div class="d-flex">
                                <div class="previous me-2">
                                    <button type="button" class="btn btn-secondary kembali">Kembali</button>
                                </div>
                                <div class="next">
                                    <button type="button" class="btn btn-primary selanjutnya">Selanjutnya</button>
                                </div>
                            </div>
                            <div class="last">
                                <button type="button" class="btn btn-success">Kirim Pengajuan</button>
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
        document.addEventListener("DOMContentLoaded", function() {
            const wizardTabs = document.getElementById("wizardTabs");

            // Scroll to active tab on load
            const activeTab = wizardTabs.querySelector(".nav-link.active");
            if (activeTab) {
                activeTab.scrollIntoView({
                    behavior: "smooth",
                    block: "nearest",
                    inline: "center"
                });
            }

            // Add event listener to tabs for active scrolling
            const tabs = wizardTabs.querySelectorAll(".nav-link");
            tabs.forEach(tab => {
                tab.addEventListener("click", function() {
                    this.scrollIntoView({
                        behavior: "smooth",
                        block: "nearest",
                        inline: "center"
                    });
                });
            });
        });
    </script>
@endsection
