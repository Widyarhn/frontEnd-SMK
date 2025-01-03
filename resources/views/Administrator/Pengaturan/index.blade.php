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
                                                    <textarea class="form-control" id="deskripsiAplikasi" rows="3"></textarea>
                                                    <label for="deskripsiAplikasi">Deskripsi Aplikasi</label>
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
                                                    <input type="text" class="form-control" id="noWaHelpdesk"
                                                        placeholder="" value="01267766" />
                                                    <label for="noWaHelpdesk">No. WhatsApp Helpdesk</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-floating mb-0">
                                                    <select class="form-select" id="select_provinsi"
                                                        aria-label="Floating label select example" disabled>
                                                    </select>
                                                    <label for="floatingSelect">Provinsi</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-floating mb-0">
                                                    <select class="form-select" id="select_kota"
                                                        aria-label="Floating label select example" disabled>
                                                    </select>
                                                    <label for="floatingSelect">Kota/Kabupaten</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-floating mb-0">
                                                    <input type="text" class="form-control" id="kodePos"
                                                        placeholder="" value="45281" />
                                                    <label for="floatingSelect">Kode Pos</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-">
                                                <div class="form-floating mb-0">
                                                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                                                    <label for="alamat">Alamat</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end m-t-15">
                                        <button class="btn btn-sm btn-outline-primary p-2" style="border-radius:5px;"
                                            onclick="updateDataApps()">
                                            Simpan Perubahan
                                        </button>
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
@endsection
@section('scripts')
    <script src="{{ asset('assets') }}/js/plugins/dropzone-amd-module.min.js"></script>
    <script>
        async function getDataApps() {
            loadingPage(true);

            const getDataRest = await CallAPI(
                    'GET',
                    `/dummy/pengaturan_aplikasi.json`
                )
                .then(response => response)
                .catch(error => {
                    loadingPage(false);
                    let resp = error.response;
                    Swal.fire({
                        icon: 'info',
                        title: 'Pemberitahuan',
                        text: "Error",
                        confirmButtonColor: '#28a745',
                    });
                    return resp;
                });

            if (getDataRest.status === 200) {
                loadingPage(false);

                // Ambil data dari response
                const appData = getDataRest.data.data;

                document.getElementById('namaAplikasi').value = appData.apps_name;
                document.getElementById('deskripsiAplikasi').value = appData.apps_desc;
                document.getElementById('email').value = appData.helpdesk_mail;
                document.getElementById('noWaHelpdesk').value = appData.helpdesk_whatsapp;
                document.getElementById('kodePos').value = appData.post_code;
                document.getElementById('alamat').value = appData.address;

                // Jika ada dropdown disabled, update value-nya
                const provinsiSelect = document.querySelector('#select_provinsi');
                const citySelect = document.querySelector('#select_kota');

                if (provinsiSelect) {
                    provinsiSelect.innerHTML = `<option selected>${appData.province_name}</option>`;
                }

                if (citySelect) {
                    citySelect.innerHTML = `<option selected>${appData.city_name}</option>`;
                }
            }
        }

        async function updateDataApps() {
            loadingPage(true);
            // Ambil nilai inputan dari formulir
            const namaAplikasi = document.getElementById('namaAplikasi').value;
            const deskripsiAplikasi = document.getElementById('deskripsiAplikasi').value;
            const email = document.getElementById('email').value;
            const noWaHelpdesk = document.getElementById('noWaHelpdesk').value;
            const kodePos = document.getElementById('kodePos').value;
            const alamat = document.getElementById('alamat').value;

            const provinsi = document.getElementById('select_provinsi').value;
            const kota = document.getElementById('select_kota').value;

            // Persiapkan data untuk dikirim
            const payload = {
                nama_aplikasi: namaAplikasi,
                deskripsi_aplikasi: deskripsiAplikasi,
                email_helpdesk: email,
                no_wa_helpdesk: noWaHelpdesk,
                kode_pos: kodePos,
                alamat: alamat,
                provinsi: provinsi,
                kota: kota,
            };

            const getDataRest = await CallAPI('PUT', 'https://jsonplaceholder.typicode.com/posts/1', payload)
                .then((response) => response)
                .catch((error) => {
                    loadingPage(false);
                    let resp = error.response;
                    Swal.fire({
                        icon: 'info',
                        title: 'Pemberitahuan',
                        text: "Error",
                        confirmButtonColor: '#28a745',
                    });
                    return resp;
                });

            if (getDataRest && getDataRest.status === 200) {
                loadingPage(false);
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: "Data berhasil diubah",
                    confirmButtonColor: '#28a745',
                });
            }
        }



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


        async function initPageLoad() {

            await Promise.all([
                getDataApps()
            ]);

        }
    </script>
@endsection
