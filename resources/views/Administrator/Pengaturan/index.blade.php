@extends('...Administrator.index', ['title' => 'Pengaturan Aplikasi'])
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
                                    <div class="text-center">
                                        <a href="#"><img src="{{ asset('assets') }}/images/logoapp.png" alt="img" style="width: 60px;" /></a>
                                    </div>
                                </div>
                                <div class="flex-grow-1 mx-5">
                                    <h4 class="mb-0">SMK-PAU</h4>
                                    <h6 class="mb-0">Dishub Provinsi Jabar</h6>
                                    <p class="mb-0">8534 Saunders Hill Apt. 583</p>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-2">
                                            <span class="contact-icon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            01267766 
                                        </p>
                                        <span class="mx-2">|</span>
                                        <p class="mb-0 ms-2">
                                            <span class="contact-icon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            brandon07@pierce.com
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="card shadow-none border mb-0 h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 me-3">
                                                    <h6 class="mb-0">Logo Aplikasi</h6>
                                                </div>
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <form action="{{ asset('assets') }}/json/file-upload.php" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                                                </form>
                                                <div class="text-end m-t-25">
                                                    <button class="btn btn-sm btn-outline-primary p-2"
                                                        style="border-radius:5px;">Simpan Perubahan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card shadow-none border mb-0 h-100">
                                        <div class="card-body">
                                            <h6 class="mb-2">Informasi</h6>
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-0">
                                                            <input type="email" class="form-control" id="email"
                                                                placeholder="Masukkan Nama Aplikasi" value="dishub@co.id" />
                                                            <label for="email">Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-0">
                                                            <input type="text" class="form-control" id="noTelpHelpDesk"
                                                                placeholder="" value="01267766" />
                                                            <label for="noTelpHelpDesk">No. Telepon</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-0">
                                                            <select class="form-select" id="floatingSelect"
                                                                aria-label="Floating label select example" disabled>
                                                                <option selected>Loh bener</option>
                                                                <option value="1">Tangerang</option>
                                                                <option value="2"></option>
                                                            </select>
                                                            <label for="floatingSelect">Kota</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-0">
                                                            <select class="form-select" id="floatingSelect"
                                                                aria-label="Floating label select example" disabled>
                                                                <option selected>Indramayu</option>
                                                                <option value="1">Tangerang
                                                                </option>
                                                                <option value="2"></option>
                                                            </select>
                                                            <label for="floatingSelect">Kabupaten</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-0">
                                                            <select class="form-select" id="floatingSelect"
                                                                aria-label="Floating label select example" disabled>
                                                                <option selected>Jawa Barat</option>
                                                                <option value="1">Banten</option>
                                                                <option value="2"></option>
                                                            </select>
                                                            <label for="floatingSelect">Provinsi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-0">
                                                            <input type="text" class="form-control" id="kodePos"
                                                                placeholder="" value="45281" />
                                                            <label for="floatingSelect">Kode Pos</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating mb-0">
                                                    <textarea class="form-control" id="floatingdeskripsi" rows="3"></textarea>
                                                    <label for="floatingdeskripsi">Alamat</label>
                                                </div>
                                            </div>
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-0">
                                                            <input type="text" class="form-control" id="namaAplikasi"
                                                                placeholder="Masukkan Nama Aplikasi" value="SMK-PAU" />
                                                            <label for="namaAplikasi">Nama Aplikasi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-0">
                                                            <textarea class="form-control" id="floatingdeskripsi" rows="3"></textarea>
                                                            <label for="floatingdeskripsi">Deskripsi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end m-t-15">
                                                <button class="btn btn-sm btn-outline-primary p-2"
                                                    style="border-radius:5px;">Simpan Perubahan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="card mt-4 shadow-none border mb-0 h-100">
                                    <div class="card-body">
                                        <h6 class="mb-4">Akun OSS</h6>
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-0">
                                                        <input type="text" class="form-control" id="username"
                                                            placeholder="Masukkan Nama Aplikasi" value="dishubJabar" />
                                                        <label for="username">Username OSS</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-0">
                                                        <input type="password" class="form-control" id="username"
                                                            placeholder="Masukkan Nama Aplikasi" value="dishub@co.id" />
                                                        <label for="username">Password OSS</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end m-t-15">
                                            <button class="btn btn-sm btn-outline-primary p-2"
                                                style="border-radius:5px;">Simpan Perubahan</button>
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
    <script src="{{ asset('assets') }}/js/plugins/dropzone-amd-module.min.js"></script>
@endsection
