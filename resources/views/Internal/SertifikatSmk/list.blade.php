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
                        <li class="breadcrumb-item" aria-current="page">Sertifikat SMK</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Daftar Permohonan Penilaian E-SMK</h2>
                    </div>
                </div>
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
                            <p class="mb-1">Total Permohonan Sertifikat</p>
                            <div class="d-flex align-items-start">
                                <h4 class="mb-0 me-2">3</h4>
                                <span class="fw-bold f-16">Permohonan</span>
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
                            <div class="avtar bg-light-info">
                                <i class="fa-solid fa-bars-progress"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-1">Permohonan Berlangsung</p>
                            <div class="d-flex align-items-start">
                                <h4 class="mb-0 me-2">1</h4>
                                <span class="fw-bold f-16">Berlangsung</span>
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
                            <div class="avtar bg-light-warning">
                                <i class="fa-solid fa-file-circle-exclamation"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="mb-1">Permohonan Kadaluwarsa</p>
                            <div class="d-flex align-items-start">
                                <h4 class="mb-0 me-2">1</h4>
                                <span class="fw-bold f-16">Kadaluwarsa</span>
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
                            <p class="mb-1">Permohonan Selesai</p>
                            <div class="d-flex align-items-start">
                                <h4 class="mb-0 me-2">1</h4>
                                <span class="fw-bold f-16">Selesai</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="collapseFilter" class="">
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
                                <select class="form-control select2" name="input_perusahaan"
                                    id="input-perusahaan"></select>
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
                            <div class="col-6 mb-3">
                                <button type="button" id="resetCustomFilter" class="btn btn-light-secondary w-100">
                                    <i class="fa-solid fa-eraser me-2"></i>Reset
                                </button>
                            </div>
                            <div class="col-12 mb-2 mt-4">
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

    {{-- list tabel biasa
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
    </div> --}}

    <div class="row">
        <div class="col-12 mt-4">
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
                        <div class="datatable-search d-flex justify-content-between align-items-center">
                            <div class="btn-group btn-group-sm help-filter" role="group" aria-label="button groups sm">
                                <a class="btn btn-light-secondary" onclick='noteNotShow()'
                                    style="border-top-left-radius: 5px !important;border-bottom-left-radius: 5px !important;"><i
                                        class="feather icon-align-justify m-0 fa-4x"></i></a>
                                <a class="btn btn-light-secondary" onclick='noteShow()'
                                    style="border-top-right-radius: 5px !important;border-bottom-right-radius: 5px !important;"><i
                                        class="feather icon-grid m-0 fa-4x"></i></a>
                            </div>
                            <input class="ms-3 datatable-input" placeholder="Search..." type="search"
                                title="Search within table" aria-controls="pc-dt-simple-1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 help-main large-view">
                    <div class="card ticket-card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-auto mb-3 mb-sm-0">
                                    <div class="d-sm-inline-block d-flex align-items-center">
                                        {{-- <img class="media-object wid-60 img-radius"
                                            src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image "> --}}
                                        <div
                                            class="wid-60 hei-60 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-building text-white fa-2x"></i>
                                        </div>
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
                                        <div
                                            class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                            <div class="h4 font-weight-bold mb-2 mb-md-0">
                                                No. Pendaftaran: 20240000030
                                                <small class="badge bg-light-primary ms-2">Pengesahan sertifikat</small>
                                            </div>
                                            <div>
                                                <span class="badge bg-light-secondary px-3 py-2 mb-3 mb-md-0">Lama Proses:
                                                    2 Hari</span>
                                            </div>
                                        </div>

                                        <div class="help-sm-hidden">
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="ph-duotone ph-buildings me-1"></i>
                                                    <b>PT TRISTAR JAVA TRANSINDO</b>
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt="" class="wid-20 rounded me-1 img-fluid">
                                                    Diproses Oleh <b>Ahmad Syariffudin
                                                        Putro</b>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="fa-regular fa-calendar-days me-1"></i>Diajukan
                                                    <b>23-12-2024 09:57:11</b>
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="fa-solid fa-calendar-day me-1"></i><b>Jadwal
                                                        Interview : </b>Tidak ada
                                                    wawancara
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt="" class="wid-20 rounded me-1 img-fluid">
                                                    Posisi : <b>Joko Kustanto</b>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="fa-solid fa-clipboard-list me-1"></i><b>Jenis Pelayanan :
                                                    </b>
                                                    Angkutan B3, Angkutan barang umum
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="noteShow">
                                            <div class="h5 mt-4"><i class="fa-solid fa-note-sticky me-1"></i>
                                                Catatan Permohonan</div>
                                            <div class="help-md-hidden">
                                                <div class="bg-body mb-3 p-3">
                                                    <h6><img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                            alt="" class="wid-20 avatar me-2 rounded">Last
                                                        comment from <a href="#" class="link-secondary">Robert
                                                            alia:</a></h6>
                                                    <p class="mb-0"><b>hello John
                                                            lui</b>,<br>you need to
                                                        create
                                                        <b>"toolbar-options" div
                                                            only</b>
                                                        once in a page&nbsp;in your
                                                        code,<br>this div fill found
                                                        every
                                                        "td" tag in your
                                                        page,<br>just...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="/internal/sertifikat/detail" class="me-2 btn btn-sm btn-light-secondary"
                                            style="border-radius:5px;"><i class="feather icon-eye mx-1"></i>Lihat
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ticket-card open-ticket">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-auto mb-3 mb-sm-0">
                                    <div class="d-sm-inline-block d-flex align-items-center">
                                        {{-- <img class="media-object wid-60 img-radius"
                                            src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image "> --}}
                                        <div
                                            class="wid-60 hei-60 rounded-circle bg-danger d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-building text-white fa-2x"></i>
                                        </div>
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
                                        <div
                                            class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                            <div class="h4 font-weight-bold mb-2 mb-md-0">
                                                No. Pendaftaran: 20240000030
                                                <small class="badge bg-light-danger ms-2">Revisi</small>
                                            </div>
                                            <div>
                                                <span class="badge bg-light-secondary px-3 py-2 mb-3 mb-md-0">Lama Proses:
                                                    2 Hari</span>
                                            </div>
                                        </div>

                                        <div class="help-sm-hidden">
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="ph-duotone ph-buildings me-1"></i>
                                                    <b>PT TRISTAR JAVA TRANSINDO</b>
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt="" class="wid-20 rounded me-1 img-fluid">
                                                    Diproses Oleh <b>Ahmad Syariffudin
                                                        Putro</b>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="fa-regular fa-calendar-days me-1"></i>Diajukan
                                                    <b>23-12-2024 09:57:11</b>
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="fa-solid fa-calendar-day me-1"></i><b>Jadwal
                                                        Interview : </b>Tidak ada
                                                    wawancara
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt="" class="wid-20 rounded me-1 img-fluid">
                                                    Posisi : <b>Joko Kustanto</b>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="fa-solid fa-clipboard-list me-1"></i><b>Jenis Pelayanan :
                                                    </b>
                                                    Angkutan B3, Angkutan barang umum
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="noteShow">
                                            <div class="h5 mt-4"><i class="fa-solid fa-note-sticky me-1"></i>
                                                Catatan Permohonan</div>
                                            <div class="help-md-hidden">
                                                <div class="bg-body mb-3 p-3">
                                                    <h6><img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                            alt="" class="wid-20 avatar me-2 rounded">Last
                                                        comment from <a href="#" class="link-secondary">Robert
                                                            alia:</a></h6>
                                                    <p class="mb-0"><b>hello John
                                                            lui</b>,<br>you need to
                                                        create
                                                        <b>"toolbar-options" div
                                                            only</b>
                                                        once in a page&nbsp;in your
                                                        code,<br>this div fill found
                                                        every
                                                        "td" tag in your
                                                        page,<br>just...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <a href="/internal/sertifikat/detail" class="me-2 btn btn-sm btn-light-secondary"
                                            style="border-radius:5px;"><i class="feather icon-eye mx-1"></i>Lihat
                                            Detail</a>
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
                                        <div
                                            class="wid-60 hei-60 rounded-circle bg-success d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-building text-white fa-2x"></i>
                                        </div>
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
                                        <div
                                            class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                            <div class="h4 font-weight-bold mb-2 mb-md-0">
                                                No. Pendaftaran: 20240000030
                                                <small class="badge bg-light-primary ms-2">Pengesahan sertifikat</small>
                                            </div>
                                            <div>
                                                <span class="badge bg-light-secondary px-3 py-2 mb-3 mb-md-0">Lama Proses:
                                                    2 Hari</span>
                                            </div>
                                        </div>

                                        <div class="help-sm-hidden">
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="ph-duotone ph-buildings me-1"></i>
                                                    <b>PT TRISTAR JAVA TRANSINDO</b>
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt="" class="wid-20 rounded me-1 img-fluid">
                                                    Diproses Oleh <b>Ahmad Syariffudin
                                                        Putro</b>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="fa-regular fa-calendar-days me-1"></i>Diajukan
                                                    <b>23-12-2024 09:57:11</b>
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="fa-solid fa-calendar-day me-1"></i><b>Jadwal
                                                        Interview : </b>Tidak ada
                                                    wawancara
                                                </li>
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt="" class="wid-20 rounded me-1 img-fluid">
                                                    Posisi : <b>Joko Kustanto</b>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                <li class="d-sm-inline-block d-block mt-1 me-3">
                                                    <i class="fa-solid fa-clipboard-list me-1"></i><b>Jenis Pelayanan :
                                                    </b>
                                                    Angkutan B3, Angkutan barang umum
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="noteShow">
                                            <div class="h5 my-4">
                                                <i class="fa-solid fa-file-pdf me-2"></i>
                                                Nomor Serifikat SK/00912/99812
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                            class="me-2 btn btn-sm btn-light-primary" style="border-radius:5px;"><i
                                                class="fa-solid fa-file-pdf me-2"></i>Lihat
                                            Dokumen</a>

                                        <a href="/internal/sertifikat/detail" class="me-2 btn btn-sm btn-light-secondary"
                                            style="border-radius:5px;"><i class="feather icon-eye mx-1"></i>Lihat
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card">
               <div class="card-body my-0">
                <div class="datatable-bottom">
                    <div class="datatable-info">Showing 1 to 9 of 9 entries</div>
                    <nav class="datatable-pagination">
                        <ul class="datatable-pagination-list"></ul>
                    </nav>
                </div>
               </div>
            </div> --}}
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
        document.addEventListener("DOMContentLoaded", function() {
            const noteElements = document.querySelectorAll(".noteShow");
            const notShowButton = document.querySelector(".btn-group .btn:nth-child(1)");
            const showButton = document.querySelector(".btn-group .btn:nth-child(2)");

            // Menyembunyikan atau menampilkan semua elemen dengan kelas 'noteShow'
            if (noteElements.length > 0) {
                noteElements.forEach(noteElement => {
                    noteElement.style.display = "block"; // Menampilkan semua catatan
                });
                if (showButton) showButton.classList.add("active"); // Set tombol 'noteShow' aktif secara default
                if (notShowButton) notShowButton.classList.remove("active");
            }
        });

        function noteNotShow() {
            const noteElements = document.querySelectorAll(".noteShow");
            const notShowButton = document.querySelector(".btn-group .btn:nth-child(1)");
            const showButton = document.querySelector(".btn-group .btn:nth-child(2)");

            noteElements.forEach(noteElement => {
                noteElement.style.display = "none"; // Sembunyikan semua elemen
            });

            if (notShowButton) notShowButton.classList.add("active");
            if (showButton) showButton.classList.remove("active");
        }

        function noteShow() {
            const noteElements = document.querySelectorAll(".noteShow");
            const notShowButton = document.querySelector(".btn-group .btn:nth-child(1)");
            const showButton = document.querySelector(".btn-group .btn:nth-child(2)");

            noteElements.forEach(noteElement => {
                noteElement.style.display = "block"; // Tampilkan semua elemen
            });

            if (showButton) showButton.classList.add("active");
            if (notShowButton) notShowButton.classList.remove("active");
        }
    </script>
@endsection
