@extends('Company.index', ['title' => 'Dashboard'])
@section('asset_css')
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
    <div class="row"><!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card social-profile" style="position:relative;">
                <img src="../assets/images/application/img-profile-cover.jpg" alt="" class="w-100 card-img-top">
                <div class="card-body pt-0">
                    <div class="row align-items-end">
                        <div class="col-md-auto text-md-start">
                            <img class="img-fluid img-profile-avtar" src="../assets/images/user/avatar-5.jpg"
                                alt="User image">
                        </div>
                        <div class="col">
                            <div class="row justify-content-between align-items-end">
                                <div class="col-md-auto soc-profile-data">
                                    <h5 class="mb-1">Selamat Datang</h5>
                                    <p class="company-name mb-0"></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Countdown -->
                <div id="countdown-card" class="card floating-countdown"
                    style="position:absolute; top:20px; right:20px; width:250px; padding:15px;
                            background:rgba(0, 255, 0, 0.8); box-shadow:0 4px 6px rgba(0, 0, 0, 0.1);
                            border-radius:8px; text-align:center;">
                    <div style="display:flex; align-items:center; gap:10px;">
                        <i id="countdown-icon" class="fa fa-clock" style="font-size:24px; color:#fff;"></i>
                        <h6 style="margin:0; color:#333; font-weight:600;">Laporan Tahunan</h6>
                    </div>
                    <div id="countdown" style="font-size:18px; font-weight:700; color:#fff; margin-top:10px;">
                        00:00:00
                    </div>
                    <p id="countdown-message"
                        style="margin:0; font-size:14px; color:#fff; font-weight:500; margin-top:5px;">
                        Waktu Anda Masih Panjang
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-body py-0">
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
                                    <h5 class="company-name"></h5>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Detail Perusahaan</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 pt-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">NIB Perusahaan</p>
                                                    <p class="company-nib mb-0"></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Nama Penanggung Jawab</p>
                                                    <p class="company-pic-name mb-0"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Telepon</p>
                                                    <p class="company-phone mb-0"></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Kota</p>
                                                    <p class="company-city mb-0"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Email</p>
                                                    <p class="company-email mb-0">anshan.dh81@gmail.com</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Zip Code</p>
                                                    <p class="mb-0">956 754</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0 pb-0">
                                            <p class="mb-1 text-muted">Alamat</p>
                                            <p class="company-address mb-0"></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
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
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h3 class="mb-1">Status</h3>
                                                    <p class="sertificate-status text-muted mb-0"></p>
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
                                                    <p class="sertificate-publish text-muted mb-0"></p>
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
                                                    <p class="sertificate-expired text-muted mb-0"></p>
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
        </div><!-- [ sample-page ] end -->
    </div>
@endsection

@section('scripts')
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/date-language-format.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
@endsection

@section('page_js')
    <script>
        // IFRAME
        const pdfUrl = 'https://storage.hubdat.dephub.go.id/tdbupj-dev/testing--yGywXxuU5hzB9256gu-c.pdf';

        async function getUserData() {
            loadingPage(true);
            const getDataRest = await CallAPI(
                'GET',
                '/dummy/company/dashboard/company.json'
                // '{{ env('ESMK_SERVICE_BASE_URL') }}/company/dashboard/company/perusahaan',

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
                console.log("🚀 ~ getUserData ~ handleDataResult:", handleDataResult)
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
            console.log("🚀 ~ setUserData ~ data:", data)
            $('.company-name').html(data.name);
            $('.company-province').html(data.province_name);
            $('.company-city').html(data.city_name);
            $('.company-phone').html(data.company_phone_number);
            $('.company-email').html(data.email);
            $('.company-address').html(data.address);
            $('.company-service-types').html(`<li class="list-item">${data.service_types}</li>`);
            $('.company-nib').html(data.nib);
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
                '/dummy/company/dashboard/getSMK.json'
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
                let handleDataResult = await handleSertifikatData(getDataRest.data.data);
                await setSertifikatData(handleDataResult);
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
                    color: isActive ? "text-white bg-success" : "text-white bg-danger",
                    text_status: isActive ? "Aktif" : "Tidak Aktif",
                    icon_status: isActive ? "fas fa-circle-check" : "fas fa-circle-xmark",
                },
                expired: {
                    text_status: statusText,
                    color: `${colorClass} text-white`, // Pastikan semua teks berwarna putih
                }
            };

            return handleData;
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
            console.log(data.number_of_certificate)
            $('.sertificate-number').html(data.number_of_certificate);
            $('.sertificate-status').html(data.is_active.text_status).addClass(`badge ${data.is_active.color}`);
            $('.sertificate-publish').html(data.publish_date);
            $('.sertificate-expired').html(data.expired_date).addClass(`badge ${data.expired.color}`);
        }

        // Set the countdown time (e.g., 5 minutes from now)
        const skIssueDate = new Date("2023-12-29"); // Tanggal terbit SK
        const nextReportDate = new Date(skIssueDate);
        nextReportDate.setFullYear(nextReportDate.getFullYear() + 1); // Laporan tahunan setahun setelah SK

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = nextReportDate - now;

            const countdownCard = document.getElementById("countdown-card");
            const countdownMessage = document.getElementById("countdown-message");
            const countdownIcon = document.getElementById("countdown-icon");

            if (distance >= 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("countdown").innerHTML =
                    `${days}d ${hours.toString().padStart(2, '0')}h ${minutes.toString().padStart(2, '0')}m ${seconds.toString().padStart(2, '0')}s`;

                // Update warna, pesan, dan ikon berdasarkan sisa waktu
                if (days > 30) {
                    countdownCard.style.background = "rgba(60, 179, 113, 0.8)"; // Hijau: Waktu masih lama
                    countdownMessage.textContent = "Waktu Anda Masih Panjang";
                    countdownIcon.className = "fa fa-smile"; // Ikon senyum
                } else if (days <= 30 && days > 7) {
                    countdownCard.style.background = "rgba(255, 255, 0, 0.8)"; // Kuning: Waktu mendekati deadline
                    countdownMessage.textContent = "Jangan Lupa Siapkan Laporan";
                    countdownIcon.className = "fa fa-exclamation-circle"; // Ikon peringatan
                } else {
                    countdownCard.style.background = "rgba(255, 0, 0, 0.8)"; // Merah: Deadline sudah dekat
                    countdownMessage.textContent = "Segera Kirimkan Laporan Anda";
                    countdownIcon.className = "fa fa-times-circle"; // Ikon bahaya
                }
            } else {
                document.getElementById("countdown").innerHTML = "Waktu Habis!";
                countdownCard.style.background = "rgba(128, 128, 128, 0.8)"; // Abu-abu: Waktu habis
                countdownMessage.textContent = "Laporan tahunan belum dilakukan!";
                countdownIcon.className = "fa fa-ban"; // Ikon larangan
            }
        }

        async function initPageLoad() {
            await Promise.all([
                getUserData(),
                getSertifikatData()
            ])

            // Update countdown setiap detik
            setInterval(updateCountdown, 1000);
        }
    </script>
    @include('Company.partial-js')
@endsection
