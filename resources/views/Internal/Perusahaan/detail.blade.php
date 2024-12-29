@extends('...Internal.index', ['title' => 'Detail | Data Perusahaan'])
@section('asset_css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/style.css" />
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
                        <li class="breadcrumb-item"><a href="/internal/dashboard-internal">Home</a></li>
                        <li class="breadcrumb-item"><a href="/internal/perusahaan-internal/list">Perusahaan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail Perusahaan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Detail Perusahaan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row"><!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body py-0">
                    <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" id="profile-tab-1"
                                data-bs-toggle="tab" href="#profile-1" role="tab" aria-selected="true"><i
                                    class="ph-duotone ph-buildings me-2"></i>Profil Perusahaan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab-2" data-bs-toggle="tab"
                                href="#profile-2" role="tab" aria-selected="false" tabindex="-1"><i
                                    class="ti ti-file-text me-2"></i>KBLI Perusahaan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab-3" data-bs-toggle="tab"
                                href="#profile-3" role="tab" aria-selected="false" tabindex="-1"><i
                                    class="ti ti-file-analytics me-2"></i>Pengajuan Sertifikat</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab-4" data-bs-toggle="tab"
                                href="#profile-4" role="tab" aria-selected="false" tabindex="-1"><i class="ph-duotone ph-chart-bar me-2"></i>Laporan Tahunan</a></li>
                        {{-- <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab-5" data-bs-toggle="tab"
                                href="#profile-5" role="tab" aria-selected="false" tabindex="-1"><i
                                    class="ti ti-users me-2"></i>Role</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab-6" data-bs-toggle="tab"
                                href="#profile-6" role="tab" aria-selected="false" tabindex="-1"><i
                                    class="ti ti-settings me-2"></i>Settings</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane show active" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">
                    <div class="row">
                        <div class="col-lg-4 col-xxl-3">
                            <div class="card">
                                <div class="card-body position-relative">
                                    <div class="position-absolute end-0 top-0 p-3"><span class="badge bg-primary">Pro</span>
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="chat-avtar d-inline-flex mx-auto"><img
                                                class="rounded-circle img-fluid wid-70"
                                                src="{{ asset('assets') }}/images/user/avatar-5.jpg" alt="User image">
                                        </div>
                                        <h5 class="mb-0">PT. NUSANTARA TECH INOVATOR</h5>
                                        <p class="text-muted text-sm">Perusahaan</p>
                                        <hr class="my-3 border border-secondary-subtle">
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <h5 class="mb-0">86</h5><small class="text-muted">AODT</small>
                                            </div>
                                            <div class="col-4 border border-top-0 border-bottom-0">
                                                <h5 class="mb-0">40</h5><small class="text-muted">AOTDT</small>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">4.5K</h5><small class="text-muted">AB</small>
                                            </div>
                                        </div>
                                        <hr class="my-3 border border-secondary-subtle">
                                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3"><i
                                                class="ti ti-mail me-2"></i>
                                            <p class="mb-0">anshan@gmail.com</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3"><i
                                                class="ti ti-phone me-2"></i>
                                            <p class="mb-0">(+1-876) 8654 239 581</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3"><i
                                                class="ti ti-map-pin me-2"></i>
                                            <p class="mb-0">New York</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-start w-100"><i
                                                class="ti ti-link me-2"></i> <a href="#" class="link-primary">
                                                <p class="mb-0">https://anshan.dh.url</p>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xxl-9">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Informasi Perusahaan</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 pt-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Nama Perusahaan</p>
                                                    <p class="mb-0">PT WIRASWASTA GEMILANG INDONESIA</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">NIB</p>
                                                    <p class="mb-0">8120004962755</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Telepon</p>
                                                    <p class="mb-0">(+1-876) 8654 239 581</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Email</p>
                                                    <p class="mb-0">info@ptwgi.com</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Tanggal Terbit NIB</p>
                                                    <p class="mb-0">12 Desember 2023</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Jenis Layanan</p>
                                                    <ol>
                                                        <li>AJAP</li>
                                                        <li>AKDP</li>
                                                        <li>Angkutan B3</li>
                                                        <li>Angkutan lintas batas negara</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <p class="mb-1 text-muted">Alamat</p>
                                            <p class="mb-0">GEDUNG THE CITY TOWER LT.5 UNIT 1S JL.MH THAMRIN NO.81</p>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <p class="mb-1 text-muted">Tanggal Bergabung</p>
                                            <p class="mb-0">12 Desember 2023</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Informasi Penanggung Jawab</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 pt-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Nama</p>
                                                    <p class="mb-0">Uidn</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Telepon</p>
                                                    <p class="mb-0">-</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Informasi Pengguna</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 pt-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Username</p>
                                                    <p class="mb-0">blalabla</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Telepon</p>
                                                    <p class="mb-0">-</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div
                                            class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                            <!-- Top Controls: Entries Per Page and Search -->
                                            <div class="datatable-top">
                                                <div class="datatable-dropdown">
                                                    <label>
                                                        <select class="datatable-selector" name="per-page">
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
                                                        name="search" title="Search within table"
                                                        aria-controls="pc-dt-simple">
                                                </div>
                                            </div>

                                            <!-- Table -->
                                            <div class="datatable-container">
                                                <table class="table table-hover datatable-table" id="pc-dt-simple">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 90%;">Klasifikasi Baku Lapangan Usaha
                                                                Indonesia
                                                                (KBLI)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-start">
                                                                    <img class="rounded-circle me-3"
                                                                        src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                                        alt="User Avatar" width="60"
                                                                        height="60" />
                                                                    <div>
                                                                        <h6 class="mb-1">KBLI 45111</h6>
                                                                        <div class="h5 mt-3"> Theme customisation issue
                                                                        </div>
                                                                        </p>
                                                                        <p class="text-muted text-wrap"
                                                                            style="word-break: break-word;">
                                                                            Kegiatan ini meliputi perdagangan mobil baru,
                                                                            termasuk
                                                                            kendaraan penumpang dan kendaraan niaga ringan.
                                                                            Fokusnya
                                                                            adalah penjualan kendaraan langsung kepada
                                                                            konsumen
                                                                            melalui showroom atau agen resmi.
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-start">
                                                                    <img class="rounded-circle me-3"
                                                                        src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                                        alt="User Avatar" width="60"
                                                                        height="60" />
                                                                    <div>
                                                                        <h6 class="mb-1">KBLI 45111</h6>
                                                                        <div class="h5 mt-3"> Theme customisation issue
                                                                        </div>
                                                                        </p>
                                                                        <p class="text-muted text-wrap"
                                                                            style="word-break: break-word;">
                                                                            Kegiatan ini meliputi perdagangan mobil baru,
                                                                            termasuk
                                                                            kendaraan penumpang dan kendaraan niaga ringan.
                                                                            Fokusnya
                                                                            adalah penjualan kendaraan langsung kepada
                                                                            konsumen
                                                                            melalui showroom atau agen resmi.
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-start">
                                                                    <img class="rounded-circle me-3"
                                                                        src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                                        alt="User Avatar" width="60"
                                                                        height="60" />
                                                                    <div>
                                                                        <h6 class="mb-1">KBLI 45111</h6>
                                                                        <div class="h5 mt-3"> Theme customisation issue
                                                                        </div>
                                                                        </p>
                                                                        <p class="text-muted text-wrap"
                                                                            style="word-break: break-word;">
                                                                            Kegiatan ini meliputi perdagangan mobil baru,
                                                                            termasuk
                                                                            kendaraan penumpang dan kendaraan niaga ringan.
                                                                            Fokusnya
                                                                            adalah penjualan kendaraan langsung kepada
                                                                            konsumen
                                                                            melalui showroom atau agen resmi.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <!-- Pagination -->
                                            <div class="datatable-bottom">
                                                <div class="datatable-info">Showing 1 to 10 of 16 entries</div>
                                                <nav class="datatable-pagination">
                                                    <ul class="datatable-pagination-list">
                                                        <li
                                                            class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                                            <button data-page="1"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 1">‹</button>
                                                        </li>
                                                        <li class="datatable-pagination-list-item datatable-active"><button
                                                                data-page="1" class="datatable-pagination-list-item-link"
                                                                aria-label="Page 1">1</button></li>
                                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 2">2</button></li>
                                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 2">›</button></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card table-card">
                                <div class="card-body pt-3">
                                    <div class="table-responsive">
                                        <div
                                            class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                            <div class="datatable-top">
                                                <div class="datatable-dropdown">
                                                    <label>
                                                        <select class="datatable-selector" name="per-page">
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
                                                        name="search" title="Search within table"
                                                        aria-controls="pc-dt-simple">
                                                </div>
                                            </div>
                                            <div class="datatable-container">
                                                <table class="table table-hover datatable-table" id="pc-dt-simple">
                                                    <thead>
                                                        <tr>
                                                            <th data-sortable="true" style="width: 24%;"><button
                                                                    class="datatable-sorter">Nomor Pendaftaran</button>
                                                            </th>
                                                            <th data-sortable="true" style="width: 13.777777777777779%;">
                                                                <button class="datatable-sorter">Tanggal Pengajuan</button>
                                                            </th>
                                                            <th data-sortable="true" style="width: 16.666666666666664%;">
                                                                <button class="datatable-sorter">Penilai</button>
                                                            </th>
                                                            <th data-sortable="true" style="width: 13%;"><button
                                                                    class="datatable-sorter">Jadwal Interview</button></th>
                                                            <th data-sortable="true" style="width: 17.77777777777778%;">
                                                                <button class="datatable-sorter">Posisi</button>
                                                            </th>
                                                            <th data-sortable="true" style="width: 14.777777777777779%;">
                                                                <button class="datatable-sorter">Aksi</button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-index="0">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <div
                                                                            class="wid-40 hei-40 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                                                            <i class="fa-solid fa-file text-white"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <h6 class="mb-1">1234568675</h6>
                                                                        <p class="f-12 mb-0">
                                                                            <a href="#!" class="text-muted"><span
                                                                                    class="badge bg-primary">Wawancara
                                                                                    terjadwal</span></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>(123) 4567 890</td>
                                                            <td>B.COM., M.COM.</td>
                                                            <td>Info@123.com</td>
                                                            <td>2023/09/12</td>
                                                            <td><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-eye f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-edit f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-trash f-20"></i></a></td>
                                                        </tr>
                                                        <tr data-index="1">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <div
                                                                            class="wid-40 hei-40 rounded-circle bg-success d-flex align-items-center justify-content-center">
                                                                            <i class="fa-solid fa-file text-white"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <h6 class="mb-1">1234568675</h6>
                                                                        <p class="f-12 mb-0">
                                                                            <a href="#!" class="text-muted"><span
                                                                                    class="badge bg-success">Selesai</span></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>(123) 4567 890</td>
                                                            <td>B.COM., M.COM.</td>
                                                            <td>Info@123.com</td>
                                                            <td>2023/12/24</td>
                                                            <td><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-eye f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-edit f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-trash f-20"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="datatable-bottom">
                                                <div class="datatable-info">Showing 1 to 2 of 2 entries</div>
                                                <nav class="datatable-pagination">
                                                    <ul class="datatable-pagination-list">
                                                        <li
                                                            class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                                            <button data-page="1"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 1">‹</button>
                                                        </li>
                                                        <li class="datatable-pagination-list-item datatable-active"><button
                                                                data-page="1" class="datatable-pagination-list-item-link"
                                                                aria-label="Page 1">1</button></li>
                                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 2">2</button></li>
                                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 2">›</button></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card table-card">
                                <div class="card-body pt-3">
                                    <div class="table-responsive">
                                        <div
                                            class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                            <div class="datatable-top">
                                                <div class="datatable-dropdown">
                                                    <label>
                                                        <select class="datatable-selector" name="per-page">
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
                                                        name="search" title="Search within table"
                                                        aria-controls="pc-dt-simple">
                                                </div>
                                            </div>
                                            <div class="datatable-container">
                                                <table class="table table-hover datatable-table" id="pc-dt-simple">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Tahun Laporan</th>
                                                            <th>Tanggal Pelaporan</th>
                                                            <th>Status</th>
                                                            <th class="text-center" colspan="2">
                                                                Verifikasi
                                                                <table class="table-verifikasi p-0" style="margin: 0; width: 100%;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="border: none;padding-left: 0px; padding-right:27px;" >Tanggal</th>
                                                                            <th style="border: none;">Oleh</th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </th>
                                                            <th class="text-end">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>2024</td>
                                                            <td>2024-01-15</td>
                                                            <td><span class="badge bg-success">Diterima</span></td>
                                                            <td class="">2024-01-20</td>
                                                            <td class="">Admin 1</td>
                                                            <td class="text-end">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item"><a href="#"
                                                                            class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                                class="ti ti-eye f-20"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>2023</td>
                                                            <td>2023-12-10</td>
                                                            <td><span class="badge bg-warning">Menunggu</span></td>
                                                            <td class="">2024-01-20</td>
                                                            <td class="">Admin 1</td>
                                                            <td class="text-end">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item"><a href="#"
                                                                            class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                                class="ti ti-eye f-20"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="datatable-bottom">
                                                <div class="datatable-info">Showing 1 to 10 of 16 entries</div>
                                                <nav class="datatable-pagination">
                                                    <ul class="datatable-pagination-list">
                                                        <li
                                                            class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                                            <button data-page="1"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 1">‹</button>
                                                        </li>
                                                        <li class="datatable-pagination-list-item datatable-active"><button
                                                                data-page="1" class="datatable-pagination-list-item-link"
                                                                aria-label="Page 1">1</button></li>
                                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 2">2</button></li>
                                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 2">›</button></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile-5" role="tabpanel" aria-labelledby="profile-tab-5">
                    <div class="card">
                        <div class="card-header">
                            <h5>Invite Team Members</h5>
                        </div>
                        <div class="card-body">
                            <h4>5/10 <small>members available in your plan.</small></h4>
                            <hr class="my-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3"><label class="form-label">Email Address</label>
                                        <div class="row">
                                            <div class="col"><input type="email" class="form-control"></div>
                                            <div class="col-auto"><button class="btn btn-primary">Send</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-card">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>MEMBER</th>
                                            <th>ROLE</th>
                                            <th class="text-end">STATUS</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-auto pe-0"><img
                                                            src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                            alt="user-image" class="wid-40 rounded-circle"></div>
                                                    <div class="col">
                                                        <h5 class="mb-0">Addie Bass</h5>
                                                        <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary">Owner</span></td>
                                            <td class="text-end"><span class="badge bg-success">Joined</span></td>
                                            <td class="text-end"><a href="#"
                                                    class="avtar avtar-s btn-link-secondary"><i
                                                        class="ti ti-dots f-18"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-auto pe-0"><img
                                                            src="{{ asset('assets') }}/images/user/avatar-4.jpg"
                                                            alt="user-image" class="wid-40 rounded-circle"></div>
                                                    <div class="col">
                                                        <h5 class="mb-0">Agnes McGee</h5>
                                                        <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-info">Manager</span></td>
                                            <td class="text-end"><a href="#" class="btn btn-link-danger">Resend</a>
                                                <span class="badge bg-light-success">Invited</span>
                                            </td>
                                            <td class="text-end"><a href="#"
                                                    class="avtar avtar-s btn-link-secondary"><i
                                                        class="ti ti-dots f-18"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-auto pe-0"><img
                                                            src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                            alt="user-image" class="wid-40 rounded-circle"></div>
                                                    <div class="col">
                                                        <h5 class="mb-0">Agnes McGee</h5>
                                                        <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-warning">Staff</span></td>
                                            <td class="text-end"><span class="badge bg-success">Joined</span></td>
                                            <td class="text-end"><a href="#"
                                                    class="avtar avtar-s btn-link-secondary"><i
                                                        class="ti ti-dots f-18"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-auto pe-0"><img
                                                            src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                            alt="user-image" class="wid-40 rounded-circle"></div>
                                                    <div class="col">
                                                        <h5 class="mb-0">Addie Bass</h5>
                                                        <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary">Owner</span></td>
                                            <td class="text-end"><span class="badge bg-success">Joined</span></td>
                                            <td class="text-end"><a href="#"
                                                    class="avtar avtar-s btn-link-secondary"><i
                                                        class="ti ti-dots f-18"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-auto pe-0"><img
                                                            src="{{ asset('assets') }}/images/user/avatar-4.jpg"
                                                            alt="user-image" class="wid-40 rounded-circle"></div>
                                                    <div class="col">
                                                        <h5 class="mb-0">Agnes McGee</h5>
                                                        <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-info">Manager</span></td>
                                            <td class="text-end"><a href="#" class="btn btn-link-danger">Resend</a>
                                                <span class="badge bg-light-success">Invited</span>
                                            </td>
                                            <td class="text-end"><a href="#"
                                                    class="avtar avtar-s btn-link-secondary"><i
                                                        class="ti ti-dots f-18"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-auto pe-0"><img
                                                            src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                            alt="user-image" class="wid-40 rounded-circle"></div>
                                                    <div class="col">
                                                        <h5 class="mb-0">Agnes McGee</h5>
                                                        <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-warning">Staff</span></td>
                                            <td class="text-end"><span class="badge bg-success">Joined</span></td>
                                            <td class="text-end"><a href="#"
                                                    class="avtar avtar-s btn-link-secondary"><i
                                                        class="ti ti-dots f-18"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-auto pe-0"><img
                                                            src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                            alt="user-image" class="wid-40 rounded-circle"></div>
                                                    <div class="col">
                                                        <h5 class="mb-0">Addie Bass</h5>
                                                        <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary">Owner</span></td>
                                            <td class="text-end"><span class="badge bg-success">Joined</span></td>
                                            <td class="text-end"><a href="#"
                                                    class="avtar avtar-s btn-link-secondary"><i
                                                        class="ti ti-dots f-18"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-auto pe-0"><img
                                                            src="{{ asset('assets') }}/images/user/avatar-4.jpg"
                                                            alt="user-image" class="wid-40 rounded-circle"></div>
                                                    <div class="col">
                                                        <h5 class="mb-0">Agnes McGee</h5>
                                                        <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-info">Manager</span></td>
                                            <td class="text-end"><a href="#" class="btn btn-link-danger">Resend</a>
                                                <span class="badge bg-light-success">Invited</span>
                                            </td>
                                            <td class="text-end"><a href="#"
                                                    class="avtar avtar-s btn-link-secondary"><i
                                                        class="ti ti-dots f-18"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-auto pe-0"><img
                                                            src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                            alt="user-image" class="wid-40 rounded-circle"></div>
                                                    <div class="col">
                                                        <h5 class="mb-0">Agnes McGee</h5>
                                                        <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-warning">Staff</span></td>
                                            <td class="text-end"><span class="badge bg-success">Joined</span></td>
                                            <td class="text-end"><a href="#"
                                                    class="avtar avtar-s btn-link-secondary"><i
                                                        class="ti ti-dots f-18"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-end btn-page">
                            <div class="btn btn-link-danger">Cancel</div>
                            <div class="btn btn-primary">Update Profile</div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile-6" role="tabpanel" aria-labelledby="profile-tab-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Email Settings</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-4">Setup Email Notification</h6>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Email Notification</p>
                                        </div>
                                        <div class="form-check form-switch p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch" checked=""></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Send Copy To Personal Email</p>
                                        </div>
                                        <div class="form-check form-switch p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Updates from System Notification</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-4">Email you with?</h6>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">News about PCT-themes products and feature updates
                                            </p>
                                        </div>
                                        <div class="form-check p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch" checked=""></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Tips on getting more out of PCT-themes</p>
                                        </div>
                                        <div class="form-check p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch" checked=""></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Things you missed since you last logged into
                                                PCT-themes</p>
                                        </div>
                                        <div class="form-check p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch"></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">News about products and other services</p>
                                        </div>
                                        <div class="form-check p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch"></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Tips and Document business products</p>
                                        </div>
                                        <div class="form-check p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Activity Related Emails</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-4">When to email?</h6>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Have new notifications</p>
                                        </div>
                                        <div class="form-check form-switch p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch" checked=""></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">You're sent a direct message</p>
                                        </div>
                                        <div class="form-check form-switch p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch"></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Someone adds you as a connection</p>
                                        </div>
                                        <div class="form-check form-switch p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch" checked=""></div>
                                    </div>
                                    <hr class="my-4 border border-secondary-subtle">
                                    <h6 class="mb-4">When to escalate emails?</h6>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Upon new order</p>
                                        </div>
                                        <div class="form-check form-switch p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch" checked=""></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">New membership approval</p>
                                        </div>
                                        <div class="form-check form-switch p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch"></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <div>
                                            <p class="text-muted mb-0">Member registration</p>
                                        </div>
                                        <div class="form-check form-switch p-0"><input
                                                class="m-0 form-check-input h5 position-relative" type="checkbox"
                                                role="switch" checked=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-end btn-page">
                            <div class="btn btn-outline-secondary">Cancel</div>
                            <div class="btn btn-primary">Update Profile</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- [ sample-page ] end -->
    </div>
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="https://ableproadmin.com/assets/js/plugins/apexcharts.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
@endsection
