@extends('.....index', ['title' => 'Pengaturan Aplikasi'])
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
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Pengaturan Aplikasi</a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h2 class="mb-0">Pengaturan Aplikasi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5>Pengaturan</h5>
                    {{-- <a class="avtar avtar-s btn-link-secondary" href="#">
                        <i class="ti ti-bookmarks f-18"></i>
                    </a> --}}
                </div>
                <div class="card-body">
                    <div class="card shadow-none border">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-l btn-light-secondary rounded-circle">
                                        <i class="ti ti-photo f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 mx-3">
                                    <h6 class="mb-0">SMK-POU</h6>
                                    <p class="mb-0">Dishub Provinsi Jabar</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <button class="btn btn-sm btn-light-secondary"><i class="ti ti-edit"></i>
                                        Edit</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="card shadow-none border mb-0 h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 me-3">
                                                    <h6 class="mb-0">Logo Aplikasi</h6>
                                                </div>
                                                {{-- <div class="flex-shrink-0">
                                                    <button class="btn btn-sm btn-light-secondary"><i
                                                            class="ti ti-edit"></i> Edit</button>
                                                </div> --}}
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <form action="{{ asset('assets') }}/json/file-upload.php" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                                                </form>
                                                <div class="text-end m-t-25">
                                                    <button class="btn btn-sm btn-outline-primary">Unggah Logo</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card shadow-none border mb-0 h-100">
                                        <div class="card-body">
                                            <h6 class="mb-2">Informasi</h6>
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-0">
                                                            <input type="text" class="form-control"
                                                                id="namaAplikasi" placeholder="Masukkan Nama Aplikasi" value="SMK-POU" />
                                                            <label for="namaAplikasi">Nama Belakang</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row mb-3">
                                                        <div class="form-floating mb-0">
                                                            <textarea class="form-control" id="floatingdeskripsi" rows="3"></textarea>
                                                            <label for="floatingdeskripsi">Deskripsi KBLI</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end m-t-15">
                                                <button class="btn btn-sm btn-outline-primary">Simpan Perubahan</button>
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
    <script src="{{ asset('assets') }}/js/plugins/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/fonts/custom-font.js"></script>
    <script src="{{ asset('assets') }}/js/pcoded.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/feather.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/dropzone-amd-module.min.js"></script>
@endsection
