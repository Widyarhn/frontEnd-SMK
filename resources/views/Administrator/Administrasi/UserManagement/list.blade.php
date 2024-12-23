@extends('.......index', ['title' => 'User Manajemen | Master Data Administrasi'])
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
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Administrasi</a></li>
                        <li class="breadcrumb-item" aria-current="page">User Manajemen</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Data Pengguna</h2>
                    </div>
                    <button data-pc-animate="fade-in-scale" type="button" class="btn btn-md btn-primary px-3 p-1"
                        data-bs-toggle="modal" data-bs-target="#animateModal">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Pengguna
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
                                            <th>Nama</th>
                                            <th>Nama Pengguna</th>
                                            <th>Email</th>
                                            <th>NIP</th>
                                            <th>Peran</th>
                                            <th>Status</th>
                                            <th>Tanggal Terdaftar</th>
                                            <th class="text-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>DEVELOPER</td>
                                            <td>developer</td>
                                            <td>developer@kemenhub.go.id</td>
                                            <td>0000000000000001</td>
                                            <td>Asesor</td>
                                            <td><span class="badge bg-light-danger">Tidak Aktif</span></td>
                                            <td class="f">05 September 2024</td>
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
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>DEVELOPER</td>
                                            <td>developer</td>
                                            <td>developer@kemenhub.go.id</td>
                                            <td>0000000000000001</td>
                                            <td>Asesor</td>
                                            <td><span class="badge bg-light-success">Aktif</span></td>
                                            <td>20 Oktober 2024</td>
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
    <div class="modal fade modal-animate modal-lg modal-animate-scrollable" data-bs-keyboard="false" tabindex="-1"
        id="animateModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Formulir Tambah Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                    <form class="p-3">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-floating mb-0">
                                        <input type="email" class="form-control" id="floatingEmail" placeholder="" />
                                        <label for="floatingInput">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-floating mb-0">
                                        <input type="text" class="form-control" id="namaLengkap" placeholder="" />
                                        <label for="namaLengkap">Nama Lengkap</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-floating mb-0">
                                        <input type="text" class="form-control" id="username" placeholder="" />
                                        <label for="username">Nama Pengguna (username)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-floating mb-0">
                                        <input type="text" class="form-control" id="nip" placeholder="" />
                                        <label for="nip">NIP</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Pilih role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Asesor</option>
                                </select>
                                <label for="floatingSelect">Role</label>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-floating mb-0">
                                        <input type="text" class="form-control" id="password" placeholder="" />
                                        <label for="password">Kata Sandi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-floating mb-0">
                                        <input type="text" class="form-control" id="password2" placeholder="" />
                                        <label for="password2">Konfirmasi Kata Sandi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-2">
                            <b>Kata sandi yang baik mengandung: <br></b>
                            Minimal 8 karakter <br>
                            Huruf Besar & Huruf Kecil (Aa) <br>
                            Angka (1234567890) <br>
                            Symbol (?!@#$%^&*.)
                        </p>
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
