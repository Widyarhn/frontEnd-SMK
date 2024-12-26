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
    {{-- <div class="row">
        <div class="col-12">
            <div class="card welcome-banner bg-blue-800" style="background: #0f2a7d;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="p-4">
                                <h2 class="text-white">Selamat Datang, Company</h2>
                                <p class="text-white">Sistem ini dirancang untuk mendukung perusahaan angkutan umum dalam
                                    menerapkan dan memantau standar keselamatan operasional. Sistem ini memantau kinerja
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="img-welcome-banner">
                                <img src="{{ asset('assets') }}/images/logoapp.png" alt="img" class="img-fluid mt-2"
                                    style="width: 100px;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-1">2</h3>
                            <p class="text-muted mb-0">Total Perusahaan</p>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fa-regular fa-building fa-lg text-primary f-36"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-1">200</h3>
                            <p class="text-muted mb-0">Tidak Tersertifikasi</p>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fa-regular fa-rectangle-xmark fa-lg text-danger f-36"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-1">200</h3>
                            <p class="text-muted mb-0">Proses Sertifikasi</p>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fa-solid fa-chalkboard-teacher fa-lg text-warning f-36"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-1">200</h3>
                            <p class="text-muted mb-0">Tersertifikasi</p>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fa-regular fa-square-check fa-lg text-success f-36"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Proses Sertifikasi</h5>
                    </div>
                    <div id="pie-chart-2" style="width: 100%;"></div>
                    <div class="row g-3 mt-3">
                        <!-- Start of Cards -->
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-primary rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Pengajuan</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-warning rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Tidak Lulus Penilaian</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-success rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Lulus Penilaian</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-info rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Lulus Verifikasi Penilaian</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block rounded-circle"
                                        style="width: 10px; height: 10px; background:#9B59B6;"></span>
                                </div>
                                <p class="mb-1">Wawancara Terjadwal</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block rounded-circle"
                                        style="width: 10px; height: 10px; background:#006400;"></span>
                                </div>
                                <p class="mb-1">Verifikasi Direktur</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-danger rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Ditolak</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block rounded-circle"
                                        style="width: 10px; height: 10px; background:#F4D03F;"></span>
                                </div>
                                <p class="mb-1">Kadaluwarsa</p>
                                <h6 class="mb-0">$23,876</h6>
                            </div>
                        </div>
                        <!-- End of Cards -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Mixed Chart</h5>
                    </div>
                    <div class="my-2" id="mixed-chart-2"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">Tipe Perusahaan</h5>
                        </div>
                    </div>
                    <div class="my-2" id="bar-chart-3"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Penilai Dengan Disposisi Terbanyak</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Proses</th>
                                    <th>Selesai</th>
                                    <th>Total Disposisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="row">
                                                <h6 class="mb-2"><span class="text-truncate w-100">Foundations</span>
                                                </h6>
                                                <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                                        Leather panels. Laces. Rounded toe. </span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="row">
                                                <h6 class="mb-2"><span class="text-truncate w-100">Foundations</span>
                                                </h6>
                                                <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                                        Leather panels. Laces. Rounded toe. </span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Informasi Belum Laporan Tahunan</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="pc-dt-simple2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tahun</th>
                                    <th>Tanggal Berakhir</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="row">
                                                <h6 class="mb-2"><span class="text-truncate w-100">Foundations</span>
                                                </h6>
                                                <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                                        Leather panels. Laces. Rounded toe. </span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2024</td>
                                    <td>3 Desember 2024</td>
                                    <td>
                                        <li class="list-inline-item"><a data-bs-toggle="modal"
                                                data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                    class="ti ti-eye f-20"></i></a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="row">
                                                <h6 class="mb-2"><span class="text-truncate w-100">Foundations</span>
                                                </h6>
                                                <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                                        Leather panels. Laces. Rounded toe. </span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2024</td>
                                    <td>3 Desember 2024</td>
                                    <td>
                                        <li class="list-inline-item"><a data-bs-toggle="modal"
                                                data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                    class="ti ti-eye f-20"></i></a></li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
                                <div class="col-md-auto">
                                    <button class="btn btn-primary me-3"><i class="fas fa-sync me-2"></i>Sinkronisasi
                                        OSS</button>
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
                        <li class="nav-item" role="presentation"><a class="nav-link active" id="profile-tab"
                                data-bs-toggle="tab" href="#profile" role="tab" aria-selected="true"><i
                                    class="ti ti-file me-2"></i> Sertifikat SMK</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                href="#followers" role="tab" aria-selected="false" tabindex="-1"><i
                                    class="ti ti-building me-2"></i> Informasi Perusahaan</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xxl-9">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="chat-avtar"><img class="rounded-circle img-fluid wid-40"
                                                src="../assets/images/user/avatar-1.jpg" alt="User image">
                                            <div class="bg-success chat-badge"></div>
                                        </div>
                                        <div class="flex-grow-1 mx-2">
                                            <h5 class="mb-0">John Doe</h5><span class="text-sm text-muted">Technical
                                                Department</span>
                                        </div>
                                        <div class="dropdown"><a
                                                class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                                href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i
                                                    class="material-icons-two-tone f-18">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#">Edit</a> <a class="dropdown-item"
                                                    href="#">Delete</a></div>
                                        </div>
                                    </div>
                                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book. It has survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged. It was popularised in the
                                        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including versions of
                                        Lorem Ipsum.</p>
                                    <div class="row g-2">
                                        <div class="col-md-6"><a class="img-post card"
                                                data-lightbox="../assets/images/application/img-post-1.jpg"><img
                                                    src="../assets/images/application/img-post-1.jpg" alt="img"
                                                    class="card-img">
                                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                                            </a></div>
                                        <div class="col-md-6"><a class="img-post card"
                                                data-lightbox="../assets/images/application/img-post-2.jpg"><img
                                                    src="../assets/images/application/img-post-2.jpg" alt="img"
                                                    class="card-img">
                                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                                            </a></div>
                                        <div class="col-md-6 col-xl-3"><a class="img-post card"
                                                data-lightbox="../assets/images/application/img-post-3.jpg"><img
                                                    src="../assets/images/application/img-post-3.jpg" alt="img"
                                                    class="card-img">
                                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                                            </a></div>
                                        <div class="col-md-6 col-xl-3"><a class="img-post card"
                                                data-lightbox="../assets/images/application/img-post-4.jpg"><img
                                                    src="../assets/images/application/img-post-4.jpg" alt="img"
                                                    class="card-img">
                                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                                            </a></div>
                                        <div class="col-md-6 col-xl-3"><a class="img-post card"
                                                data-lightbox="../assets/images/application/img-post-5.jpg"><img
                                                    src="../assets/images/application/img-post-5.jpg" alt="img"
                                                    class="card-img">
                                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                                            </a></div>
                                        <div class="col-md-6 col-xl-3"><a class="img-post card"
                                                data-lightbox="../assets/images/application/img-post-6.jpg"><img
                                                    src="../assets/images/application/img-post-6.jpg" alt="img"
                                                    class="card-img">
                                                <div class="card-img-overlay"><i class="ti ti-search"></i></div>
                                            </a></div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col"><a href="#" class="btn btn-link-dark"><i
                                                    class="material-icons-two-tone me-1">thumb_up_alt</i> 450K <small
                                                    class="text-muted">Likes</small></a> <a href="#"
                                                class="btn btn-link-secondary"><i
                                                    class="material-icons-two-tone me-1">comment</i>500 <small
                                                    class="text-muted">Comments</small></a> <a href="#"
                                                class="btn btn-link-secondary"><i
                                                    class="material-icons-two-tone me-1">share</i>100 <small
                                                    class="text-muted">Share</small></a> <a href="#"
                                                class="btn btn-link-secondary"><i
                                                    class="material-icons-two-tone me-1">bookmarks</i>20 <small
                                                    class="text-muted">Saved</small></a></div>
                                        <div class="col-auto text-end">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 me-2">30 Comments</p>
                                                <div class="user-group post-user-group"><img
                                                        src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                                        class="avtar"> <img src="../assets/images/user/avatar-2.jpg"
                                                        alt="user-image" class="avtar"> <span
                                                        class="avtar bg-danger text-white"><span
                                                            class="f-12">K</span></span> <img
                                                        src="../assets/images/user/avatar-3.jpg" alt="user-image"
                                                        class="avtar"> <span class="avtar bg-success text-white"><svg
                                                            class="pc-icon m-0">
                                                            <use xlink:href="#custom-user"></use>
                                                        </svg> </span><img src="../assets/images/user/avatar-4.jpg"
                                                        alt="user-image" class="avtar"> <span
                                                        class="avtar bg-light-primary text-primary"><span
                                                            class="f-12">+2</span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-block">
                                        <div class="comment">
                                            <div class="d-flex align-items-start">
                                                <div class="chat-avtar flex-shrink-0"><img
                                                        class="rounded-circle img-fluid wid-40"
                                                        src="../assets/images/user/avatar-1.jpg" alt="User image">
                                                    <div class="bg-success chat-badge"></div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="mb-0">John Doe</h5><span class="text-sm text-muted">2
                                                        hour ago</span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p class="mb-2 mt-3">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                    text ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book.</p><a href="#"
                                                    class="link-primary mb-1">https://phoenixcoded.net/</a>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <div class="mb-4"><a href="#" class="btn btn-link-dark"><i
                                                        class="material-icons-two-tone me-1 text-danger">favorite</i>
                                                    450</a> <a href="#" class="btn btn-link-secondary"><i
                                                        class="material-icons-two-tone me-1">share</i>100</a></div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="d-flex align-items-start">
                                                <div class="chat-avtar flex-shrink-0"><img
                                                        class="rounded-circle img-fluid wid-40"
                                                        src="../assets/images/user/avatar-1.jpg" alt="User image">
                                                    <div class="bg-success chat-badge"></div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="mb-0">John Doe</h5><span class="text-sm text-muted">2
                                                        hour ago</span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <div class="card mt-3 mb-0">
                                                    <div class="card-body">
                                                        <h6>Lorem Ipsum is simply dummy</h6>
                                                        <p class="mb-2">Lorem Ipsum has been the industry's standard
                                                            dummy text ever since the 1500s.</p><a href="#"
                                                            class="link-primary mb-1">https://phoenixcoded.net/</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <div class="mb-4"><a href="#" class="btn btn-link-dark"><i
                                                        class="material-icons-two-tone me-1 text-danger">favorite</i>
                                                    450</a> <a href="#" class="btn btn-link-secondary"><i
                                                        class="material-icons-two-tone me-1">share</i>100</a></div>
                                        </div>
                                        <div class="comment">
                                            <div class="d-flex align-items-start">
                                                <div class="chat-avtar flex-shrink-0"><img
                                                        class="rounded-circle img-fluid wid-40"
                                                        src="../assets/images/user/avatar-1.jpg" alt="User image">
                                                    <div class="bg-success chat-badge"></div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="mb-0">John Doe</h5><span class="text-sm text-muted">2
                                                        hour ago</span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p class="mb-2 mt-3">Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                    text ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book.</p><a href="#"
                                                    class="link-primary mb-1">https://phoenixcoded.net/</a>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <div class="mb-4"><a href="#" class="btn btn-link-dark"><i
                                                        class="material-icons-two-tone me-1 text-danger">favorite</i>
                                                    450</a> <a href="#" class="btn btn-link-secondary"><i
                                                        class="material-icons-two-tone me-1">share</i>100</a></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mt-3"><img
                                            class="img-radius d-none d-sm-inline-flex me-3 wid-40 rounded-circle"
                                            src="../assets/images/user/avatar-1.jpg" alt="User image">
                                        <div class="flex-grow-1 me-3">
                                            <div class="input-comment"><input type="email" class="form-control"
                                                    placeholder="Type a something...">
                                                <ul class="list-inline start-0 mb-0">
                                                    <li class="list-inline-item border-end pe-2 me-2"><a href="#"
                                                            class="avtar avtar-xs btn-link-warning"><i
                                                                class="ti ti-mood-smile f-18"></i></a></li>
                                                </ul>
                                                <ul class="list-inline end-0 mb-0">
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-xs btn-link-secondary"><i
                                                                class="ti ti-photo f-18"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"
                                                            class="avtar avtar-xs btn-link-secondary"><i
                                                                class="ti ti-paperclip f-18"></i></a></li>
                                                </ul>
                                            </div>
                                        </div><a href="#" class="avtar avtar-s btn btn-primary"><i
                                                class="ti ti-send f-18"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="followers" role="tabpanel" aria-labelledby="followers-tab">
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
                            <div class="card">
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
                            <div class="dropdown"><a
                                    class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="material-icons-two-tone f-18">more_vert</i></a>
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
    {{-- <script src="{{ asset('assets') }}/js/pages/dashboard-default.js"></script> -- --}}
    <script src="{{ asset('assets') }}/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    {{-- <script src="{{ asset('assets') }}//js/pages/chart-apex.js"></script> --}}
    <script>
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
