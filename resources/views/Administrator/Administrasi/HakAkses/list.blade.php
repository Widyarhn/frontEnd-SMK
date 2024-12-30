@extends('...Administrator.index', ['title' => 'Hak Akses | Administrasi'])
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
    <style>
        .datatable-top{
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Administrasi</a></li>
                        <li class="breadcrumb-item" aria-current="page">Hak Akses</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-start">
                    <div class="page-header-title">
                        <h2 class="mb-0">Manajemen Peran</h2>
                    </div>
                    <button data-pc-animate="fade-in-scale" type="button" class="btn btn-md btn-primary px-3 p-2 mt-3 mt-md-0"
                        data-bs-toggle="modal" data-bs-target="#animateModal">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Peran Baru
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
                    <div class="col-lg-4 mt-2">
                        <div class="mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Pilih Peran</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Asesor</option>
                                </select>
                                <label for="floatingSelect">Pencarian Peran</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel"
                            aria-labelledby="analytics-tab-1" tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple-1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Peran</th>
                                            <th>Izin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div class="wid-40 hei-40 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                                            <i class="fas fa-user text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">Admin</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout1" />
                                                    <label class="form-check-label" for="customCheckdefout1">Lihat
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout2" />
                                                    <label class="form-check-label" for="customCheckdefout2">Buat
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout2" />
                                                    <label class="form-check-label" for="customCheckdefout2">Ubah
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout2" />
                                                    <label class="form-check-label" for="customCheckdefout2">Hapus
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout2" />
                                                    <label class="form-check-label" for="customCheckdefout2">Hapus
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout4" checked />
                                                    <label class="form-check-label" for="customCheckdefout4">Ubah role
                                                        permissions</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div class="wid-40 hei-40 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                                            <i class="fas fa-user text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">Asesor</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout1" checked />
                                                    <label class="form-check-label" for="customCheckdefout1">Lihat
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout2" />
                                                    <label class="form-check-label" for="customCheckdefout2">Buat
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout2" />
                                                    <label class="form-check-label" for="customCheckdefout2">Ubah
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout2" />
                                                    <label class="form-check-label" for="customCheckdefout2">Hapus
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout2" />
                                                    <label class="form-check-label" for="customCheckdefout2">Hapus
                                                        role</label>
                                                </div>
                                                <div class="form-check form-switch custom-switch-v1 switch-lg">
                                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                                        id="customCheckdefout4" />
                                                    <label class="form-check-label" for="customCheckdefout4">Ubah role
                                                        permissions</label>
                                                </div>
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
                    <h5 class="modal-title">Form Tambah Peran Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                    <form class="p-3">
                        <div class="mb-3">
                            <div class="form-floating mb-0">
                                <input type="text" class="form-control" id="namaPeran" placeholder="" />
                                <label for="namaPeran">Nama Peran</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-check-label mt-2" for="customCheckinl1" style="font-weight: 500;">Peran
                                Status</label><br>
                            <div class="form-check form-switch custom-switch-v1 form-check-inline mt-2">
                                <input type="checkbox" class="form-check-input input-primary me-2"
                                    id="customCheckinl1" />
                                <label class="form-check-label" style="color: rgba(0, 0, 0, 0.625)"
                                    for="customCheckinl1">Centang jika peran ini aktif.</label>
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
    <script>
        $(document).ready(function() {
            $('#pc-dt-simple-1').DataTable({
                "searching": false, // Disable search
                "paging": true, // Enable pagination if needed
                "info": false, // Disable the "Showing X to Y of Z entries" text
                "lengthChange": false // Disable the page length change dropdown
            });
        });
    </script>
@endsection
