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
                                    <p class="mb-0">PT NUSANTARA TECH INOVATOR</p>
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
                        <li class="nav-item" role="presentation"><a class="nav-link active" id="followers-tab" data-bs-toggle="tab"
                            href="#followers" role="tab" aria-selected="false" tabindex="-1"><i
                                class="ti ti-building me-2"></i> Informasi Perusahaan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab"
                                data-bs-toggle="tab" href="#profile" role="tab" aria-selected="true"><i
                                    class="ti ti-file me-2"></i> Sertifikat SMK</a></li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xxl-9">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Tentang PT NUSANTARA TECH INOVATOR</h5>
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
                                                    <p class="mb-1 text-muted">Nama Direktur</p>
                                                    <p class="mb-0">Anshan Handgun</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Father Name</p>
                                                    <p class="mb-0">Mr. Deepen Handgun</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Phone</p>
                                                    <p class="mb-0">(+1-876) 8654 239 581</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Country</p>
                                                    <p class="mb-0">New York</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Email</p>
                                                    <p class="mb-0">anshan.dh81@gmail.com</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Zip Code</p>
                                                    <p class="mb-0">956 754</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0 pb-0">
                                            <p class="mb-1 text-muted">Address</p>
                                            <p class="mb-0">Street 110-B Kalians Bag, Dewan, M.P. New York</p>
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
                            {{-- <div class="card">
                                <div class="card-header">
                                    <h5>Tipe Layanan Perusahaan</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div
                                            class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                            <div class="datatable-top">
                                                <div class="datatable-dropdown">
                                                    <label>
                                                        <select class="datatable-selector" name="per-page">
                                                            <option value="5">5</option>
                                                            <option value="10" selected="">10</option>
                                                            <option value="15">15</option>
                                                            <option value="20">20</option>
                                                            <option value="25">25</option>
                                                        </select> entries per page
                                                    </label>
                                                </div>
                                                <div class="datatable-search">
                                                    <input class="datatable-input" placeholder="Search..." type="search"
                                                        name="search" title="Search within table"
                                                        aria-controls="pc-dt-simple">
                                                </div>
                                            </div>
                                            <div class="datatable-container">
                                                <table class="table table-hover datatable-table" id="pc-dt-simple">
                                                    <thead>
                                                        <tr>
                                                            <th data-sortable="true" style="width: 24%;"><button
                                                                    class="datatable-sorter">NAME</button></th>
                                                            <th data-sortable="true" style="width: 13.777777777777779%;">
                                                                <button class="datatable-sorter">MOBILE</button>
                                                            </th>
                                                            <th data-sortable="true" style="width: 16.666666666666664%;">
                                                                <button class="datatable-sorter">QUALIFICATION</button>
                                                            </th>
                                                            <th data-sortable="true" style="width: 13%;"><button
                                                                    class="datatable-sorter">EMAIL</button></th>
                                                            <th data-sortable="true" style="width: 17.77777777777778%;">
                                                                <button class="datatable-sorter">ADMISSION DATE</button>
                                                            </th>
                                                            <th data-sortable="true" style="width: 14.777777777777779%;">
                                                                <button class="datatable-sorter">ACTION</button>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-index="0">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0"><img
                                                                            src="../assets/images/user/avatar-1.jpg"
                                                                            alt="user image" class="img-radius wid-40">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <h6 class="mb-0">Airi Satou</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>(123) 4567 890</td>
                                                            <td>B.COM., M.COM.</td>
                                                            <td>Info@123.com</td>
                                                            <td>2023/09/12</td>
                                                            <td><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-eye f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-edit f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-trash f-20"></i></a></td>
                                                        </tr>
                                                        <tr data-index="1">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0"><img
                                                                            src="../assets/images/user/avatar-2.jpg"
                                                                            alt="user image" class="img-radius wid-40">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <h6 class="mb-0">Ashton Cox</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>(123) 4567 890</td>
                                                            <td>B.COM., M.COM.</td>
                                                            <td>Info@123.com</td>
                                                            <td>2023/12/24</td>
                                                            <td><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-eye f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-edit f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-trash f-20"></i></a></td>
                                                        </tr>
                                                        <tr data-index="2">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0"><img
                                                                            src="../assets/images/user/avatar-3.jpg"
                                                                            alt="user image" class="img-radius wid-40">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <h6 class="mb-0">Bradley Greer</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>(123) 4567 890</td>
                                                            <td>B.A, B.C.A</td>
                                                            <td>Info@123.com</td>
                                                            <td>2022/09/19</td>
                                                            <td><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-eye f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-edit f-20"></i> </a><a href="#"
                                                                    class="avtar avtar-xs btn-link-secondary"><i
                                                                        class="ti ti-trash f-20"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="datatable-bottom">
                                                <div class="datatable-info">Showing 1 to 10 of 16 entries</div>
                                                <nav class="datatable-pagination">
                                                    <ul class="datatable-pagination-list">
                                                        <li
                                                            class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                                            <button data-page="1"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 1">‹</button>
                                                        </li>
                                                        <li class="datatable-pagination-list-item datatable-active"><button
                                                                data-page="1" class="datatable-pagination-list-item-link"
                                                                aria-label="Page 1">1</button></li>
                                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 2">2</button></li>
                                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                                class="datatable-pagination-list-item-link"
                                                                aria-label="Page 2">›</button></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
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
                                                    <p class="text-muted mb-0">Aktif</p>
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
                                                    <p class="text-muted mb-0">20 November 2024</p>
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
                                                    <p class="text-muted mb-0">20 November 2029</p>
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
                                    <h5>Sertifikat 10/XVI/009/291/04/01</h5>
                                    <div id="pdf-container"
                                        style="width: 100%; height: 500px; border: 1px solid #ccc; overflow: auto;">
                                        <div id="pdf-viewer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3">
                    <div class="card border-0 shadow-none drp-upgrade-card"
                        style="background-image: url(../assets/images/layout/img-profile-card.jpg)">
                        <div class="card-body">
                            <div class="user-group"><img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                    class="avtar"> <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                                    class="avtar"> <img src="../assets/images/user/avatar-3.jpg" alt="user-image"
                                    class="avtar"> <img src="../assets/images/user/avatar-4.jpg" alt="user-image"
                                    class="avtar"> <img src="../assets/images/user/avatar-5.jpg" alt="user-image"
                                    class="avtar"> <span class="avtar bg-light-primary text-primary">+20</span></div>
                            <h3 class="mt-2 mb-4 text-secondary">245.3k <small class="text-muted">Followers</small></h3>
                            <h5 class="mb-0 text-secondary">People Stebin Ben Follows</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Bio</h5>
                            <div class="dropdown"><a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                    href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="material-icons-two-tone f-18">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                            <hr class="my-3 border border-secondary-subtle">
                            <ul class="list-unstyled mb-0">
                                <li><a class="d-flex align-items-center text-muted text-hover-primary mb-2"
                                        href="https://phoenixcoded.net/" target="_blank">
                                        <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2"><i
                                                class="material-icons-two-tone text-secondary f-16">language</i></div>
                                        <span class="text-truncate w-100">https://phoenixcoded.net/</span>
                                    </a></li>
                                <li>
                                    <div class="d-flex align-items-center text-muted mb-2">
                                        <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2"><i
                                                class="material-icons-two-tone text-secondary f-16">home</i></div><span
                                            class="text-truncate w-100">Hanoi, Vietnam</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center text-muted mb-2">
                                        <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2"><i
                                                class="material-icons-two-tone text-secondary f-16">calendar_today</i>
                                        </div><span class="text-truncate w-100">Auguest, 21,1996</span>
                                    </div>
                                </li>
                                <li><a class="d-flex align-items-center text-muted text-hover-primary mb-2"
                                        href="mailto:demo123@mail.com" target="_blank">
                                        <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2"><i
                                                class="material-icons-two-tone text-secondary f-16">email</i></div><span
                                            class="text-truncate w-100">demo123@mail.com</span>
                                    </a></li>
                            </ul>
                            <hr class="my-3 border border-secondary-subtle">

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
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>


    {{-- <script src="{{ asset('assets') }}//js/pages/chart-apex.js"></script> --}}
    <script>
        // IFRAME
        const pdfUrl = 'https://storage.hubdat.dephub.go.id/tdbupj-dev/testing--yGywXxuU5hzB9256gu-c.pdf';

        const loadingTask = pdfjsLib.getDocument(pdfUrl);
        loadingTask.promise.then(function(pdf) {
            const container = document.getElementById('pdf-viewer');
            for (let i = 1; i <= pdf.numPages; i++) {
                pdf.getPage(i).then(function(page) {
                    const scale = 1.5;
                    const viewport = page.getViewport({
                        scale
                    });

                    // Create canvas element
                    const canvas = document.createElement('canvas');
                    const context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;
                    canvas.style.borderBottom = '1px solid #ddd'; // Border between pages
                    canvas.style.marginBottom = '10px'; // Margin between pages

                    // Render PDF page on canvas
                    const renderContext = {
                        canvasContext: context,
                        viewport: viewport,
                    };
                    page.render(renderContext);

                    // Append canvas to container
                    container.appendChild(canvas);
                });
            }
        }).catch(function(error) {
            console.error('Error loading PDF:', error);
            const errorMessage = document.createElement('p');
            errorMessage.textContent = 'Failed to load PDF. Please try again later.';
            document.getElementById('pdf-viewer').appendChild(errorMessage);
        });

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

        // Update countdown setiap detik
        setInterval(updateCountdown, 1000);


        var options_bar_chart_3 = {
            chart: {
                height: 350,
                type: 'bar'
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    dataLabels: {
                        position: 'top'
                    }
                }
            },
            colors: ['#4680FF', '#2CA87F'],
            dataLabels: {
                enabled: true,
                offsetX: -6,
                style: {
                    fontSize: '12px',
                    colors: ['#fff']
                }
            },
            stroke: {
                show: true,
                width: 1,
                colors: ['#fff']
            },
            series: [{
                    data: [44, 55, 41, 64, 22, 43, 21, 35, 50]
                },
                {
                    data: [53, 32, 33, 52, 13, 44, 32, 40, 120]
                }
            ],
            xaxis: {
                categories: [
                    'AJAP',
                    'AKAP',
                    'AKDP',
                    'Alat Berat',
                    'Angkot/Angdes',
                    'Angkutan B3',
                    'Angkutan Barang Umum',
                    'Angkutan Lintas Batas Negara',
                    'Pariwisata'
                ]
            }
        };
        var chart_bar_chart_3 = new ApexCharts(document.querySelector('#bar-chart-3'), options_bar_chart_3);
        chart_bar_chart_3.render();


        var options_pie_chart_2 = {
            chart: {
                height: 320,
                type: 'donut'
            },
            series: [44, 55, 41, 17, 15, 23, 30, 22], // Tambahkan total sesuai jumlah data
            colors: ['#4680FF', '#E58A00', '#2CA87F', '#3EC9D6', '#9B59B6', '#006400', '#DC2626',
                '#F4D03F'
            ], // Warna tambahan
            labels: [
                'Pengajuan',
                'Tidak Lulus Penilaian',
                'Lulus Penilaian',
                'Lulus Verifikasi Penilaian',
                'Wawancara Terjadwal',
                'Verifikasi Direktur',
                'Ditolak',
                'Kadaluwarsa'
            ], // Tambahkan label untuk mencocokkan data
            legend: {
                show: false,
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    donut: {
                        labels: {
                            show: true,
                            name: {
                                show: false
                            },
                            value: {
                                show: true
                            }
                        }
                    }
                }
            },
            dataLabels: {
                enabled: true,
                dropShadow: {
                    enabled: false
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var chart_pie_chart_2 = new ApexCharts(document.querySelector('#pie-chart-2'), options_pie_chart_2);
        chart_pie_chart_2.render();


        var options_mixed_chart_2 = {
            chart: {
                height: 350,
                type: 'line',
                stacked: false
            },
            stroke: {
                width: [0, 2, 5],
                curve: 'smooth'
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%'
                }
            },
            colors: ['#DC2626', '#4680FF', '#E58A00'],
            series: [{
                    name: 'Facebook',
                    type: 'column',
                    data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
                },
                {
                    name: 'Vine',
                    type: 'area',
                    data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
                },
                {
                    name: 'Dribbble',
                    type: 'line',
                    data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
                }
            ],
            fill: {
                opacity: [0.85, 0.25, 1],
                gradient: {
                    inverseColors: false,
                    shade: 'light',
                    type: 'vertical',
                    opacityFrom: 0.85,
                    opacityTo: 0.55,
                    stops: [0, 100, 100, 100]
                }
            },
            labels: [
                '01/01/2003',
                '02/01/2003',
                '03/01/2003',
                '04/01/2003',
                '05/01/2003',
                '06/01/2003',
                '07/01/2003',
                '08/01/2003',
                '09/01/2003',
                '10/01/2003',
                '11/01/2003'
            ],
            markers: {
                size: 0
            },
            xaxis: {
                type: 'datetime'
            },
            yaxis: {
                min: 0
            },
            tooltip: {
                shared: true,
                intersect: false,
                y: {
                    formatter: function(y) {
                        if (typeof y !== 'undefined') {
                            return y.toFixed(0) + ' views';
                        }
                        return y;
                    }
                }
            },
            legend: {
                labels: {
                    useSeriesColors: true
                },
                markers: {
                    customHTML: [
                        function() {
                            return '';
                        },
                        function() {
                            return '';
                        },
                        function() {
                            return '';
                        }
                    ]
                }
            }
        };
        var charts_mixed_chart_2 = new ApexCharts(document.querySelector('#mixed-chart-2'), options_mixed_chart_2);
        charts_mixed_chart_2.render();

        const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
            sortable: false,
            perPage: 5
        });
        const dataTable2 = new simpleDatatables.DataTable('#pc-dt-simple2', {
            sortable: false,
            perPage: 10
        });
        // new SimpleBar(document.querySelector('.sale-scroll'));
        // new SimpleBar(document.querySelector('.feed-scroll'));
        new SimpleBar(document.querySelector('.revenue-scroll'));
        new SimpleBar(document.querySelector('.income-scroll'));
        new SimpleBar(document.querySelector('.customer-scroll'));
    </script>
@endsection
