@extends('.......index', ['title' => 'Detail | Data Perusahaan'])
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
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/perusahaan">Perusahaan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail Perusahaan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Detail Perusahaan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                {{-- <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="row align-items-center g-3">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <img src="../assets/images/logo-dark.svg" class="img-fluid" alt="images" />
                                        <span class="badge bg-light-secondary rounded-pill ms-2">Paid</span>
                                    </div>
                                    <p class="mb-0">INV - 000457</p>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <h6>Date <span class="text-muted f-w-400">03/8/2023</span></h6>
                                    <h6>Due Date <span class="text-muted f-w-400">10/8/2023</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="border rounded p-3">
                                <h6 class="mb-0">From:</h6>
                                <h5>Garcia-Cameron and Sons</h5>
                                <p class="mb-0">8534 Saunders Hill Apt. 583</p>
                                <p class="mb-0">(970) 982-3353</p>
                                <p class="mb-0">brandon07@pierce.com</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="border rounded p-3">
                                <h6 class="mb-0">To:</h6>
                                <h5>Dickinson-Cummerata</h5>
                                <p class="mb-0">55D Leatha Way Ernaburgh, NT 2146</p>
                                <p class="mb-0">75-9079921</p>
                                <p class="mb-0">kasandra.conn@borer.com</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th class="text-end">Qty</th>
                                            <th class="text-end">Price</th>
                                            <th class="text-end">Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mauris</td>
                                            <td>Malesuada adipiscing</td>
                                            <td class="text-end">2</td>
                                            <td class="text-end">$80.00</td>
                                            <td class="text-end">$160.00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Vitae</td>
                                            <td>Hac egestas</td>
                                            <td class="text-end">3</td>
                                            <td class="text-end">$40.00</td>
                                            <td class="text-end">$120.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Mauris</td>
                                            <td>Malesuada adipiscing</td>
                                            <td class="text-end">4</td>
                                            <td class="text-end">$80.00</td>
                                            <td class="text-end">$320.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-start">
                                <hr class="mb-2 mt-1 border-secondary border-opacity-50" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="invoice-total ms-auto">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted mb-1 text-start">Sub Total :</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-1 text-end">$20.00</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-muted mb-1 text-start">Discount :</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-1 text-end text-success">$10.00</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-muted mb-1 text-start">Taxes :</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-1 text-end">$5.000</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="f-w-600 mb-1 text-start">Grand Total :</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="f-w-600 mb-1 text-end">$25.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Note</label>
                            <p class="mb-0">It was a pleasure working with you and your team. We hope you will keep us in
                                mind for future freelance projects.
                                Thank You!</p>
                        </div>
                        <div class="col-12 text-end d-print-none">
                            <button class="btn btn-outline-secondary btn-print-invoice">Download</button>
                        </div>
                    </div>
                </div> --}}
                <div class="card-header">
                    <h4 class="mb-0">Informasi</h4>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <!-- Left Column (Company Info) -->
                        <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12 mb-3">
                            <h6 class="mb-3"><i class="fas fa-building me-2"></i>Perusahaan</h6>
                            <div class="card shadow-sm border-0 mb-3 p-3">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-building me-2"></i> Nama Perusahaan
                                            </td>
                                            <td class="company-name text-start">Nama Perusahaan XYZ</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-info-circle me-2"></i> NIB
                                            </td>
                                            <td class="company-nib text-start">1234567890</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-phone me-2"></i> Telepon
                                            </td>
                                            <td class="company-phone text-start">021-123456</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-envelope me-2"></i> E-mail
                                            </td>
                                            <td class="company-email text-start">email@perusahaan.com</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-map-marker-alt me-2"></i> Alamat
                                            </td>
                                            <td class="company-address text-start">Jalan Raya No. 123, Jakarta</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-briefcase me-2"></i> Jenis Layanan
                                            </td>
                                            <td class="text-start">
                                                <ul class="list-unstyled mb-0 company-service-types">
                                                    <li>Layanan A</li>
                                                    <li>Layanan B</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-calendar-day me-2"></i> Tanggal Terbit NIB
                                            </td>
                                            <td class="text-start company-nib">01-01-2022</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-calendar-check me-2"></i> Tanggal Bergabung
                                            </td>
                                            <td class="text-start company-joined-date">15-03-2022</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="mb-3">
                                <h6 class="mb-3"><i class="fas fa-id-card me-2"></i>Penanggung Jawab</h6>
                                <div class="card shadow-sm border-0 mb-4 p-3">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold d-flex align-items-center">
                                                    <i class="fas fa-id-card me-2"></i> Nama
                                                </td>
                                                <td class="text-start company-pic-name">John Doe</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold d-flex align-items-center">
                                                    <i class="fas fa-phone me-2"></i> Telepon
                                                </td>
                                                <td class="text-start company-pic-phone">0812-3456-7890</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mb-3">
                                <h6 class="mb-3"><i class="fas fa-id-card me-2"></i>Pengguna</h6>
                                <div class="card shadow-sm border-0 p-3">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold d-flex align-items-center">
                                                    <i class="fas fa-id-card me-2"></i> Username
                                                </td>
                                                <td class="text-start company-user-name">user_xyz</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold d-flex align-items-center">
                                                    <i class="fas fa-phone me-2"></i> Telepon
                                                </td>
                                                <td class="text-start company-user-phone">0812-9876-5432</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs invoice-tab border-bottom mb-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pengajuan-tab-1" data-bs-toggle="tab"
                            data-bs-target="#pengajuan-tab-1-pane" type="button" role="tab"
                            aria-controls="pengajuan-tab-1-pane" aria-selected="true">
                            <span class="d-flex align-items-center gap-2">Pengajuan SMK</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="laporan-tab-2" data-bs-toggle="tab"
                            data-bs-target="#laporan-tab-2-pane" type="button" role="tab"
                            aria-controls="laporan-tab-2-pane" aria-selected="false">
                            <span class="d-flex align-items-center gap-2">Laporan Tahunan</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pengajuan-tab-1-pane" role="tabpanel"
                        aria-labelledby="pengajuan-tab-1" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple-1">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor Pendaftaran</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status</th>
                                        <th>Penilai</th>
                                        <th>Jadwal Interview</th>
                                        <th>Posisi</th>
                                        <th class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h6 class="mb-1"><span class="text-truncate w-100">123456</span> </h6>
                                        </td>
                                        <td>12 Desember 2024</td>
                                        <td><span class="badge bg-light-success">Paid</span></td>
                                        <td> Mickie Melmoth </td>
                                        <td>15 Desember 2024</td>
                                        <td>Direktur</td>
                                        <td class="text-end">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                            class="ti ti-eye f-20"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h6 class="mb-1"><span class="text-truncate w-100">123456</span> </h6>
                                        </td>
                                        <td>12 Desember 2024</td>
                                        <td><span class="badge bg-light">? Status tidak diketahui</span></td>
                                        <td> Mickie Melmoth </td>
                                        <td>15 Desember 2024</td>
                                        <td>Direktur</td>
                                        <td class="text-end">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                            class="ti ti-eye f-20"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="laporan-tab-2-pane" role="tabpanel"
                        aria-labelledby="laporan-tab-2" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple-2">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tahun Laporan</th>
                                        <th>Tanggal Pelaporan</th>
                                        <th>Status</th>
                                        <th class="text-center" colspan="2">
                                            Verifikasi
                                            <table class="table-verifikasi p-0" style="margin: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th style="border: none;" >Tanggal</th>
                                                        <th style="border: none;">Oleh</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </th>
                                        <th class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2024</td>
                                        <td>2024-01-15</td>
                                        <td><span class="badge bg-success">Diterima</span></td>
                                        <td class="text-center">2024-01-20</td>
                                        <td class="text-center">Admin 1</td>
                                        <td class="text-end">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                            class="ti ti-eye f-20"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2023</td>
                                        <td>2023-12-10</td>
                                        <td><span class="badge bg-warning">Menunggu</span></td>
                                        <td class="text-center">2024-01-20</td>
                                        <td class="text-center">Admin 1</td>
                                        <td class="text-end">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"
                                                        class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                            class="ti ti-eye f-20"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="https://ableproadmin.com/assets/js/plugins/apexcharts.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
@endsection
