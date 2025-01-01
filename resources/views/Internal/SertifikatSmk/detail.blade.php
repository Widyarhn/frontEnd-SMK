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
                        <li class="breadcrumb-item"><a href="/internal/sertifikat/list">Sertifikat SMK</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail SMK</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Detail Permohonan Penilaian E-SMK</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="row align-items-center g-3">
                                <div class="col-12">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="col-sm-auto mb-3 mb-sm-0 me-3">
                                            <div class="d-sm-inline-block d-flex align-items-center">
                                                <div
                                                    class="wid-60 hei-60 rounded-circle bg-success d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-building text-white fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex flex-column flex-sm-row align-items-start">
                                                <h4 class="d-inline-block mb-0 me-2">PT TRISTAR JAVA TRANSINDO |</h4>
                                                <p class="mb-0"><b> NIB : 9120109831421</b></p>
                                            </div>
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
                                                        <span class="badge bg-success">Penilaian Lulus</span>
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
                                <h5>Detail Pengajuan</h5>
                                <p class="mb-0"><i class="fa-solid fa-building-user me-2"></i>Dispo oleh <b>Ang
                                        Hoey Tiong</b></p>
                                <p class="mb-0"><i class="fa-solid fa-user-tie me-2"></i>Dispo ke <b>Iqbal
                                        Firmansyah</b></p>
                                <p class="mb-0"><i class="fa-solid fa-calendar-day me-2"></i>Diperbarui <b>12
                                        Desember 2024</b></p>
                                <p class="mb-0"><i class="fa-solid fa-user-large me-2"></i>Dibutuhkan Aksi
                                    <b>Ketua Tim</b>
                                </p>
                                <p class="mb-0"><i class="fa-regular fa-note-sticky me-2"></i><a href="">Lihat
                                    Catatan</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 d-flex">
                            <div class="border rounded p-3 w-100">
                                <h5>Surat Permohonan</h5>
                                <div class="row">
                                    <p class="mb-0"><i class="fa-solid fa-file me-2"></i>SRT-242024</p>
                                    <p class="mb-0"><i class="fa-solid fa-calendar me-2"></i>12 Desember 2023</p>
                                    <a href="">
                                        <p class="mb-0"><i class="fa-regular fa-file-pdf me-2"></i>Lihat Dokumen</p>
                                    </a>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="navTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="task-tab" data-bs-toggle="tab" href="#task" role="tab"
                                aria-controls="task" aria-selected="true">Riwayat Pengajuan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="task-tab" data-bs-toggle="tab" href="#info" role="tab"
                                aria-controls="task" aria-selected="true">Informasi Pengguna</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="navTabsContent">
                        <div class="tab-pane fade show active" id="task" role="tabpanel"
                            aria-labelledby="task-tab">
                            <div class="task-card p-3" style="max-height: 200px; overflow-y: auto;">
                                <ul class="list-unstyled task-list">
                                    <li>
                                        <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                                        <p class="m-b-5">8:50</p>
                                        <h5 class="text-muted">Call to customer <span class="text-primary"> <a
                                                    href="#!" class="text-primary">Jacob</a> </span> and discuss the
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
                                        <h5 class="text-muted"><span class="text-primary"><a href="#!"
                                                    class="text-primary">Jeny</a></span> assign you a task <span
                                                class="text-primary"><a href="#!" class="text-primary">Mockup
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
                        <div class="tab-pane fade show" id="info" role="tabpanel"
                            aria-labelledby="task-tab">
                            <div class="task-card" style="max-height: 280px; overflow-y: auto;">
                                <h5>Penanggung Jawab</h5>
                                <p class="mb-0"><i class="fa-solid fa-user me-2"></i>Ang Hoey Tiong</p>
                                <p class="mb-0"><i class="fa-solid fa-phone me-2"></i>(970) 982-3353</p>
                                <h5 class="mt-4">Informasi Pengguna</h5>
                                <p class="mb-0"><i class="fa-solid fa-circle-user me-2"></i>Anghoey</p>
                                <p class="mb-0"><i class="fa-solid fa-phone me-2"></i>(970) 982-3353</p>
                                <p class="mb-0"><i class="fa-solid fa-envelope me-2"></i>anghoey.conn@borer.com
                                </p>
                                <p class="mb-0"><i class="fa-solid fa-calendar-day me-2"></i>25 Maret 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- You can add more tab panes here -->
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar bg-light-primary">
                                <i class="fa-solid fa-file-lines"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-1">Total Dokumen Penilaian</p>
                            <div class="d-flex align-items-start">
                                <h4 class="mb-0 me-2">10</h4>
                                <span class="fw-bold f-16">Dokumen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar bg-light-success">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-1">Lulus Penilaian</p>
                            <div class="d-flex align-items-start">
                                <h4 class="mb-0 me-2">4</h4>
                                <span class="fw-bold f-16">Lulus</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar bg-light-danger">
                                <i class="fa-solid fa-file-circle-exclamation"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-1">Tidak Lulus Penilaian</p>
                            <div class="d-flex align-items-start">
                                <h4 class="mb-0 me-2">3</h4>
                                <span class="fw-bold f-16">Tidak Lulus</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar bg-light-primary">
                                <i class="fa-solid fa-percent"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-1">Presentase Penilaian Lulus</p>
                            <div class="d-flex align-items-start">
                                <h4 class="mb-0 me-2">12%</h4>
                                <span class="fw-bold f-16"></span>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                                            style="background: linear-gradient(90deg, rgb(4, 60, 132) 0%, rgb(69, 114, 184) 100%); 
                                            color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px; 
                                            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                                            
                                            <i class="fa-regular fa-file-lines me-2"></i> 
                                            <span class="fw-bold me-2 me-lg-0">1.1</span> &nbsp; 
                                            <span class="text-uppercase">Komitmen dan Kebijakan Keselamatan</span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Uraian</th>
                                                            <th>Unggahan Perusahaan</th>
                                                            <th>Nilai</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.1</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                                Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                                Ekspektasi, Implementasi, Prosedur Terkait)
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>2.5</td>
                                                            <td><span class="badge bg-success">Sesuai</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>1.2</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                                Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                                Ekspektasi, Implementasi, Prosedur Terkait)
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>2.5</td>
                                                            <td><span class="badge bg-success">Sesuai</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                                            style="background: linear-gradient(90deg, rgb(4, 60, 132) 0%, rgb(69, 114, 184) 100%); 
                                            color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px; 
                                            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                                            
                                            <i class="fa-regular fa-file-lines me-2"></i> 
                                            <span class="fw-bold me-2 me-lg-0">2.1</span> &nbsp; 
                                            <span class="text-uppercase">Pengorganisasian</span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="flush-headingTwo"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Uraian</th>
                                                            <th>Unggahan Perusahaan</th>
                                                            <th>Nilai</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2.1</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Pengorganisasian</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Deskripsi Pengorganisasian
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>2.5</td>
                                                            <td><span class="badge bg-success">Sesuai</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.2</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan mempunyai struktur organisasi pengelolaan di bidang
                                                                keselamatan, seperti Unit Manajemen Keselamatan atau Petugas
                                                                Keselamatan</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Perusahaan mempunyai struktur organisasi pengelolaan di
                                                                bidang keselamatan, seperti Unit Manajemen Keselamatan atau
                                                                Petugas Keselamatan
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>2.5</td>
                                                            <td><span class="badge bg-success">Sesuai</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                                            style="background: linear-gradient(90deg, rgb(4, 60, 132) 0%, rgb(69, 114, 184) 100%); 
                                            color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px; 
                                            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                                            
                                            <i class="fa-regular fa-file-lines me-2"></i> 
                                            <span class="fw-bold me-2 me-lg-0">3.1</span> &nbsp; 
                                            <span class="text-uppercase">Manajemen Bahaya Dan Risiko</span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse show" aria-labelledby="flush-headingThree"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Uraian</th>
                                                            <th>Unggahan Perusahaan</th>
                                                            <th>Nilai</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>3.1</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Pengorganisasian</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Deskripsi Pengorganisasian
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>2.5</td>
                                                            <td><span class="badge bg-success">Sesuai</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.2</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan mempunyai struktur organisasi pengelolaan di bidang
                                                                keselamatan, seperti Unit Manajemen Keselamatan atau Petugas
                                                                Keselamatan</td>
                                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Perusahaan mempunyai struktur organisasi pengelolaan di
                                                                bidang keselamatan, seperti Unit Manajemen Keselamatan atau
                                                                Petugas Keselamatan
                                                                <a href="">
                                                                    <p class="mb-0"><i
                                                                            class="fa-regular fa-file-pdf me-1"></i><label
                                                                            class="mb-0">Lihat Dokumen</label></p>
                                                                </a>
                                                            </td>
                                                            <td>2.5</td>
                                                            <td><span class="badge bg-success">Sesuai</span></td>
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
