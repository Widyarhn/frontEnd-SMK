@extends('...Administrator.index', ['title' => 'Pengaturan Aplikasi | Pengaturan'])
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
                <div class="card shadow-none border">
                    <div class="card-header">
                        <div class="d-flex flex-column flex-sm-row align-items-center">
                            <div class="d-flex justify-content-center mb-3 mb-sm-0">
                                <a href="#"><img src="{{ asset('assets') }}/images/logoapp.png" alt="img"
                                        style="width: 60px;" /></a>
                            </div>
                            <div class="flex-grow-1 mx-5 text-center text-sm-start">
                                <h4 class="mb-0">SMK-PAU</h4>
                                <h6 class="mb-0">Dishub Provinsi Jabar</h6>
                                <p class="mb-0"><i class="fa-solid fa-location-dot me-2"></i>8534 Saunders Hill Apt.
                                    583</p>
                                <div
                                    class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start">
                                    <p class="mb-0 me-2">
                                        <span class="contact-icon">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        01267766 567238
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
                            {{-- <div class="flex-shrink-0 mt-3 mt-sm-0">
                                    <div class="form-check form-switch custom-switch-v1 switch-lg">
                                        <input type="checkbox" class="form-check-input input-primary f-16" id="customCheckdefout2" />
                                        <label class="form-check-label" for="customCheckdefout2">Aktifkan Berbagi Data</label>
                                    </div>
                                </div> --}}
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card shadow-none border mb-0 h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 me-3">
                                                <h6 class="mb-0">Logo Favicon</h6>
                                            </div>
                                        </div>
                                        <div class="mb-5 mt-3">
                                            <form action="{{ asset('assets') }}/json/file-upload.php" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </form>
                                        </div>
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
                                            <div class="text-end m-t-30">
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
                                        <h6 class="mb-2">Informasi Aplikasi</h6>
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <div class="form-floating mb-0">
                                                        <input type="text" class="form-control" id="namaAplikasi"
                                                            placeholder="Masukkan Nama Aplikasi" value="SMK-PAU" />
                                                        <label for="namaAplikasi">Nama Aplikasi</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <div class="form-floating mb-0">
                                                        <textarea class="form-control" id="floatingdeskripsi" rows="3"></textarea>
                                                        <label for="floatingdeskripsi">Deskripsi Aplikasi</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <div class="form-floating mb-0">
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Masukkan Nama Aplikasi" value="dishub@co.id" />
                                                        <label for="email">Email Helpdesk</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-0">
                                                        <input type="text" class="form-control" id="noTelpHelpDesk"
                                                            placeholder="" value="01267766" />
                                                        <label for="noTelpHelpDesk">No. Telepon Helpdesk</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <div class="form-floating mb-0">
                                                        <input type="text" class="form-control" id="noWaHelpdesk"
                                                            placeholder="" value="01267766" />
                                                        <label for="noWaHelpdesk">No. WhatsApp Helpdesk</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <div class="form-floating mb-0">
                                                        <input type="text" class="form-control"
                                                            id="keteranganHakCipta" placeholder="" value="01267766" />
                                                        <label for="keteranganHakCipta">Keterangan Hak Cipta</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="">
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
                                                <div class="">
                                                    <div class="form-floating mb-0">
                                                        <select class="form-select" id="floatingSelect"
                                                            aria-label="Floating label select example" disabled>
                                                            <option selected>Loh bener</option>
                                                            <option value="1">Tangerang</option>
                                                            <option value="2"></option>
                                                        </select>
                                                        <label for="floatingSelect">Kecamatan</label>
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
                                        <div class="mb-5">
                                            <div class="form-floating mb-0">
                                                <textarea class="form-control" id="floatingdeskripsi" rows="3"></textarea>
                                                <label for="floatingdeskripsi">Alamat</label>
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
                                    <h6 class="mb-3">Akun OSS</h6>
                                    <div class="form-check form-switch custom-switch-v1 switch-lg mb-4">
                                        <input type="checkbox" class="form-check-input input-primary f-16"
                                            id="akunOssActive" />
                                        <label class="form-check-label" for="akunOssActive">Aktifkan Akun OSS</label>
                                    </div>
                                    <div id="form-akun-oss" style="display: none;">
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
                                        <div class="mb-5">
                                            <div class="form-floating mb-0">
                                                <input type="text" class="form-control" id="urlOss"
                                                    placeholder="Masukkan url"
                                                    value="https://oss.go.id/informasi/kbli-detail/640d2ba5-b059-4ce0-9324-ec17c5df4a12" />
                                                <label for="username">URL OSS</label>
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
                        <div class="col-12">
                            <div class="card mt-4 shadow-none border mb-0 h-100">
                                <div class="card-body">
                                    <h6 class="mb-3">Berbagi Data</h6>
                                    <div class="form-check form-switch custom-switch-v1 switch-lg mb-4">
                                        <input type="checkbox" class="form-check-input input-primary f-16"
                                            id="shareActive" />
                                        <label class="form-check-label" for="shareActive">Aktifkan Berbagi
                                            Data</label>
                                    </div>
                                    <div id="form-berbagi-data" style="display: none;">
                                        <!-- Informasi Dasar -->
                                        <div class="mb-3">
                                            <div class="form-floating mb-0">
                                                <input type="text" class="form-control" id="judulData"
                                                    placeholder="Masukkan Judul Data" />
                                                <label for="judulData">Judul Data</label>
                                            </div>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-0">
                                                    <input type="date" class="form-control" id="tanggalBerbagi" />
                                                    <label for="tanggalBerbagi">Tanggal Dibagikan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-0">
                                                    <select class="form-select" id="penerimaData">
                                                        <option value="" selected>Pilih Penerima</option>
                                                        <option value="dishub-provinsi">Dishub Provinsi</option>
                                                        <option value="dishub-pusat">Dishub Pusat</option>
                                                    </select>
                                                    <label for="penerimaData">Penerima</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Jenis dan Format Data -->
                                        <div class="row g-4 mt-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-0">
                                                    <select class="form-select" id="jenisData">
                                                        <option value="" selected>Pilih Jenis Data</option>
                                                        <option value="laporan">Laporan Keselamatan</option>
                                                        <option value="insiden">Data Insiden</option>
                                                    </select>
                                                    <label for="jenisData">Jenis Data</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- File Upload -->
                                        <div class="mb-3 mt-3">
                                            <div class="form-floating mb-0">
                                                <div class="mb-5 mt-3">
                                                    <form action="{{ asset('assets') }}/json/file-upload.php"
                                                        class="dropzone">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple />
                                                        </div>
                                                    </form>
                                                </div>
                                                <label for="fileLampiran">Unggah File Lampiran</label>
                                            </div>
                                        </div>

                                        <!-- Hak Akses dan Keamanan -->
                                        <div class="row g-4 mt-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-0">
                                                    <select class="form-select" id="levelAkses">
                                                        <option value="" selected>Pilih Level Akses</option>
                                                        <option value="read-only">Hanya Baca</option>
                                                        <option value="read-download">Baca dan Unduh</option>
                                                    </select>
                                                    <label for="levelAkses">Level Akses</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-0">
                                                    <input type="date" class="form-control" id="masaBerlaku" />
                                                    <label for="masaBerlaku">Masa Berlaku</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Catatan Tambahan -->
                                        <div class="mb-3 mt-3">
                                            <div class="form-floating mb-0">
                                                <textarea class="form-control" id="catatanTambahan" style="height: 100px;"></textarea>
                                                <label for="catatanTambahan">Catatan Tambahan</label>
                                            </div>
                                        </div>

                                        <!-- Tombol Simpan -->
                                        <div class="text-end mt-4">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const akunOssCheckbox = document.getElementById('akunOssActive');
            const formAkunOss = document.getElementById('form-akun-oss');

            akunOssCheckbox.addEventListener('change', function() {
                if (akunOssCheckbox.checked) {
                    formAkunOss.style.display = 'block';
                } else {
                    formAkunOss.style.display = 'none';
                }
            });

            if (akunOssCheckbox.checked) {
                formAkunOss.style.display = 'block';
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const akunOssCheckbox = document.getElementById('shareActive');
            const formAkunOss = document.getElementById('form-berbagi-data');

            akunOssCheckbox.addEventListener('change', function() {
                if (akunOssCheckbox.checked) {
                    formAkunOss.style.display = 'block';
                } else {
                    formAkunOss.style.display = 'none';
                }
            });

            if (akunOssCheckbox.checked) {
                formAkunOss.style.display = 'block';
            }
        });
    </script>
@endsection
