@extends('.......index', ['title' => 'Provinsi | Master Data Wilayah'])
@section('asset_css')
<link rel="stylesheet" href="{{asset('assets')}}/css/plugins/style.css" />
<link rel="icon" href="{{asset('assets')}}/images/favicon.svg" type="image/x-icon" />
<link rel="stylesheet" href="{{asset('assets')}}/fonts/inter/inter.css" id="main-font-link" />
<link rel="stylesheet" href="{{asset('assets')}}/fonts/phosphor/duotone/style.css" />
<link rel="stylesheet" href="{{asset('assets')}}/fonts/tabler-icons.min.css" />
<link rel="stylesheet" href="{{asset('assets')}}/fonts/feather.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets')}}/fonts/material.css" />
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css" id="main-style-link" />
<script src="{{asset('assets')}}/js/tech-stack.js"></script>
<link rel="stylesheet" href="{{asset('assets')}}/css/style-preset.css" />
@endsection

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a
                            href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Master Data Wilayah</a></li>
                    <li class="breadcrumb-item" aria-current="page">Provinsi</li>
                </ul>
            </div>
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <div class="page-header-title">
                    <h2 class="mb-0">Data Provinsi</h2>
                </div>
                <button data-pc-animate="fade-in-scale" type="button"
                    class="btn btn-md btn-primary px-3 p-1" data-bs-toggle="modal"
                    data-bs-target="#animateModal">
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
                                        <th>No.</th>
                                        <th>Nama Provinsi</th>
                                        <th>Kode Wilayah</th>
                                        <th class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Banten</td>
                                        <td>123</td>
                                        <td class="text-end">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a data-bs-toggle="modal" data-pc-animate="fade-in-scale" 
                                                    data-bs-target="#animateModal"
                                                        class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                            class="ti ti-eye f-20"></i></a></li>
                                                <li class="list-inline-item"><a data-bs-toggle="modal" data-pc-animate="fade-in-scale" 
                                                    data-bs-target="#animateModal"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Papua</td>
                                        <td>1223</td>
                                        <td class="text-end">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a data-bs-toggle="modal" data-pc-animate="fade-in-scale" 
                                                    data-bs-target="#animateModal"
                                                        class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                            class="ti ti-eye f-20"></i></a></li>
                                                <li class="list-inline-item"><a data-bs-toggle="modal" data-pc-animate="fade-in-scale" 
                                                    data-bs-target="#animateModal"
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
                <h5 class="modal-title">Tambah Data Provinsi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="p-3">
                    <div class="mb-3">
                        <div class="form-floating mb-0">
                            <input type="namaDepan" class="form-control" id="floatingNamaDepan"
                                placeholder="namaDepan" />
                            <label for="floatingInput">Nama Provinsi</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating mb-0">
                            <input type="namaBelakang" class="form-control" id="floatingNamaBelakang"
                                placeholder="namaBelakang" />
                            <label for="floatingNamaBelakang">Kode Wilayah</label>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary"
                    data-bs-dismiss="modal">Kembali</button>
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
