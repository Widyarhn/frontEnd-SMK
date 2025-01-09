@extends('Company.index', ['title' => 'Dashboard'])
@section('asset_css')
    <style>
        .profile-avatar {
            position: absolute;
            top: -50px;
            left: 0;
            z-index: 1;
        }

        #countdown-card {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(0, 255, 0, 0.8);
        }


        @media (max-width: 767px) {
            .profile-avatar {
                position: relative;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
                margin-bottom: 20px;
            }

            .profile-tabs {
                align-items: center;
                justify-content: center;
            }

            #countdown-card {
                position: relative;
                top: 0;
                padding: 15px;
                right: 0;
                margin: 0 auto;
            }

        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card social-profile" style="position:relative;">
                <div class="card welcome-banner bg-blue-800 w-100 card-img-top"
                    style="background: #0f2a7d; border-radius: 0;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="p-4">
                                    <p class="text-white">
                                        SMK-TD adalah sistem yang dirancang untuk mendukung perusahaan angkutan umum dalam
                                        menerapkan dan memantau standar keselamatan operasional. Sistem ini memantau kinerja
                                        keselamatan secara berkelanjutan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo and Info Section -->
                <div class="card-body pt-0 position-relative">
                    <div class="row align-items-center justify-content-center flex-column flex-md-row">
                        <!-- User Avatar -->
                        <div class="col-lg-2 col-12 text-lg-start ms-0 ms-lg-2 profile-avatar"
                            style="position: absolute; top: -50px;">
                            <img class="img-fluid rounded-circle" src="../assets/images/company.png" alt="User image"
                                style="width: 80px; height: 80px; border-radius: 50%; border: 3px solid white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        </div>

                        <!-- Company Info -->
                        <div class="col-lg-7 col-12 ms-0 ms-lg-5 mt-5 mt-lg-0 text-center text-lg-start mb-3 mb-md-0">
                            <div class="ms-0 ms-lg-5">
                                <h5 class="company-name mb-1">PT Cahaya AKAP</h5>
                                <p class="company-nib mb-0">NIB: 1165411111</p>
                            </div>
                        </div>

                        <!-- Sinkronisasi OSS Button -->
                        <div class="col-lg-3 col-12 ms-auto text-lg-end">
                            <button class="btn btn-primary btn-sync-oss" id="syncOss">Sinkronisasi OSS</button>
                        </div>
                    </div>
                </div>


                <div id="countdown-card" class="card floating-countdown mb-5 mb-lg-0"
                    style=" width: 250px; padding: 15px; box-shadow:0 4px 6px rgba(0, 0, 0, 0.1);
                       border-radius:8px; text-align:center;">
                    <div style="display:flex; align-items:center; gap:10px; justify-content: center;">
                        <h6 style="margin:0; color:#000000; font-weight:600; text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);">
                            Laporan Tahunan</h6>
                    </div>
                    <div id="countdown-timer"
                        style="font-size:18px; font-weight:700; color:#000000; margin-top:10px; text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);">
                        00:00:00
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body py-0 ">
                    <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" id="followers-tab"
                                data-bs-toggle="tab" href="#followers" role="tab" aria-selected="false"
                                tabindex="-1"><i class="ti ti-building me-2"></i> Informasi Perusahaan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                href="#profile" role="tab" aria-selected="true"><i class="ti ti-file me-2"></i>
                                Sertifikat SMK</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xxl-12">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Detail Perusahaan</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 pt-0">
                                            <div class="row">
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <p class="mb-1 text-muted">NIB Perusahaan</p>
                                                    <p class="company-nib mb-0"></p>
                                                </div>
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <p class="mb-1 text-muted">Nama Penanggung Jawab</p>
                                                    <p class="company-pic-name mb-0"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <p class="mb-1 text-muted">Telepon</p>
                                                    <p class="company-phone mb-0"></p>
                                                </div>
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <p class="mb-1 text-muted">Kota</p>
                                                    <p class="company-city mb-0"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <p class="mb-1 text-muted">Email</p>
                                                    <p class="company-email mb-0">anshan.dh81@gmail.com</p>
                                                </div>
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <p class="mb-1 text-muted">Zip Code</p>
                                                    <p class="mb-0">956 754</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0 pb-0">
                                            <p class="mb-1 text-muted">Alamat</p>
                                            <p class="company-address mb-4"></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="card">
                                <div class="card-header">
                                    <h5>Dokumen Perusahaan</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 pt-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Master Degree (Year)</p>
                                                    <p class="mb-0">2014-2017</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Institute</p>
                                                    <p class="mb-0">-</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Bachelor (Year)</p>
                                                    <p class="mb-0">2011-2013</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Institute</p>
                                                    <p class="mb-0">Imperial College London</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0 pb-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">School (Year)</p>
                                                    <p class="mb-0">2009-2011</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Institute</p>
                                                    <p class="mb-0">School of London, England</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h3 class="mb-1">Status</h3>
                                                    <p class="sertificate-status text-white mb-0"></p>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <i class="fa-regular fa-file-alt fa-lg text-primary f-36"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h3 class="mb-1">Tanggal Terbit</h3>
                                                    <p class="sertificate-publish badge text-white mb-0"
                                                        style="background: #002688;"></p>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <i class="fa-regular fa-calendar-alt fa-lg text-primary f-36"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h3 class="mb-1">Masa Berlaku</h3>
                                                    <p class="sertificate-expired text-white mb-0"></p>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <i class="fa-solid fa-clock fa-lg text-primary f-36"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5>Sertifikat <span class="sertificate-number"></span></h5>
                                    <div id="pdf-container"
                                        style="width: 100%; height: 500px; border: 1px solid #ccc; overflow: auto;">
                                        <div id="pdf-viewer"></div>
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
    <script src="{{ asset('assets') }}/js/plugins/date-language-format.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    <script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
