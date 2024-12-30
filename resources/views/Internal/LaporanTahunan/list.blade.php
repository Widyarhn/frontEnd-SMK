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
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/internal/dashboard-internal">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Laporan Tahunan</li>
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
    <div class="row">
        <div class="col-lg-4 col-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Laporan Tahunan</p>
                            <h5 class="mb-1">9 Laporan</h5>
                            {{-- <p class="mb-0 text-sm">May 23 - June 01 (2018)</p> --}}
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-primary rounded-circle">
                                <i class="ph-duotone ph-chart-bar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 mb-2"> 
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Laporan Terverifikasi</p>
                            <h5 class="mb-1">1 Terverifikasi</h5>
                            {{-- <p class="mb-0 text-sm">May 23 - June 01 (2018)</p> --}}
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-success rounded-circle">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 mb-2"> 
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Laporan Direvisi</p>
                            <h5 class="mb-1">2 Direvisi</h5>
                            {{-- <p class="mb-0 text-sm">May 23 - June 01 (2018)</p> --}}
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-warning rounded-circle">
                                <i class="fa-solid fa-file-circle-exclamation"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-3 col-12 mb-2"> 
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Permohonan Kadaluwarsa</p>
                            <h5 class="mb-1">1 Kadaluwarsa</h5>
                            {{-- <p class="mb-0 text-sm">May 23 - June 01 (2018)</p> 
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-warning rounded-circle">
                                <i class="fa-solid fa-file-circle-exclamation"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="" id="collapseFilter">
        <div class="card card-body mb-3">
            <h5 class="card-title mt-1 mb-2"><i class="fa-solid fa-filter fa-20"></i> Filter Download</h5>
            <form id="custom-filter">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label class="fw-normal" for="daterange">Rentang Tanggal <sup
                                        class="text-danger">*</sup></label>
                                <div class="input-daterange input-group" id="datepicker_range">
                                    <input type="text" class="form-control text-left" placeholder="Tanggal Mulai"
                                        name="range-start" />
                                    <input type="text" class="form-control text-end" placeholder="Tanggal Berakhir"
                                        name="range-end" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="fw-normal" for="input-status">Status</label>
                                <select class="form-control select2" name="input_status" id="input-status"></select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="fw-normal" for="input-perusahaan">Perusahaan</label>
                                <select class="form-control select2" name="input_perusahaan" id="input-perusahaan"></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="row mt-md-0">
                            <div class="col-6 mb-2">
                                <button type="submit" id="btn-find"
                                    class="btn btn-primary hovering w-100 align-items-center justify-content-center">
                                    <i class="fa-solid fa-magnifying-glass me-2"></i>Cari
                                </button>
                            </div>
                            <div class="col-6 mb-2">
                                <button type="button" id="resetCustomFilter"
                                    class="btn btn-light hovering w-100 align-items-center justify-content-center">
                                    <i class="fa-solid fa-eraser me-2"></i>Reset
                                </button>
                            </div>
                            <div class="col-12 mb-2 mt-4">
                                <div id="download-container">
                                    <!-- Tombol utama download sebagai dropdown -->
                                    <div class="dropdown w-100">
                                        <button class="btn w-100 dropdown-toggle align-items-center justify-content-center"
                                            type="button" id="downloadDropdown" data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                            style="cursor: pointer; font-weight: bold; padding: 10px 20px; border-radius: 8px; transition: all 0.3s ease-in-out; background-color: #28a745; color: white; text-align: center;">
                                            <i class="fa-solid fa-download me-2"></i>Download</span>
                                        </button>

                                        <!-- Opsi download dalam dropdown -->
                                        <ul class="dropdown-menu w-100" aria-labelledby="downloadDropdown">
                                            <li>
                                                <a class="dropdown-item" id="download-excel" href="#">
                                                    <i class="fas fa-file-excel me-1"></i><span>Download Excel</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="download-csv" href="#">
                                                    <i class="fas fa-file-csv me-1"></i><span>Download CSV</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="download-pdf" href="#">
                                                    <i class="fas fa-file-pdf me-1"></i><span>Download PDF</span>
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
    {{-- <div class="row">
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
                                        <th>Nama Perusahaan</th>
                                        <th>Tahun Laporan</th>
                                        <th>Status</th>
                                        <th>Tanggal Verifikasi</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Diverifikasi Oleh</th>
                                        <th class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
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
                                                                class="text-truncate w-200">8120004962755</span></a> 
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2023</td>
                                        <td><span class="badge bg-light-warning"><i class="fa-solid fa-exclamation fa-lg me-2"></i>Laporan Direvisi</span></td>
                                        <td>-</td>
                                        <td>25 Maret 2023</td>
                                        <td>Joko Kustanto</td>
                                        <td class="text-end">
                                            <li class="list-inline-item"><a href="/internal/laporan-tahunan/detail"
                                                    class="avtar avtar-s btn-link-info btn-pc-default">
                                                    <i class="ti ti-eye f-20"></i></a>
                                            </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
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
                                                                class="text-truncate w-200">8130004962754</span></a> 
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2023</td>
                                        <td><span class="badge bg-light-success"><i class="fa-regular fa-circle-check fa-lg me-2"></i>Laporan Terverifikasi</span></td>
                                        <td>-</td>
                                        <td>25 Maret 2023</td>
                                        <td>Joko Kustanto</td>
                                        <td class="text-end sticky-end">
                                            <li class="list-inline-item"><a href="/internal/laporan-tahunan/detail"
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
        <div class="col-12 mt-3">
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
                    <div class="card ticket-card">
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
                                        
                                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                            <!-- Nama Perusahaan dan Status -->
                                            <div class="h4 font-weight-bold mb-2 mb-md-0">
                                                PT JAYA BERSAMA HUTAMA
                                                <small
                                                    class="badge bg-light-warning ms-2">Laporan
                                                    Direvisi</small>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="help-sm-hidden">
                                            <ul
                                                class="list-unstyled mt-2 mb-0 text-muted">
                                                <li
                                                    class="d-sm-inline-block d-block mt-1 me-2">
                                                    <i
                                                        class="fa-solid fa-calendar-day me-1"></i>
                                                    Tahun Laporan : <b>2023</b>
                                                </li>
                                                <li
                                                    class="d-sm-inline-block d-block mt-1 me-2">
                                                    <i
                                                        class="fa-solid fa-calendar-day me-1"></i>
                                                    Tanggal Verifikasi : <b>-</b>
                                                </li>
                                                <li
                                                    class="d-sm-inline-block d-block mt-1 me-2">
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt=""
                                                        class="wid-20 rounded me-1 img-fluid">
                                                    Diverifikasi Oleh <b>Joko
                                                        Kustanto</b>
                                                </li>
                                                <li
                                                    class="d-sm-inline-block d-block mt-1 me-2">
                                                    <i
                                                        class="fa-regular fa-calendar-days me-1"></i>Dibuat
                                                    pada
                                                    <b>Jumat, 20 Desember 2024</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>   
                                    <div class="mt-4">
                                        <a href="/internal/laporan-tahunan/detail" class="me-2 btn btn-sm btn-light-secondary"
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
                                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                            <!-- Nama Perusahaan dan Status -->
                                            <div class="h4 font-weight-bold mb-2 mb-md-0">
                                                PT JAYA BERSAMA HUTAMA
                                                <small class="badge bg-light-success ms-2">
                                                    <i class="fa-regular fa-circle-check me-2"></i>Laporan Terverifikasi
                                                </small>
                                            </div>
                                        </div>   
                                        <div class="help-sm-hidden">
                                            <ul
                                                class="list-unstyled mt-2 mb-0 text-muted">
                                                <li
                                                    class="d-sm-inline-block d-block mt-1 me-2">
                                                    <i
                                                        class="fa-solid fa-calendar-day me-1"></i>
                                                    Tahun Laporan : <b>2023</b>
                                                </li>
                                                <li
                                                    class="d-sm-inline-block d-block mt-1 me-2">
                                                    <i
                                                        class="fa-solid fa-calendar-day me-1"></i>
                                                    Tanggal Verifikasi :
                                                    <b>17-12-2024</b>
                                                </li>
                                                <li
                                                    class="d-sm-inline-block d-block mt-1 me-2">
                                                    <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                        alt=""
                                                        class="wid-20 rounded me-1 img-fluid">
                                                    Diverifikasi Oleh <b>Joko
                                                        Kustanto</b>
                                                </li>
                                                <li
                                                    class="d-sm-inline-block d-block mt-1 me-2">
                                                    <i
                                                        class="fa-regular fa-calendar-days me-1"></i>Dibuat
                                                    pada
                                                    <b>Jumat, 20 Desember 2024</b>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="mt-4">
                                        <a href="/internal/laporan-tahunan/detail" class="me-2 btn btn-sm btn-light-secondary"
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
    
@endsection
