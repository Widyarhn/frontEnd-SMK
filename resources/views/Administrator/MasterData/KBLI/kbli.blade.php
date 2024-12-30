@extends('...Administrator.index', ['title' => 'KBLI | Master Data'])
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
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Master Data KBLI</a></li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-start">
                    <div class="page-header-title">
                        <h2 class="mb-0">Data KBLI</h2>
                    </div>
                    <button data-pc-animate="fade-in-scale" type="button" class="btn btn-md btn-primary px-3 p-2 mt-3 mt-md-0"
                        data-bs-toggle="modal" data-bs-target="#animateModal">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Data
                    </button>
                </div>
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
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple-1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode KBLI</th>
                                            <th>Nama KBLI</th>
                                            <th>Uraian KBLI</th>
                                            <th>Tanggal Dibuat</th>
                                            <th class="text-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div class="wid-40 hei-40 rounded-circle bg-success d-flex align-items-center justify-content-center">
                                                            <i class="fa-solid fa-address-book text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">00293746</span> </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">Angkutan
                                                                Bermotor</span> </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>20-12-2024</td>
                                            <td class="text-end">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                class="ti ti-eye f-20"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                                class="ti ti-edit f-20"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                class="ti ti-trash f-20"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div class="wid-40 hei-40 rounded-circle bg-success d-flex align-items-center justify-content-center">
                                                            <i class="fa-solid fa-address-book text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">00293746</span> </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">Angkutan
                                                                Bermotor</span> </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>20-12-2024</td>
                                            <td class="text-end">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                class="ti ti-eye f-20"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                                class="ti ti-edit f-20"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                class="ti ti-trash f-20"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div class="wid-40 hei-40 rounded-circle bg-success d-flex align-items-center justify-content-center">
                                                            <i class="fa-solid fa-address-book text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">00293746</span> </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">Angkutan
                                                                Bermotor</span> </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>20-12-2024</td>
                                            <td class="text-end">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                                class="ti ti-eye f-20"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                                class="ti ti-edit f-20"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                class="ti ti-trash f-20"></i></a></li>
                                                </ul>
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
    <div class="modal fade modal-animate" id="animateModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data KBLI</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form class="p-3">
                        <div class="mb-3">
                            <div class="form-floating mb-0">
                                <input type="text" class="form-control" id="floatingkode" placeholder="kode" />
                                <label for="floatingkode">Kode KBLI</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-0">
                                <input type="text" class="form-control" id="floatingnama"
                                    placeholder="nama" />
                                <label for="floatingnama">Nama KBLI</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-0">
                                <textarea class="form-control" id="floatingdeskripsi" rows="3"></textarea>
                                <label for="floatingdeskripsi">Deskripsi KBLI</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary shadow-2">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="https://ableproadmin.com/assets/js/plugins/apexcharts.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
@endsection
