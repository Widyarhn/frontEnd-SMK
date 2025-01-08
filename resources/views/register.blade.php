<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Register | SMK-TD</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
    <meta name="author" content="Phoenixcoded" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets') }}/images/logoapp.png" type="image/x-icon" />
    <!-- [Font] Family -->
    <link rel="stylesheet" href="https://ableproadmin.com/assets/fonts/inter/inter.css" id="main-font-link" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="https://ableproadmin.com/assets/fonts/phosphor/duotone/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="https://ableproadmin.com/assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="https://ableproadmin.com/assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="https://ableproadmin.com/assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="https://ableproadmin.com/assets/css/style.css" id="main-style-link" />
    <script src="https://ableproadmin.com/assets/js/tech-stack.js"></script>
    <link rel="stylesheet" href="https://ableproadmin.com/assets/css/style-preset.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/select2.min.css" />

    <script src="{{ asset('assets') }}/js/plugins/jquery-3.7.1.min.js"></script>
</head>
<style>
    .welcome-banner::after {
        opacity: 0.3;
        background-position: bottom;
        background-size: 600%;

    }
</style>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
        <div class="auth-wrapper v2">
            <div class="auth-sidecontent welcome-banner"
                style="width: 580px; height: 100vh; background: linear-gradient(90deg, rgb(4 60 132) 0%, rgb(69 114 184) 100%); display: flex; justify-content: center; align-items: center; position: relative;">
                <img src="{{ asset('assets') }}/images/logoapp.png" alt="images" style="width: 150px;" />
            </div>
            <div class="auth-form">
                <div class="card my-5" style="max-width:70%">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="#"><img src="{{ asset('assets') }}/images/logoapp.png" alt="img"
                                    style="width: 60px;" /></a>
                        </div>
                        <h4 class="text-center mt-4">DAFTAR SMK-TD</h4>
                        <div class="saprator mb-5">
                            <span>Dinas Perhubungan Kabupaten</span>
                        </div>

                        <form id="wizard-form">
                            <div class="wizard-step step-1" data-step="1">
                                <h5 class="text-left mb-4" style="color:#214f96;"><i
                                        class="fa-solid fa-circle-info fa-lg me-2"></i>Data Perusahaan</h5>
                                <div class="mb-3">
                                    <label class="form-label fw-bold" for="nib">Nomor Induk Berusaha (NIB)</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i
                                                class="fa-solid fa-magnifying-glass text-dark"></i></div>
                                        <input type="text" class="form-control" id="nib"
                                            placeholder="Masukkan nomor induk berusaha" />
                                    </div>
                                </div>
                                {{-- <div class="form-check form-switch custom-switch-v1 switch-lg">
                                    <input type="checkbox" class="form-check-input input-primary f-16"
                                        id="customCheckdefout2" />
                                    <label class="form-check-label" for="customCheckdefout2">Sinkronisasi dengan akun OSS jika ada</label>
                                </div> --}}
                                <div class="d-grid mt-5">
                                    <button type="submit" class="btn btn-primary mb-2"
                                        style="border-radius:5px; background: linear-gradient(90deg, rgb(4 60 132) 0%, rgb(69 114 184) 100%); color: white;">Cek
                                        NIB</button>
                                </div>
                            </div>
                            <div class="wizard-step step-2" data-step="2">
                                <h5 class="text-left mb-4" style="color:#214f96;"><i
                                        class="fa-solid fa-circle-info fa-lg me-2"></i>Data Perusahaan</h5>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-0">
                                            <input type="text" class="form-control" id="nib" placeholder="" />
                                            <label for="nib">NIB</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating mb-0">
                                            <input type="text" class="form-control" id="namaPerusahaan"
                                                placeholder="" />
                                            <label for="namaPerusahaan">Nama Perusahaan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-floating mb-0">
                                                <input type="number" class="form-control" id="noTelp"
                                                    placeholder="" />
                                                <label for="noTelp">No. Telepon Perusahaan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-floating mb-0">
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Email address" />
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="fw-normal" for="input-provinsi">Provinsi</label>
                                            <select class="form-control select2" name="input_provinsi"
                                                id="input-provinsi">
                                                <option value="" disabled selected>Pilih Provinsi</option>
                                                <option value="1">Jawa Tengah</option>
                                                <option value="2">Jawa Barat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="fw-normal" for="input-kota">Kota</label>
                                            <select class="form-control select2" name="input_kota" id="input-kota">
                                                <option value="" disabled selected>Pilih Kota</option>
                                                <option value="1">Semarang</option>
                                                <option value="2">Bandung</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-0">
                                            <textarea class="form-control" id="floatingdeskripsi" rows="3"></textarea>
                                            <label for="floatingdeskripsi">Alamat</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-md-12">
                                        <label class="fw-normal" for="input-pelayanan">Jenis Pelayanan</label>
                                        <select class="form-control select2" name="input_pelayanan"
                                            id="input-pelayanan">
                                        </select>
                                    </div>
                                </div>
                                <div class="d-grid mt-5">
                                    <button type="submit" class="btn btn-primary mb-2"
                                        style="border-radius:5px; background: linear-gradient(90deg, rgb(4 60 132) 0%, rgb(69 114 184) 100%); color: white;">Selanjutnya</button>
                                </div>
                            </div>
                            <div class="wizard-step step-3" data-step="3" style="display: none;">
                                <h5 class="text-left mb-4" style="color:#214f96;"><i
                                        class="fa-solid fa-circle-info fa-lg me-2"></i>Penanggung Jawab (PIC)</h5>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-floating mb-0">
                                                <input type="text" class="form-control" id="namaPic"
                                                    placeholder="" />
                                                <label for="namaPic">Nama PIC</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-floating mb-0">
                                                <input type="text" class="form-control" id="noTelpPic"
                                                    placeholder="" />
                                                <label for="noTelpPic">No. Telepon PIC</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid mt-5">
                                    <button type="submit" class="btn btn-primary mb-2"
                                        style="border-radius:5px; background: linear-gradient(90deg, rgb(4 60 132) 0%, rgb(69 114 184) 100%); color: white;">Selanjutnya</button>
                                    <button type="button" class="btn btn-outline-secondary prev-btn"
                                        style="border-radius:5px;">Kembali</button>
                                </div>
                            </div>
                            <div class="wizard-step step-4" data-step="4" style="display: none;">
                                <h5 class="text-left mb-4" style="color:#214f96;"><i
                                        class="fa-solid fa-circle-info fa-lg me-2"></i>Informasi Akun</h5>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-floating mb-0">
                                                <input type="text" class="form-control" id="username"
                                                    placeholder="" />
                                                <label for="username">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-floating mb-0">
                                                <input type="number" class="form-control" id="noTelp"
                                                    placeholder="" />
                                                <label for="noTelp">No. Telepon</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-1 justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input input-primary" type="checkbox"
                                            id="customCheckc1" checked="" />
                                        <label class="form-check-label text-muted" for="customCheckc1">Saya menyetujui
                                            semua
                                            Syarat & Ketentuan</label>
                                    </div>
                                </div>
                                <div class="d-grid mt-5">
                                    <a href="/admin/dashboard" class="btn mb-2"
                                        style="border-radius:5px;background: linear-gradient(90deg, rgb(4 60 132) 0%, rgb(69 114 184) 100%); color: white;"">Simpan</a>
                                </div>
                            </div>
                        </form>

                        <div class="d-flex justify-content-center align-items-end mt-3">
                            <h6 class="f-w-500 mb-0 me-2">Sudah punya akun?</h6>
                            <a href="/" class="link-primary">Masuk Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="https://ableproadmin.com/assets/js/plugins/popper.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/simplebar.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/bootstrap.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/fonts/custom-font.js"></script>
    <script src="https://ableproadmin.com/assets/js/pcoded.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.js"></script>
    <script src="{{ asset('assets') }}/js/select2/select2.full.min.js"></script>
    <script src="{{ asset('assets') }}/js/select2/select2.min.js"></script>
    <script src="{{ asset('assets') }}/js/axios.js"></script>
    <script src="{{ asset('assets') }}/js/restAPI.js"></script>
    <script>
        async function checkOSS() {
            try {
                // Menunggu hasil dari CallAPI
                const getDataRest = await CallAPI('GET', '/dummy/check_oss.json');

                // Mengecek status response
                if (getDataRest.status === 200) {
                    const active = getDataRest.data.data.is_active; // Mengambil nilai is_active

                    if (active === false) {
                        adjustWizardSteps(); // Langsung ke step-2 jika active === false
                    }
                }
            } catch (error) {
                // Menangani error
                if (error.response) {
                    console.error('Error response:', error.response);
                } else {
                    console.error('Error:', error.message);
                }
            }
        }

        function adjustWizardSteps() {
            // Menyembunyikan semua langkah
            const steps = document.querySelectorAll('.wizard-step');
            steps.forEach((step) => {
                step.style.display = 'none';
            });

            // Menampilkan langkah kedua (step-2)
            const step2 = document.querySelector('.wizard-step.step-2');
            if (step2) {
                step2.style.display = 'block'; // Tampilkan step-2
            } else {
                console.error('Step 2 element not found in DOM.');
            }
        }

        function selectFilter(id) {
            if (id === '#input-provinsi') {
                $(id).select2({
                    ajax: {
                        url: `{{ env("SERVICE_BASE_URL") }}/provinsi/list`,
                        dataType: 'json',
                        delay: 500,
                        headers: {
                            Authorization: `Bearer ${Cookies.get('auth_token')}`
                        },
                        data: function(params) {
                            let query = {
                                search: params.term,
                                page: 1,
                                limit: 30,
                                ascending: 1
                            }
                            return query;
                        },
                        processResults: function(res) {
                            let data = res.data;
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.name
                                    }
                                })
                            };
                        },
                    },
                    allowClear: true,
                    placeholder: 'Pilih Provinsi',
                    width: '100%' // Menyesuaikan lebar elemen Select2 dengan container
                });
            } else if (id === '#input-kota') {
                $(id).select2({
                    ajax: {
                        url: `{{ env("SERVICE_BASE_URL") }}/kota/list`,
                        dataType: 'json',
                        delay: 500,
                        headers: {
                            Authorization: `Bearer ${Cookies.get('auth_token')}`
                        },
                        data: function(params) {
                            let query = {
                                search: params.term,
                                page: 1,
                                limit: 30,
                                ascending: 1
                            }
                            return query;
                        },
                        processResults: function(res) {
                            let data = res.data;
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.name
                                    }
                                })
                            };
                        },
                    },
                    allowClear: true,
                    placeholder: 'Pilih Kota',
                    width: '100%' // Menyesuaikan lebar elemen Select2 dengan container
                });
            } else if (id === '#input-pelayanan') {
                $(id).select2({
                    ajax: {
                        url: `/dummy/service_type.json`,
                        dataType: 'json',
                        delay: 500,
                        headers: {
                            Authorization: `Bearer ${Cookies.get('auth_token')}`
                        },
                        data: function(params) {
                            let query = {
                                search: params.term,
                                page: 1,
                                limit: 30,
                                ascending: 1
                            }
                            return query;
                        },
                        processResults: function(res) {
                            let data = res.data;
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.name
                                    }
                                })
                            };
                        },
                    },
                    allowClear: true,
                    placeholder: 'Pilih jenis pelayanan',
                    width: '100%' // Menyesuaikan lebar elemen Select2 dengan container
                });
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            const steps = document.querySelectorAll(".wizard-step");
            const wizardContainer = document.querySelector(".wizard-container");
            let currentStep = 0;

            const showStep = (index) => {
                steps.forEach((step, idx) => {
                    step.style.display = idx === index ? "block" : "none";
                });
            };

            const nextButtons = document.querySelectorAll("button[type='submit']");
            const prevButtons = document.querySelectorAll(".prev-btn");

            nextButtons.forEach((button, idx) => {
                button.addEventListener("click", (event) => {
                    event.preventDefault(); // Hentikan pengiriman form
                    if (idx < steps.length - 1) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });
            });

            prevButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    if (currentStep > 0) {
                        currentStep--;
                        showStep(currentStep);
                    }
                });
            });

            // Tampilkan langkah pertama saat pertama kali halaman dimuat
            showStep(currentStep);

            // Panggil fungsi checkOSS secara otomatis
            checkOSS();

            // Inisialisasi Select2
            selectFilter('#input-provinsi');
            selectFilter('#input-kota');
            selectFilter('#input-pelayanan');
        });
    </script>

</body>

</html>
