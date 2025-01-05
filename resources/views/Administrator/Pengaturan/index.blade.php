@extends('...Administrator.index', ['title' => 'Pengaturan Aplikasi | Pengaturan'])
@section('asset_css')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/libs/filepond/filepond.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/js/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/js/libs/filepond-plugin-pdf-preview/filepond-plugin-pdf-preview.min.css">
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
                            <!-- Nama Aplikasi -->
                            <h4 id="namaAplikasi" class="mb-0"></h4>
                            <!-- Deskripsi Aplikasi -->
                            <h6 class="mb-0">Dishub <span id="provinsi"></span></h6>
                            <!-- Alamat -->
                            <p id="alamat" class="mb-0">
                                <i class="fa-solid fa-location-dot me-2"></i>
                            </p>
                            <div
                                class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-start">
                                <!-- No. WA Helpdesk -->
                                <p id="noWaHelpdesk" class="mb-0 me-2">
                                    <span class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </p>
                                <span class="mx-2">|</span>
                                <!-- Email Helpdesk -->
                                <p id="email" class="mb-0 ms-2">
                                    <span class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
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
                                        <input type="file" id="faviconUpload" />
                                        <input type="hidden" id="faviconFileUrl" name="favicon_file_url" accept="image/*"/>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 me-3">
                                            <h6 class="mb-0">Logo Aplikasi</h6>
                                        </div>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="file" id="logoUpload" />
                                        <input type="hidden" id="logoFileUrl" name="logo_file_url" accept="image/*" />
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
                                                    <input type="text" class="form-control" id="input_nama"
                                                        placeholder="Masukkan Nama Aplikasi" />
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
                                                    <input type="email" class="form-control" id="input_email"
                                                        placeholder="Masukkan Email Helpdesk" />
                                                    <label for="email">Email Helpdesk</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-floating mb-0">
                                                    <input type="text" class="form-control" id="input_wa"
                                                        placeholder="No WhatsApp Helpdesk" />
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
                                                        placeholder="Masukkan Kode POS" />
                                                    <label for="floatingSelect">Kode Pos</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-">
                                                <div class="form-floating mb-0">
                                                    <textarea class="form-control" id="input_alamat" rows="3"></textarea>
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
                    <div class="col-12">
                        <div class="card mt-4 shadow-none border mb-0 h-100">
                            <div class="card-body">
                                <h6 class="mb-3">Integrasi Akun OSS</h6>
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
                                                        placeholder="Masukkan Nama Aplikasi" />
                                                    <label for="username">Username OSS</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-floating mb-0">
                                                    <input type="password" class="form-control" id="password"
                                                        placeholder="Masukkan Nama Aplikasi" />
                                                    <label for="password">Password OSS</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-floating mb-0">
                                            <input type="text" class="form-control" id="urlOss"
                                                placeholder="Masukkan url" />
                                            <label for="urlOss">URL OSS</label>
                                        </div>
                                    </div>
                                    <div class="text-end m-t-15">
                                        <button class="btn btn-sm btn-outline-primary p-2" onclick="updateDataOSS()"
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
                                        <div class="mb-3 mt-5">
                                            <div class="form-floating mb-0">
                                                <select class="form-select" id="jenisData">
                                                    <option value="" selected>Pilih Jenis Data</option>
                                                    <option value="laporan">Laporan Keselamatan</option>
                                                    <option value="insiden">Data Insiden</option>
                                                </select>
                                                <label for="jenisData">Jenis Data</label>
                                            </div>
                                        </div>

                                    <!-- File Upload -->
                                    <div class="mb-3 mt-3">
                                        <div class="form-floating mb-0">
                                            <div class="mb-5 mt-3">
                                                <form action="{{ asset('assets') }}/json/file-upload.php">
                                                    <input type="file" id="file" multiple accept=".pdf"/>
                                                    <input type="hidden" id="fileUrl" name="fileUrl" />
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
    <script src="{{ asset('assets') }}/js/libs/filepond/filepond.min.js"></script>
    <script src="{{ asset('assets') }}/js/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js">
    </script>
    <script src="{{ asset('assets') }}/js/libs/filepond-plugin-pdf-preview/filepond-plugin-pdf-preview.min.js"></script>
    <script
        src="{{ asset('assets') }}/js/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js">
    </script>
    <script
        src="{{ asset('assets') }}/js/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js">
    </script>
    <script src="{{ asset('assets') }}/js/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script
        src="{{ asset('assets') }}/js/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js">
    </script>
@endsection

