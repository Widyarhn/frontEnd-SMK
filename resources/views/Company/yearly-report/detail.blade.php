@extends('...Company.index', ['title' => 'Tambah Element SMK | Master Data Element'])
@section('asset_css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/style.css" />
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

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
                        <li class="breadcrumb-item"><a href="/company/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/company/yearly-report/list">Laporan Tahunan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail Laporan Tahunan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Laporan Tahunan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="basicwizard" class="form-wizard row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-3">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item" data-target-form="#contactDetailForm">
                            <a href="#1.1Detail" data-bs-toggle="tab" data-toggle="tab" class="nav-link active">
                                <span class="d-none d-sm-inline fw-bold f-18"><i class="fa-solid fa-shield"></i></span>
                            </a>
                        </li>
                        <li class="nav-item" data-target-form="#jobDetailForm">
                            <a href="#2.2Detail" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                                <span class="d-none d-sm-inline fw-bold f-18"><i
                                        class="fa-solid fa-building-shield"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <!-- START: Define your progress bar here -->
                        <div id="bar" class="progress mb-3" style="height: 7px">
                            <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                        </div>
                        <!-- END: Define your progress bar here -->
                        <!-- START: Define your tab pans here -->
                        <div class="tab-pane show active" id="1.1Detail">
                            <form id="contactForm" method="get">
                                <div class="text-center">
                                    <h3 class="mb-2">Komitmen dan Kebijakan Keselamatan</h3>
                                </div>
                                <div class="table-responsive py-5">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Uraian</th>
                                                <th class="text-center"><span class="text-danger">*</span>Pertanyaan
                                                    Monitoring</th>
                                                <th class="text-center"><span class="text-danger">*</span>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td>
                                                    <div
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px; text-align: left; margin: 0 auto;">
                                                        Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                                        Aliquam semper massa sit amet eros ultricies, eget accumsan enim
                                                        rutrum?
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-light-success" style="font-size: 0.8rem; padding: 0.5em 0.75em;">Jawaban Terverifikasi</span>
                                                    <div class="mt-2">
                                                        <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                           class="me-2 btn btn-sm btn-light-primary">
                                                            <i class="feather icon-eye mx-1"></i>Lihat Dokumen
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td>
                                                    <div
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px; text-align: left; margin: 0 auto;">
                                                        Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                                        Aliquam semper massa sit amet eros ultricies, eget accumsan enim
                                                        rutrum?
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-light-secondary" style="font-size: 0.8rem; padding: 0.5em 0.75em;">Tidak ada perubahan</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td>
                                                    <div
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px; text-align: left; margin: 0 auto;">
                                                        Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                                        Aliquam semper massa sit amet eros ultricies, eget accumsan enim
                                                        rutrum?
                                                    </div>

                                                    <input type="hidden" class="response-value2" value="" />
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-light-success" style="font-size: 0.8rem; padding: 0.5em 0.75em;">Jawaban Terverifikasi</span>
                                                    <div class="mt-2">
                                                        <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                           class="me-2 btn btn-sm btn-light-primary">
                                                            <i class="feather icon-eye mx-1"></i>Lihat Dokumen
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="fw-bold">Pertanyaan Tambahan</td>
                                                <td colspan="2"
                                                    style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu
                                                    fringilla quam. Aenean finibus ipsum sit amet nisi semper, vitae commodo
                                                    metus condimentum.
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-light-success" style="font-size: 0.8rem; padding: 0.5em 0.75em;">Jawaban Terverifikasi</span>
                                                    <div class="mt-2">
                                                        <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                           class="me-2 btn btn-sm btn-light-primary">
                                                            <i class="feather icon-eye mx-1"></i>Lihat Dokumen
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <!-- end contact detail tab pane -->
                        <div class="tab-pane" id="2.2Detail">
                            <form id="jobForm" method="post" action="#">
                                <div class="text-center">
                                    <h3 class="mb-2">Pengorganisasian</h3>
                                    {{-- <small class="text-muted">Let us know your name and email address. Use an address you
                                        don't mind other users contacting you at</small> --}}
                                </div>
                                <div class="table-responsive py-5">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Uraian</th>
                                                <th class="text-center"><span class="text-danger">*</span>Pertanyaan
                                                    Monitoring</th>
                                                <th class="text-center"><span class="text-danger">*</span>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td>
                                                    <div
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px; text-align: left; margin: 0 auto;">
                                                        Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                                        Aliquam semper massa sit amet eros ultricies, eget accumsan enim
                                                        rutrum?
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-light-success" style="font-size: 0.8rem; padding: 0.5em 0.75em;">Jawaban Terverifikasi</span>
                                                    <div class="mt-2">
                                                        <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                           class="me-2 btn btn-sm btn-light-primary">
                                                            <i class="feather icon-eye mx-1"></i>Lihat Dokumen
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td>
                                                    <div
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px; text-align: left; margin: 0 auto;">
                                                        Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                                        Aliquam semper massa sit amet eros ultricies, eget accumsan enim
                                                        rutrum?
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-light-secondary" style="font-size: 0.8rem; padding: 0.5em 0.75em;">Tidak ada perubahan</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam
                                                    semper massa sit amet eros ultricies, eget accumsan enim rutrum.</td>
                                                <td>
                                                    <div
                                                        style="word-wrap: break-word; white-space: normal; max-width: 300px; text-align: left; margin: 0 auto;">
                                                        Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                                        Aliquam semper massa sit amet eros ultricies, eget accumsan enim
                                                        rutrum?
                                                    </div>

                                                    <input type="hidden" class="response-value2" value="" />
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-light-success" style="font-size: 0.8rem; padding: 0.5em 0.75em;">Jawaban Terverifikasi</span>
                                                    <div class="mt-2">
                                                        <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                           class="me-2 btn btn-sm btn-light-primary">
                                                            <i class="feather icon-eye mx-1"></i>Lihat Dokumen
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="fw-bold">Pertanyaan Tambahan</td>
                                                <td colspan="2"
                                                    style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu
                                                    fringilla quam. Aenean finibus ipsum sit amet nisi semper, vitae commodo
                                                    metus condimentum.
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-light-success" style="font-size: 0.8rem; padding: 0.5em 0.75em;">Jawaban Terverifikasi</span>
                                                    <div class="mt-2">
                                                        <a href="https://storage.hubdat.dephub.go.id/esmk/dokumen_tanpa_judul-dwXyWCrfeJKwMZZYxuGNs.pdf"
                                                           class="me-2 btn btn-sm btn-light-primary">
                                                            <i class="feather icon-eye mx-1"></i>Lihat Dokumen
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <!-- end job detail tab pane -->
                        <div class="tab-pane" id="educationDetail">
                            <form id="educationForm" method="post" action="#">
                                <div class="text-center">
                                    <h3 class="mb-2">Tell us about your education</h3>
                                    <small class="text-muted">Let us know your name and email address. Use an address you
                                        don't mind other users contacting you at</small>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="schoolName">School Name</label>
                                            <input type="text" class="form-control" id="schoolName"
                                                placeholder="enter your school name" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="schoolLocation">School Location</label>
                                            <input type="text" class="form-control" id="schoolLocation"
                                                placeholder="enter your school location" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end education detail tab pane -->
                        <div class="tab-pane" id="finish">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="text-center">
                                        <i class="ph-duotone ph-gift f-50 text-danger"></i>
                                        <h3 class="mt-4 mb-3">Thank you !</h3>
                                        <div class="mb-3">
                                            <div class="form-check d-inline-block">
                                                <input type="checkbox" class="form-check-input" id="customCheck1" />
                                                <label class="form-check-label" for="customCheck1">I agree with the Terms
                                                    and Conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- END: Define your tab pans here -->
                        <!-- START: Define your controller buttons here-->
                        <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                            <div class="first">
                                <a href="javascript:void(0);" class="btn"> </a>
                            </div>
                            <div class="d-flex">
                                <div class="previous me-2">
                                    <button type="button" class="btn btn-secondary kembali"> Kembali </button>
                                </div>
                                <div class="next">
                                    <button type="button" class="btn btn-primary selanjutnya"> Selanjutnya </button>
                                </div>
                            </div>
                            <div class="last">
                                <a href="javascript:void(0);" class="btn btn-success"> Simpan </a>
                            </div>
                        </div>
                        <!-- END: Define your controller buttons here-->
                    </div>
                </div>
            </div>
            <!-- end tab content-->
        </div>
    </div>
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ asset('assets') }}/js/plugins/wizard.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownMenu = document.querySelector("#dropdownTahun + .dropdown-menu");
            const currentYear = new Date().getFullYear();

            // Menambahkan hanya 5 tahun terakhir
            for (let i = 0; i < 5; i++) {
                const year = currentYear - i;
                const li = document.createElement("li");
                li.innerHTML = `<a class="dropdown-item" href="#">${year}</a>`;
                dropdownMenu.appendChild(li);
            }
        });
        document.addEventListener("click", (e) => {
            if (e.target.classList.contains('selanjutnya')) {
                let currentTab = document.querySelector('.tab-pane.active');
                let nextTab = currentTab.nextElementSibling;

                if (nextTab) {
                    currentTab.classList.remove('show', 'active');
                    nextTab.classList.add('show', 'active');
                }
            }

            if (e.target.classList.contains('kembali')) {
                let currentTab = document.querySelector('.tab-pane.active');
                let prevTab = currentTab.previousElementSibling;

                if (prevTab) {
                    currentTab.classList.remove('show', 'active');
                    prevTab.classList.add('show', 'active');
                }
            }
            if (e.target.classList.contains("btn-yes") || e.target.classList.contains("btn-no")) {
                const yesButton = e.target.closest(".btn-group").querySelector(".btn-yes");
                const noButton = e.target.closest(".btn-group").querySelector(".btn-no");
                const hiddenInput = e.target.closest("td").querySelector(".response-value");

                if (e.target.classList.contains("btn-yes")) {
                    yesButton.classList.add("active");
                    noButton.classList.remove("active");
                    hiddenInput.value = "Iya";
                } else if (e.target.classList.contains("btn-no")) {
                    noButton.classList.add("active");
                    yesButton.classList.remove("active");
                    hiddenInput.value = "Tidak";
                }
            }
            if (e.target.classList.contains("btn-yes2") || e.target.classList.contains("btn-no2")) {
                const yesButton = e.target.closest(".btn-group").querySelector(".btn-yes2");
                const noButton = e.target.closest(".btn-group").querySelector(".btn-no2");
                const hiddenInput = e.target.closest("td").querySelector(".response-value2");

                if (e.target.classList.contains("btn-yes2")) {
                    yesButton.classList.add("active");
                    noButton.classList.remove("active");
                    hiddenInput.value = "Iya";
                } else if (e.target.classList.contains("btn-no2")) {
                    noButton.classList.add("active");
                    yesButton.classList.remove("active");
                    hiddenInput.value = "Tidak";
                }
            }
        });
    </script>
@endsection