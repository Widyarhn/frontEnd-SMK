@extends('...Administrator.index', ['title' => 'Nomor SK | Master Data Satuan Kerja'])
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
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Master Data</a></li>
                        <li class="breadcrumb-item" aria-current="page">No. Berita Acara</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">No. Berita Acara</h2>
                    </div>
                    <button data-pc-animate="fade-in-scale" type="button" class="btn btn-md btn-primary px-3 p-2"
                        data-bs-toggle="modal" data-bs-target="#animateModal">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Data
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->


    <!-- [ Main Content ] start -->
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
                                            <th>No. Berita Acara</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th class="text-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div class="wid-40 hei-40 rounded-circle bg-light d-flex align-items-center justify-content-center">
                                                            <i class="fa-solid fa-book-open-reader text-black"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">SK123-2024</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>05 September 2024</td>
                                            <td><span class="badge bg-light-danger">Tidak Aktif</span></td>
                                            <td class="text-end">
                                                <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-success btn-pc-default">
                                                            <i class="fa-solid fa-user-check"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                                class="ti ti-edit f-20"></i></a></li>
                                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                class="ti ti-trash f-20"></i></a></li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div class="wid-40 hei-40 rounded-circle bg-light d-flex align-items-center justify-content-center">
                                                            <i class="fa-solid fa-book-open-reader text-black"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">SK123-2024</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>20 Oktober 2024</td>
                                            <td><span class="badge bg-light-success">Aktif</span></td>
                                            <td class="text-end">
                                                <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default">
                                                            <i class="fas fa-user-times"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                                class="ti ti-edit f-20"></i></a></li>
                                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                class="ti ti-trash f-20"></i></a></li>
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
    <div class="modal fade modal-animate modal-animate-scrollable" data-bs-keyboard="false" tabindex="-1"
        id="animateModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Nomor Berita Acara</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                    <form class="p-3">
                        <div class="mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" disabled>
                                    <option selected>Dishub Jabar</option>
                                    <option value="1">Kementrian Perhubungan Darat</option>
                                    <option value="2"></option>
                                </select>
                                <label for="floatingSelect">Satuan Kerja</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-0">
                                <input type="kota" class="form-control" id="floatingKota" placeholder="kota" />
                                <label for="floatingInput">No. Berita Acara</label>
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
