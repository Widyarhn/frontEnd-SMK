@extends('...Internal.index', ['title' => 'Detail | Data Perusahaan'])
@section('asset_css')
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <script src="{{ asset('assets') }}/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <style>
        .table th.sticky-end,
        .table td.sticky-end {
            position: sticky;
            right: 0;
            background-color: #fff;
            /* Warna background agar cocok */
            z-index: 1;
            /* Prioritaskan di atas elemen lain */
            border-left: 1px solid #dee2e6;
            /* Tambahkan garis batas */
        }

        .accordion-button {
            color: white !important;
        }

        .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1);
        }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/internal/dashboard-internal">Home</a></li>
                        <li class="breadcrumb-item"><a href="/internal/sertifikat/list">Daftar Sertifikat</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail Pengajuan Permohonan Penilaian E-SMK</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Detail Pengajuan Permohonan Penilaian E-SMK</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                {{-- <div class="card-header">
                    <h5><i data-feather="lock" class="icon-svg-primary wid-20"></i><span class="p-l-5">Private Ticket
                            #1831786</span></h5>
                </div> --}}
                <div class="card-body border-bottom py-2">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="d-inline-block my-3">Informasi Perusahaan</h4>
                        </div>
                    </div>
                </div>
                <div class="border-bottom card-body">
                    <div class="row">
                        <div class="col-sm-auto mb-3 mb-sm-0">
                            <div class="d-sm-inline-block d-flex align-items-center">
                                {{-- <img class="wid-60 img-radius mb-2" src="{{asset('assets')}}/images/user/avatar-4.jpg"
                                    alt="Generic placeholder image " /> --}}
                                <div
                                    class="wid-60 hei-60 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-building text-white fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="">
                                        <h4 class="d-inline-block">PT TRISTAR JAVA TRANSINDO</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="mb-2"><b>NIB : 9120109831421</b></p>
                                <ul class="list-group list-group-flush ">
                                    <li class="list-group-item px-0">
                                        <div class="row mt-1">
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Nomor Telepon</p>
                                                <p class="mb-0">(+1-876) 8654 239 581</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Email</p>
                                                <p class="mb-0">anshan.dh81@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <p class="mb-1 text-muted">Alamat</p>
                                        <p class="mb-0">Street 110-B Kalians Bag, Dewan, M.P. New York</p>
                                    </li>
                                    <li class="list-group-item px-0 pb-0 mb-2">
                                        <p class="mb-1 text-muted">Jenis Layanan</p>
                                        <ol>
                                            <li>AJAP</li>
                                            <li>AKAP</li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom py-2">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="d-inline-block my-3">Penanggung Jawab</h4>
                        </div>
                    </div>
                </div>
                <div class="border-bottom card-body">
                    <div class="row">
                        <div class="col-sm-auto mb-3 mb-sm-0">
                            <div class="d-sm-inline-block d-flex align-items-center">
                                {{-- <img class="wid-60 img-radius mb-2" src="{{asset('assets')}}/images/user/avatar-4.jpg"
                                    alt="Generic placeholder image " /> --}}
                                <div
                                    class="wid-60 hei-60 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-large text-white fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="">
                                        <h4 class="d-inline-block">ANG HOEY TIONG</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="mb-3"><b>No. Telp : 0216281700</b></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom py-2">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="d-inline-block my-3">Informasi Pengguna</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col px-5">
                            <ul class="list-group list-group-flush ">
                                <li class="list-group-item px-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Username</p>
                                            <p class="mb-0">ANGHOEYTIONG</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Email</p>
                                            <p class="mb-0">admtjt26@gmail.comm</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Nomor Telepon</p>
                                            <p class="mb-0">(+1-876) 8654 239 581</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1 text-muted">Tanggal Pengajuan</p>
                                            <p class="mb-0">12 Desember 2024</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5>Detail Pengajuan</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-success d-block text-center text-uppercase"><i
                            class="feather icon-check-circle mx-2"></i>Telah lulus penilaian</div>
                    <div class="row mt-4">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne"
                                        style="background: linear-gradient(90deg, rgb(4 60 132) 0%, rgb(69 114 184) 100%); color: white;">
                                        Lihat Surat Permohonan
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <label class="mb-2">Nomor Surat : </label>
                                                    <div class="media-body">
                                                        <p class="mb-0"><i class="fa-solid fa-file me-1"></i><label
                                                                class="mb-0">12 Desember 2024</label></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <label class="mb-2 wid-100">Tanggal Surat</label>
                                                    <div class="media-body">
                                                        <p class="mb-0"><i class="feather icon-calendar me-1"></i><label
                                                                class="mb-0">12 Desember 2024</label></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <a href="">
                                                            <p class="mb-0"><i
                                                                    class="fa-regular fa-file-pdf me-1"></i><label
                                                                    class="mb-0">Lihat Dokumen</label></p>
                                                        </a>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo"
                                        style="background: linear-gradient(90deg, rgb(4 60 132) 0%, rgb(69 114 184) 100%); color: white;">
                                        Riwayat Pengajuan
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="task-card p-3">
                                            <ul class="list-unstyled task-list">
                                                <li>
                                                    <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                                                    <p class="m-b-5">8:50</p>
                                                    <h5 class="text-muted">Call to customer <span class="text-primary"> <a
                                                                href="#!" class="text-primary">Jacob</a> </span> and
                                                        discuss the
                                                    </h5>
                                                </li>
                                                <li>
                                                    <i class="task-icon bg-primary"></i>
                                                    <p class="m-b-5">Sat, 5 Mar</p>
                                                    <h5 class="text-muted">Design mobile Application</h5>
                                                </li>
                                                <li>
                                                    <i class="task-icon bg-danger"></i>
                                                    <p class="m-b-5">Sun, 17 Feb</p>
                                                    <h5 class="text-muted"><span class="text-primary"><a href="#!"
                                                                class="text-primary">Jeny</a></span>
                                                        assign you a task
                                                        <span class="text-primary"><a href="#!"
                                                                class="text-primary">Mockup Design.</a></span>
                                                    </h5>
                                                </li>
                                                <li>
                                                    <i class="task-icon bg-warning"></i>
                                                    <p class="m-b-5">Sat, 18 Mar</p>
                                                    <h5 class="text-muted">Design logo</h5>
                                                </li>
                                                <li class="p-b-15 m-b-10">
                                                    <i class="task-icon bg-success"></i>
                                                    <p class="m-b-5">Sat, 22 Mar</p>
                                                    <h5 class="text-muted">Design mobile Application</h5>
                                                </li>
                                            </ul>
                                            <div class="text-end">
                                                <a href="#!" class="b-b-primary text-primary">View Friend
                                                    List</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2 wid-100">Dispo oleh :</label>
                            <div class="media-body d-flex align-items-center">
                                <i class="fa-solid fa-user-circle me-2"
                                    style="font-size: 30px; width: 30px; height: 30px; border-radius: 5px; background-color: #ffffff; display: inline-flex; align-items: center; justify-content: center;"></i>
                                <a href="#" class="link-secondary">Joko Kustanto</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2 wid-100">Dispo ke :</label>
                            <div class="media-body">
                                <p class="mb-0"><img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                        alt="" class="wid-30 rounded me-2 img-fluid" /><a href="#"
                                        class="link-secondary">Iqbal Firmansyah</a></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2">Dibutuhkan Aksi :</label>
                            <div class="media-body">
                                <p class="mb-0"><strong><a href="#" class="link-secondary">Ketua Tim</a></strong>
                                    | <span class="badge bg-success">Penilaian Lulus</span></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2">Catatan verifikasi:</label>
                            <div class="media-body">
                                <p class="mb-0"><a href="#" class="link-secondary">-</a></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2">Terakhir diperbarui : </label>
                            <div class="media-body">
                                <p class="mb-0"><i class="feather icon-calendar me-1"></i><label class="mb-0">12
                                        Desember 2024</label></p>
                            </div>
                        </div>
                    </li>
                    {{-- <li class="list-group-item py-3">
                        <button type="button" class="btn btn-sm btn-light-warning me-2"><i
                                class="mx-2 feather icon-thumbs-up"></i>Make Private</button>
                        <button type="button" class="btn btn-sm btn-light-danger"><i
                                class="mx-2 feather icon-trash-2"></i>Delete</button>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-12">
            <div id="basicwizard" class="form-wizard row justify-content-center">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item" data-target-form="#contactDetailForm">
                                    <a href="#1.1Detail" data-bs-toggle="tab" data-toggle="tab" class="nav-link active">
                                        <span class="d-none d-sm-inline fw-bold f-18"><i
                                                class="fa-solid fa-shield"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item" data-target-form="#jobDetailForm">
                                    <a href="#2.2Detail" data-bs-toggle="tab" data-toggle="tab"
                                        class="nav-link icon-btn">
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
                                                        <th>Uraian</th>
                                                        <th>Unggahan Perusahaan</th>
                                                        <th>Nilai</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.1</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                            Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                            Ekspektasi, Implementasi, Prosedur Terkait)
                                                            <a href="">
                                                                <p class="mb-0"><i
                                                                        class="fa-regular fa-file-pdf me-1"></i><label
                                                                        class="mb-0">Lihat Dokumen</label></p>
                                                            </a>
                                                        </td>
                                                        <td>2.5</td>
                                                        <td><span class="badge bg-light-success">Sesuai</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.2</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                            Ekspektasi, Implementasi, Prosedur Terkait)</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Deskripsi Komitmen dan Kebijakan Keselamatan (Persyaratan,
                                                            Ekspektasi, Implementasi, Prosedur Terkait)
                                                            <a href="">
                                                                <p class="mb-0"><i
                                                                        class="fa-regular fa-file-pdf me-1"></i><label
                                                                        class="mb-0">Lihat Dokumen</label></p>
                                                            </a>
                                                        </td>
                                                        <td>2.5</td>
                                                        <td><span class="badge bg-light-success">Sesuai</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="2.2Detail">
                                    <form id="jobForm" method="post" action="#">
                                        <div class="text-center">
                                            <h3 class="mb-2">Pengorganisasian</h3>
                                        </div>
                                        <div class="table-responsive py-5">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Uraian</th>
                                                        <th>Unggahan Perusahaan</th>
                                                        <th>Nilai</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2.1</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Deskripsi Pengorganisasian</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Deskripsi Pengorganisasian
                                                            <a href="">
                                                                <p class="mb-0"><i
                                                                        class="fa-regular fa-file-pdf me-1"></i><label
                                                                        class="mb-0">Lihat Dokumen</label></p>
                                                            </a>
                                                        </td>
                                                        <td>2.5</td>
                                                        <td><span class="badge bg-light-success">Sesuai</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.2</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">Perusahaan mempunyai struktur organisasi pengelolaan di bidang
                                                            keselamatan, seperti Unit Manajemen Keselamatan atau Petugas
                                                            Keselamatan</td>
                                                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">File Perusahaan mempunyai struktur organisasi pengelolaan di
                                                            bidang keselamatan, seperti Unit Manajemen Keselamatan atau
                                                            Petugas Keselamatan
                                                            <a href="">
                                                                <p class="mb-0"><i
                                                                        class="fa-regular fa-file-pdf me-1"></i><label
                                                                        class="mb-0">Lihat Dokumen</label></p>
                                                            </a>
                                                        </td>
                                                        <td>2.5</td>
                                                        <td><span class="badge bg-light-success">Sesuai</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="educationDetail">
                                    <form id="educationForm" method="post" action="#">
                                        <div class="text-center">
                                            <h3 class="mb-2">Tell us about your education</h3>
                                            <small class="text-muted">Let us know your name and email address. Use an
                                                address you
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
                                <div class="tab-pane" id="finish">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="text-center">
                                                <i class="ph-duotone ph-gift f-50 text-danger"></i>
                                                <h3 class="mt-4 mb-3">Thank you !</h3>
                                                <div class="mb-3">
                                                    <div class="form-check d-inline-block">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheck1" />
                                                        <label class="form-check-label" for="customCheck1">I agree with
                                                            the Terms
                                                            and Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex wizard justify-content-center flex-wrap gap-2 mt-3">
                                    <div class="d-flex">
                                        <div class="previous me-2">
                                            <button type="button" class="btn btn-secondary kembali"> Kembali </button>
                                        </div>
                                        <div class="next">
                                            <button type="button" class="btn btn-primary selanjutnya"> Selanjutnya
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Define your controller buttons here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="my-n4" style="width: 130px">
                                <div id="total-earning-graph-1"></div>
                            </div>
                        </div>
                        <div class="flex-grow-1 mx-2">
                            <p class="mb-1">Total Dokumen Penilaian</p>
                            <h6 class="mb-0">30</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="my-n4" style="width: 130px">
                                <div id="total-earning-graph-2"></div>
                            </div>
                        </div>
                        <div class="flex-grow-1 mx-2">
                            <p class="mb-1">Lulus Penilaian</p>
                            <h6 class="mb-0">30</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="my-n4" style="width: 130px">
                                <div id="total-earning-graph-3"></div>
                            </div>
                        </div>
                        <div class="flex-grow-1 mx-2">
                            <p class="mb-1">Tidak Lulus Penilaian</p>
                            <h6 class="mb-0">30</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="my-n4" style="width: 130px">
                                <div id="total-earning-graph-4"></div>
                            </div>
                        </div>
                        <div class="flex-grow-1 mx-2">
                            <p class="mb-1">Persentase Penilaian Lulus</p>
                            <h6 class="mb-0">30</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/pages/invoice-list.js"></script>
    <script src="../assets/js/plugins/datepicker-full.min.js"></script>
    <script src="../assets/js/pages/ac-datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var options17 = {
            series: [30],
            chart: {
                height: 150,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: '60%',
                        background: 'transparent',
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: 'front'
                    },
                    track: {
                        background: '#4680FF50',
                        strokeWidth: '50%'
                    },

                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            formatter: function(val) {
                                return parseInt(val);
                            },
                            offsetY: 7,
                            color: '#4680FF',
                            fontSize: '20px',
                            fontWeight: '700',
                            show: true
                        }
                    }
                }
            },
            colors: ['#4680FF'],
            fill: {
                type: 'solid'
            },
            stroke: {
                lineCap: 'round'
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-earning-graph-1'), options17);
        chart.render();

        var options18 = {
            series: [30], // Persentase atau nilai yang ingin ditampilkan
            chart: {
                height: 150,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: '60%',
                        background: 'transparent',
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: 'front'
                    },
                    track: {
                        background: '#28A74550', // Ganti dengan warna hijau transparan (hijau 50% opacity)
                        strokeWidth: '50%' // Lebar track
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            formatter: function(val) {
                                return parseInt(val); // Format nilai menjadi integer
                            },
                            offsetY: 7,
                            color: '#28A745', // Ganti dengan warna hijau
                            fontSize: '20px',
                            fontWeight: '700',
                            show: true
                        }
                    }
                }
            },
            colors: ['#28A745'], // Ganti warna grafik menjadi hijau
            fill: {
                type: 'solid' // Isi grafik menggunakan warna solid
            },
            stroke: {
                lineCap: 'round' // Stroke dengan ujung membulat
            }
        };

        // Render chart
        var chart = new ApexCharts(document.querySelector('#total-earning-graph-2'), options18);
        chart.render();


        var options19 = {
            series: [30],
            chart: {
                height: 150,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: '60%',
                        background: 'transparent',
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: 'front'
                    },
                    track: {
                        background: '#DC262650',
                        strokeWidth: '50%'
                    },

                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            formatter: function(val) {
                                return parseInt(val);
                            },
                            offsetY: 7,
                            color: '#DC2626',
                            fontSize: '20px',
                            fontWeight: '700',
                            show: true
                        }
                    }
                }
            },
            colors: ['#DC2626'],
            fill: {
                type: 'solid'
            },
            stroke: {
                lineCap: 'round'
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-earning-graph-3'), options19);
        chart.render();

        var options20 = {
            series: [30],
            chart: {
                height: 150,
                type: 'radialBar'
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: '60%',
                        background: 'transparent',
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: 'front'
                    },
                    track: {
                        background: '#28A74550', // Warna latar belakang track tetap merah muda
                        strokeWidth: '50%'
                    },

                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            formatter: function(val) {
                                return parseInt(val);
                            },
                            offsetY: 7,
                            color: '#006400', // Ubah warna teks menjadi hijau tua
                            fontSize: '20px',
                            fontWeight: '700',
                            show: true
                        }
                    }
                }
            },
            colors: ['#006400'], // Ubah warna grafik menjadi hijau tua
            fill: {
                type: 'solid'
            },
            stroke: {
                lineCap: 'round'
            }
        };
        var chart = new ApexCharts(document.querySelector('#total-earning-graph-4'), options20);
        chart.render();

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
        });

        $(document).on("click", ".collapse-filter", function() {
            $("#collapseFilter").toggle(500);
        });
    </script>
@endsection
