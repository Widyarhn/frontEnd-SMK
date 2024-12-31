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
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-center align-items-center text-center">
                    <div>
                        <div class="avtar bg-light-primary mx-auto mb-3">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <p class="mb-1">Total Dokumen Penilaian</p>
                        <div class="d-flex align-items-start justify-content-center">
                            <h4 class="mb-0 me-2">10</h4>
                            <span class="fw-bold f-16">Dokumen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-center align-items-center text-center">
                    <div>
                        <div class="avtar bg-light-success mx-auto mb-3">
                            <i class="fa-solid fa-file-circle-check"></i>
                        </div>
                        <p class="mb-1">Lulus Penilaian</p>
                        <div class="d-flex align-items-start justify-content-center">
                            <h4 class="mb-0 me-2">4</h4>
                            <span class="fw-bold f-16">Lulus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-center align-items-center text-center">
                    <div>
                        <div class="avtar bg-light-danger mx-auto mb-3">
                            <i class="fa-solid fa-file-circle-exclamation"></i>
                        </div>
                        <p class="mb-1">Tidak Lulus Penilaian</p>
                        <div class="d-flex align-items-start justify-content-center">
                            <h4 class="mb-0 me-2">3</h4>
                            <span class="fw-bold f-16">Tidak Lulus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-center align-items-center text-center">
                    <div>
                        <div class="avtar bg-light-primary mx-auto mb-3">
                            <i class="fa-solid fa-percent"></i>
                        </div>
                        <p class="mb-1">Presentase Penilaian Lulus</p>
                        <div class="d-flex align-items-start justify-content-center">
                            <h4 class="mb-0 me-2">12%</h4>
                            <span class="fw-bold f-16"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <!-- Kolom Surat Permohonan -->
        <div class="col-12 col-md-8">
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Surat Permohonan</h5>
                    <button class="btn btn-secondary btn-sm" title="Log Aktivitas" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter">
                        <i class="fa-solid fa-clock me-2"></i>Log
                    </button>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2">Nomor Surat :</label>
                            <div class="media-body">
                                <p class="mb-0"><i class="fa-solid fa-file me-1"></i><label
                                        class="mb-0">123/ABC/2024</label></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2">Tanggal Surat :</label>
                            <div class="media-body">
                                <p class="mb-0"><i class="fa-solid fa-calendar me-1"></i><label class="mb-0">12
                                        Desember 2024</label></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <a href="#">
                                    <p class="mb-0"><i class="fa-regular fa-file-pdf me-1"></i><label
                                            class="mb-0">Lihat Dokumen</label></p>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Kolom Detail Pengajuan Sertifikat -->
        <div class="col-12 col-md-4">
            <div class="card mt-4">
                <div class="card-header">
                    <h5>Detail Pengajuan Sertifikat</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2 fw-bold">Jenis Pelayanan :</label>
                            <div class="media-body">
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
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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
                                            <span class="fw-bold me-2 me-lg-0">1.</span> &nbsp;
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
                                                            <th>Dokumen / Bukti Dukung Jawaban</th>
                                                            <th>Jawaban Sebelumnya</th>
                                                            <th>Penilaian</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.1</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                                Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Deskripsi Komitmen dan Kebijakan Keselamatan</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                File Deskripsi Komitmen dan Kebijakan Keselamatan
                                                                Persyaratan, Ekspektasi, Implementasi, Prosedur Terkait
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex"><span class="me-5">Point:</span>
                                                                    <h4 class="text-center"> 2.5</h4>
                                                                </div>
                                                                <span class="badge bg-success">Sesuai</span>
                                                            </td>
                                                        </tr>
                                                        <tr style="background: #FFFFB8;">
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
                                                            <td>
                                                                File Dokumen Komitmen
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex"><span class="me-5">Point:</span>
                                                                    <h4 class="text-center"> 1.5</h4>
                                                                </div>
                                                                <span class="badge bg-danger">Tidak Sesuai</span>
                                                            </td>
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
                                                                File Dokumen Kebijakan
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex"><span class="me-5">Point:</span>
                                                                    <h4 class="text-center"> 2.5</h4>
                                                                </div>
                                                                <span class="badge bg-success">Sesuai</span>
                                                            </td>
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
                                            <span class="fw-bold me-2 me-lg-0">2.</span> &nbsp;
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
                                                            <th>Dokumen / Bukti Dukung Jawaban</th>
                                                            <th>Jawaban Sebelumnya</th>
                                                            <th>Penilaian</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2.1</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                                Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Deskripsi Komitmen dan Kebijakan Keselamatan</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                File Deskripsi Komitmen dan Kebijakan Keselamatan
                                                                Persyaratan, Ekspektasi, Implementasi, Prosedur Terkait
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex"><span class="me-5">Point:</span>
                                                                    <h4 class="text-center"> 2.5</h4>
                                                                </div>
                                                                <span class="badge bg-success">Sesuai</span>
                                                            </td>
                                                        </tr>
                                                        <tr style="background: #FFFFB8;">
                                                            <td>2.2</td>
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
                                                                File Dokumen Komitmen
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex"><span class="me-5">Point:</span>
                                                                    <h4 class="text-center"> 1.5</h4>
                                                                </div>
                                                                <span class="badge bg-danger">Tidak Sesuai</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.3</td>
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
                                                                File Dokumen Kebijakan
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex"><span class="me-5">Point:</span>
                                                                    <h4 class="text-center"> 2.5</h4>
                                                                </div>
                                                                <span class="badge bg-success">Sesuai</span>
                                                            </td>
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
                                            <span class="fw-bold me-2 me-lg-0">3.</span> &nbsp;
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
                                                            <th>Dokumen / Bukti Dukung Jawaban</th>
                                                            <th>Jawaban Sebelumnya</th>
                                                            <th>Penilaian</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>3.1</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                                Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                Deskripsi Komitmen dan Kebijakan Keselamatan</td>
                                                            <td
                                                                style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                                File Deskripsi Komitmen dan Kebijakan Keselamatan
                                                                Persyaratan, Ekspektasi, Implementasi, Prosedur Terkait
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex"><span class="me-5">Point:</span>
                                                                    <h4 class="text-center"> 2.5</h4>
                                                                </div>
                                                                <span class="badge bg-success">Sesuai</span>
                                                            </td>
                                                        </tr>
                                                        <tr style="background: #FFFFB8;">
                                                            <td>3.2</td>
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
                                                                File Dokumen Komitmen
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex"><span class="me-5">Point:</span>
                                                                    <h4 class="text-center"> 1.5</h4>
                                                                </div>
                                                                <span class="badge bg-danger">Tidak Sesuai</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.3</td>
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
                                                                File Dokumen Kebijakan
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex"><span class="me-5">Point:</span>
                                                                    <h4 class="text-center"> 2.5</h4>
                                                                </div>
                                                                <span class="badge bg-success">Sesuai</span>
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
                </div>
            </div>
        </div>
    </div>

    <div id="exampleModalCenter" class="modal fade" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Log Aktivitas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="task-card p-3" style="max-height: 200px; overflow-y: auto;">
                        <ul class="list-unstyled task-list">
                            <li>
                                <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                                <p class="m-b-5">8:50</p>
                                <h5 class="text-muted">Call to customer <span class="text-primary"> <a href="#!" class="text-primary">Jacob</a> </span> and discuss the
                                </h5>
                            </li>
                            <li>
                                <i class="task-icon bg-primary"></i>
                                <p class="m-b-5">Sat, 5 Mar</p>
                                <h5 class="text-muted">Design mobile Application</h5>
                            </li>
                            <li>
                                <i class="task-icon bg-danger"></i>
                                <p class="m-b-5">Sun, 17 Feb</p>
                                <h5 class="text-muted"><span class="text-primary"><a href="#!" class="text-primary">Jeny</a></span> assign you a task <span class="text-primary"><a href="#!" class="text-primary">Mockup
                                            Design.</a></span></h5>
                            </li>
                            <li>
                                <i class="task-icon bg-warning"></i>
                                <p class="m-b-5">Sat, 18 Mar</p>
                                <h5 class="text-muted">Design logo</h5>
                            </li>
                            <li class="p-b-15 m-b-10">
                                <i class="task-icon bg-success"></i>
                                <p class="m-b-5">Sat, 22 Mar</p>
                                <h5 class="text-muted">Design mobile Application</h5>
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="#!" class="b-b-primary text-primary">View Friend List</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
