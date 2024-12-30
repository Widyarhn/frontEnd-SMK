@extends('...Administrator.index', ['title' => 'Pengaturan Akun | Pengaturan'])
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
                        <li class="breadcrumb-item"><a href="">Pengaturan Akun</a></li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Pengaturan Akun</h2>
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
                                    class="ti ti-lock me-2"></i>Ubah Kata Sandi</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane show active" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">
                    <div class="row">
                        <div class="col-lg-4 col-xxl-3">
                            <div class="card">
                                <div class="card-body position-relative">
                                    <div class="position-absolute end-0 top-0 p-3"><span
                                            class="badge bg-success">Aktif</span>
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="chat-avtar d-inline-flex mx-auto"><img
                                                class="rounded-circle img-fluid wid-70"
                                                src="{{ asset('assets') }}/images/user/avatar-5.jpg" alt="User image">
                                        </div>
                                        <h5 class="mb-0">Administrator</h5>
                                        <p class="text-muted text-sm">Administrator</p>
                                        <hr class="my-3 border border-secondary-subtle">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <h5 class="mb-0">NIP</h5><small
                                                    class="text-muted">0000000000000001</small>
                                            </div>
                                            <div class="col-6 border border-top-0 border-bottom-0"
                                                style="border-right: 0 !important;">
                                                <h5 class="mb-0">Peran</h5><small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                        <hr class="my-3 border border-secondary-subtle">
                                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3"><i
                                                class="ti ti-mail me-2"></i>
                                            <p class="mb-0">administrator@gmail.com</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3">
                                            <i class="fa-regular fa-calendar-days me-2"></i>
                                            <p class="mb-0">Terdaftar: 7 Desember 2024</p>
                                        </div>
                                        {{-- <div class="d-inline-flex align-items-center justify-content-start w-100"><i
                                                class="ti ti-link me-2"></i> <a href="#" class="link-primary">
                                                <p class="mb-0">https://anshan.dh.url</p>
                                            </a></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xxl-9">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Ubah Kata Sandi</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <div class="form-floating mb-0">
                                                    <input type="password" class="form-control" id="password-old"
                                                        placeholder="Masukkan Kata Sandi Lama" />
                                                    <label for="password-old">Kata Sandi Lama</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating mb-0">
                                                    <input type="password" class="form-control" id="password"
                                                        placeholder="Masukkan Kata Sandi Baru" />
                                                    <label for="password">Kata Sandi Baru</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating mb-0">
                                                    <input type="password" class="form-control" id="confirmPassword"
                                                        placeholder="Masukkan Kata Sandi Baru" />
                                                    <label for="confirmPassword">Konfirmasi Kata Sandi</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-5 mt-md-0">
                                            <h5>Kata sandi yang baik mengandung:</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><i
                                                        class="ti ti-circle-check text-success f-16 me-2"></i> Minimal 8
                                                    karakter</li>
                                                <li class="list-group-item"><i
                                                        class="ti ti-circle-check text-success f-16 me-2"></i> Huruf Besar
                                                    & Huruf Kecil (Aa)</li>
                                                <li class="list-group-item"><i
                                                        class="ti ti-circle-check text-success f-16 me-2"></i> Angka
                                                    (1234567890)</li>
                                                <li class="list-group-item"><i
                                                        class="ti ti-circle-check text-success f-16 me-2"></i> Symbol
                                                    (?!@#$%^&*)</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end btn-page">
                                    <div class="btn btn-outline-secondary">Kembali</div>
                                    <div class="btn btn-primary">Perbarui</div>
                                </div>
                            </div>
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