@section('page_js')
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
                    notificationAlert('info', 'Pemberitahuan', 'Error')
                    return resp;
                });

            if (getDataRest.status === 200) {
                loadingPage(false);

                // Ambil data dari response
                const appData = getDataRest.data.data;


                document.getElementById('input_nama').value = appData.apps_name;
                document.getElementById('deskripsiAplikasi').value = appData.apps_desc;
                document.getElementById('input_email').value = appData.helpdesk_mail;
                document.getElementById('input_wa').value = appData.helpdesk_whatsapp;
                document.getElementById('kodePos').value = appData.post_code;
                document.getElementById('input_alamat').value = appData.address;

                // Inisialisasi untuk Logo Favicon
                uploadFile('faviconUpload', 'faviconFileUrl', true);

                // Inisialisasi untuk Logo Aplikasi
                uploadFile('logoUpload', 'logoFileUrl', true);

                uploadFile('file', 'fileUrl', true);



                document.getElementById('namaAplikasi').innerText = appData.apps_name;
                document.getElementById('email').innerText = appData.helpdesk_mail;
                document.getElementById('noWaHelpdesk').innerText = appData.helpdesk_whatsapp;
                document.getElementById('alamat').innerText = appData.address;
                document.getElementById('provinsi').innerText = appData.province_name;
                document.getElementById('noWaHelpdesk').innerText = appData.helpdesk_whatsapp;
                document.getElementById('email').innerText = appData.helpdesk_mail;


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
                    notificationAlert('info', 'Pemberitahuan', 'Error')
                    return resp;
                });

            if (getDataRest && getDataRest.status === 200) {
                loadingPage(false);
                notificationAlert('success', 'Pemberitahuan', 'Data berhasil diubah')
            }
        }


        async function getDataOSS() {
            loadingPage(true);

            const getDataRest = await CallAPI(
                    'GET',
                    `/dummy/data_oss.json`
                )
                .then(response => response)
                .catch(error => {
                    loadingPage(false);
                    let resp = error.response;
                    notificationAlert('info', 'Pemberitahuan', 'Error')
                    return resp;
                });

            if (getDataRest.status === 200) {
                loadingPage(false);

                // Ambil data dari response
                const appData = getDataRest.data.data;

                document.getElementById('username').value = appData.oss_username;
                document.getElementById('password').value = appData.oss_password;
                document.getElementById('urlOss').value = appData.oss_url;
            }
        }

        async function updateDataOSS() {
            loadingPage(true);
            // Ambil nilai inputan dari formulir
            const ossUsername = document.getElementById('username').value;
            const ossPassword = document.getElementById('password').value;
            const ossUrl = document.getElementById('urlOss').value;

            // Persiapkan data untuk dikirim
            const payload = {
                oss_username: ossUsername,
                oss_password: ossPassword,
                oss_url: ossUrl,
            };

            const getDataRest = await CallAPI('PUT', 'https://jsonplaceholder.typicode.com/posts/1', payload)
                .then((response) => response)
                .catch((error) => {
                    loadingPage(false);
                    let resp = error.response;
                    notificationAlert('info', 'Pemberitahuan', 'Error')
                    return resp;
                });

            if (getDataRest && getDataRest.status === 200) {
                loadingPage(false);
                notificationAlert('success', 'Pemberitahuan', 'Data berhasil diubah')
            }
        }

        function uploadFile(sourceElement, inputTarget, isRequired) {
            const csrfToken = $('meta[name="csrf-token"]').attr('content')

            let removeButton = $(`#${sourceElement}`).closest('td').prev().find("[type=radio]")
            if (removeButton[1]) {
                removeButton[1].addEventListener('click', () => {
                    customUpload.removeFiles();
                })
            }

            let customUpload = FilePond.create(
                document.querySelector(`#${sourceElement}`)
            );
            customUpload.setOptions({
                server: {
                    process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {

                        const formData = new FormData()
                        formData.append('file', file, file.name)

                        const request = new XMLHttpRequest()
                        request.open('POST',
                            'https://jsonplaceholder.typicode.com/posts/1')
                        request.setRequestHeader('X-CSRF-TOKEN', csrfToken)
                        request.setRequestHeader('Accept', 'application/json')
                        request.setRequestHeader('Authorization', `Bearer ${Cookies.get('auth_token')}`);
                        request.responseType = 'json';

                        request.onload = function() {
                            if (request.status >= 200 && request.status < 300) {
                                const resp = request.response
                                load(request.response);

                                $(`#${inputTarget}`).val(resp.file_url)
                            } else {
                                error('oh no, Internal Server Error');
                            }
                        };

                        request.send(formData);

                        return {
                            abort: () => {
                                request.abort();

                                abort();
                            }
                        }
                    },
                    revert: (uniqueFileId, load, error) => {
                        $(`#${inputTarget}`).val('')

                        error('oh my goodness');

                        load();
                    }
                },
                labelIdle: '<span class="filepond--label-action"> Pilih File </span>',
                maxFiles: 1,
                required: isRequired,
                checkValidity: true,
            })

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
                getDataApps(),
                getDataOSS()
            ]);

        }
    </script>
@endsection