@endsection

@section('page_js')
    <script>
        let nextReportDate;

        async function getUserData() {
            loadingPage(true);
            const getDataRest = await CallAPI(
                'GET',
                '{{ env('SERVICE_BASE_URL') }}/company/dashboard/company/perusahaan',

            ).then(function(response) {
                return response;
            }).catch(function(error) {
                loadingPage(false);
                let resp = error.response;
                notificationAlert('info', 'Pemberitahuan', resp.data.message);
                return resp;
            });
            loadingPage(false);
            if (getDataRest.status == 200) {
                let handleDataResult = await handleUserData(getDataRest.data.data);
                await setUserData(handleDataResult);
            }
        }

        async function handleUserData(data) {
            const isActive = (data['is_active'] === true) || (data['is_active'] === 1);

            let handleData = {
                id: data['id'] ?? '-',
                name: data['name'] ?? '-',
                username: data['username'] ?? '-',
                phone_number: data['phone_number'] ?? '-',
                email: data['email'] ?? '-',
                email_verified_at: data['email_verified_at'] ?? '-',
                nib: data['nib'] ?? '-',
                address: data['address'] ?? '-',
                company_phone_number: data['company_phone_number'] ?? '-',
                pic_name: data['pic_name'] ?? '-',
                pic_phone: data['pic_phone'] ?? '-',
                request_date: data['request_date'] ?? '-',
                approved_at: data['approved_at'] ?? '-',
                approved_by: data['approved_by'] ?? '-',
                created_at: data['created_at'] ?? '-',
                updated_at: data['updated_at'] ?? '-',
                established: data['established'] ?? '-',
                exist_spionam: data['exist_spionam'] ?? '-',
                province_name: (data['province'] && data['province']['name']) ? data['province']['name'] : '-',
                city_name: (data['city'] && data['city']['name']) ? data['city']['name'] : '-',
                is_active: {
                    init: data['is_active'] ?? '-',
                    color: isActive ? "text-success" : "text-danger",
                    text_status: isActive ? "Aktif" : "Tidak Aktif",
                    icon_status: isActive ? "fas fa-circle-check" : "fas fa-circle-xmark",
                },
                service_types: (data['service_types']?.map(service => service['name']).join(', ')) ?? '-'
            };

            return handleData;
        }

        async function setUserData(data) {
            $('.company-name').html(data.name);
            $('.company-province').html(data.province_name);
            $('.company-city').html(data.city_name);
            $('.company-phone').html(data.company_phone_number);
            $('.company-email').html(data.email);
            $('.company-address').html(data.address);
            $('.company-service-types').html(`<li class="list-item">${data.service_types}</li>`);
            $('.company-nib').html('NIB : ' + data.nib);
            $('.company-joined-date').html(formatTanggalIndo(data.created_at != '-' || data.created_at == null ? data
                .created_at : data.request_date));
            $('.company-pic-name').html(data.pic_name);
            $('.company-pic-phone').html(data.pic_phone);
            $('.company-user-name').html(data.username);
            $('.company-user-phone').html(data.phone_number);
            $('.company-is-active').addClass(`${data.is_active.icon_status} ${data.is_active.color}`);
        }

        async function getSertifikatData() {
            loadingPage(true);
            const getDataRest = await CallAPI(
                'GET',
                '{{ env('SERVICE_BASE_URL') }}/company/dashboard/company/getsmk',
            ).then(function(response) {
                return response;
            }).catch(function(error) {
                loadingPage(false);
                let resp = error.response;
                notificationAlert('info', 'Pemberitahuan', resp.data.message);
                return resp;
            });

            loadingPage(false);
            if (getDataRest.status == 200) {
                let data = getDataRest.data.data;

                let skIssueDate = new Date(data.publish_date);
                let expiredDate = new Date(data.expired_date);

                // Hitung daftar tanggal laporan tahunan hingga maksimal 5 tahun atau expired_date
                let annualReportDates = calculateAnnualReportDates(skIssueDate, expiredDate);

                let handleDataResult = await handleSertifikatData(getDataRest.data.data);
                await setSertifikatData(handleDataResult);
                startCountdown(annualReportDates, expiredDate);
            }
        }

        function startCountdown(annualReportDates, expiredDate) {
            setInterval(() => {
                updateCountdown(annualReportDates, expiredDate);
            }, 1000); // Memperbarui setiap 1 detik

            // Jalankan pembaruan pertama kali
            updateCountdown(annualReportDates, expiredDate);
        }

        // Fungsi menghitung countdown
        function updateCountdown(annualReportDates, expiredDate) {
            const now = new Date(); // Waktu saat ini

            // Cek jika expired sudah lewat
            if (now >= expiredDate) {
                document.getElementById('countdown-timer').innerHTML = 'Kedaluwarsa';
                return;
            }

            // Temukan laporan tahunan berikutnya
            let nextReportDate = annualReportDates.find(date => date > now);

            if (!nextReportDate) {
                document.getElementById('countdown-timer').innerHTML = 'Tidak ada laporan tahunan lagi.';
                return;
            }

            // Hitung selisih waktu
            let diff = nextReportDate - now;
            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((diff % (1000 * 60)) / 1000);

            // Tampilkan countdown
            document.getElementById('countdown-timer').innerHTML =
                `${days} hari, ${hours} jam, ${minutes} menit, ${seconds} detik`;
        }

        // Fungsi menghitung daftar tanggal laporan tahunan
        function calculateAnnualReportDates(skIssueDate, expiredDate) {
            let dates = [];
            let currentDate = new Date(skIssueDate);

            while (currentDate < expiredDate) {
                currentDate.setFullYear(currentDate.getFullYear() + 1);
                dates.push(new Date(currentDate));
            }

            return dates;
        }


        function setCountdownStyle(countdownCard, countdownMessage, countdownIcon, days) {
            if (days > 30) {
                countdownCard.style.background = "rgba(34, 139, 34, 0.9)";
                countdownMessage.textContent = "Waktu Anda Masih Panjang";
                countdownIcon.className = "fa fa-smile";
            } else if (days <= 30 && days > 7) {
                countdownCard.style.background = "rgba(218, 165, 32, 0.9)";
                countdownMessage.textContent = "Jangan Lupa Siapkan Laporan";
                countdownIcon.className = "fa fa-exclamation-circle";
            } else {
                countdownCard.style.background = "rgba(139, 0, 0, 0.9)";
                countdownMessage.textContent = "Segera Kirimkan Laporan Anda";
                countdownIcon.className = "fa fa-times-circle";
            }
        }

        async function handleSertifikatData(data) {
            const isActive = (data['is_active'] === true) || (data['is_active'] === 1);
            const today = new Date();
            const expiredDate = new Date(data['expired_date']);
            let statusText = '';
            let colorClass = '';

            if (expiredDate < today) {
                statusText = "Kadaluarsa";
                colorClass = "bg-danger";
            } else if ((expiredDate - today) < (30 * 24 * 60 * 60 * 1000)) {
                statusText = "Segera Kadaluarsa";
                colorClass = "bg-warning text-dark"; // Tambahkan `text-dark` untuk `bg-warning`
            } else {
                statusText = "Aktif";
                colorClass = "bg-success";
            }

            let handleData = {
                id: data['id'] ?? '-',
                certificate_file: data['certificate_file'] ?? '-',
                publish_date: data['publish_date'] ? dateLanguageFormat(data['publish_date']) : 'Belum Terdaftar',
                expired_date: data['expired_date'] ? dateLanguageFormat(data['expired_date']) : 'Belum Terdaftar',
                number_of_certificate: data['number_of_certificate'] ?? '-',
                is_active: {
                    init: data['is_active'] ?? '-',
                    color: isActive ? "text-white bg-success" : "text-dark bg-danger",
                    text_status: isActive ? "Aktif" : "Tidak Aktif",
                    icon_status: isActive ? "fas fa-circle-check" : "fas fa-circle-xmark",
                },
                expired: {
                    text_status: statusText,
                    color: `${colorClass} text-dark`, // Pastikan semua teks berwarna putih
                }
            };

            return handleData;
        }

        async function setSertifikatData(data) {
            const certificatePdfContainer = $('#certificate-pdf');

            if (data.certificate_file && data.certificate_file !== '-') {
                certificatePdfContainer.html(`
                <div id="pdf-viewer-container" style="width: 100%; height: 400px; position: relative; overflow: auto;"></div>
            `);
                await loadPDF(data.certificate_file);
            } else {
                certificatePdfContainer.html(`
                <h4 class="mt-4 fw-semibold">Sertifikat belum ada</h4>
                <p class="text-muted mt-3">Silahkan lengkapi proses pengajuan sertifikat SMK <a href="javascript:void(0)">Disini</a></p>
                <div class="mt-4">
                    <div class="row justify-content-center mt-5 mb-2">
                        <div class="col-sm-7 col-8 mb-4">
                            <img src="{{ asset('assets/images/verification-img.png') }}" alt="Informasi Sertifikat" class="img-fluid">
                        </div>
                    </div>
                </div>
            `);
            }

            $('.sertificate-number').html(data.number_of_certificate);
            $('.sertificate-status').html(data.is_active.text_status).addClass(`badge ${data.is_active.color}`);
            $('.sertificate-publish').html(data.publish_date);
            $('.sertificate-expired').html(data.expired_date).addClass(`badge ${data.expired.color}`);

        }

        async function checkOSS() {
            loadingPage(true);
            const getDataRest = await CallAPI(
                'GET',
                '{{ env('SERVICE_BASE_URL') }}/company/setting/find', {
                    name: "oss"
                }
            ).then(function(response) {
                return response;
            }).catch(function(error) {
                loadingPage(false);
                let resp = error.response;
                notificationAlert('info', 'Pemberitahuan', resp.data.message);
                return resp;
            });

            loadingPage(false);

            if (getDataRest.status == 200) {
                let data = getDataRest.data.data;

                if (data.is_active === 0) {
                    const btnSync = document.querySelector('.btn-sync-oss');
                    if (btnSync) {
                        btnSync.style.display = 'none';
                    }
                }
            }
        }

        async function syncDataOss() {
            $(document).on("click", "#syncOss", async function() {
                swal({
                    title: `Sync data dengan OSS?`,
                    text: "Data akan diperbaharui",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonColor: '#6F6F6F',
                    confirmButtonColor: '#28a745    ',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, Saya Yakin',
                }).then(async (result) => {
                    loadingPage(true)
                    let postDataRest = await CallAPI(
                        'GET',
                        `{{ env('SERVICE_BASE_URL') }}/company/syncOss`
                    ).then(function(response) {
                        loadingPage(false)
                        return response;
                    }).catch(function(error) {
                        loadingPage(false);
                        let resp = error.response;
                        notificationAlert('info', 'Pemberitahuan', resp.data
                            .message);
                        return resp;
                    });

                    if (postDataRest.status == 200) {
                        loadingPage(false);
                        notificationAlert('success', 'Berhasil', postDataRest.data
                            .message);
                    }
                }).catch(swal.noop);
            })
        }

        async function loadPDF(url) {
            const loadingTask = pdfjsLib.getDocument(url);
            const pdf = await loadingTask.promise;

            const container = document.getElementById('pdf-viewer');
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');
            let scale = 1.5;
            let currentPage = 1;

            const renderPage = async (pageNum) => {
                const page = await pdf.getPage(pageNum);
                const viewport = page.getViewport({
                    scale: scale
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                container.innerHTML = '';
                container.appendChild(canvas);

                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                await page.render(renderContext).promise;
            };

            await renderPage(currentPage);

            container.style.overflow = 'auto';
            container.style.maxHeight = '100%';
            container.style.position = 'relative';
            canvas.style.maxWidth = '100%';
            canvas.style.height = 'auto';
            canvas.style.display = 'block';
            canvas.style.margin = '0 auto';

        }



        async function initPageLoad() {
            await Promise.all([
                getUserData(),
                checkOSS(),
                getSertifikatData(),
                syncDataOss(),

            ])
        }
    </script>
    @include('Company.partial-js')
@endsection
