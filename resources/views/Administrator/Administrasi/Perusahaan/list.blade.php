@extends('.......index', ['title' => 'Data Perusahaan'])
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
                        <li class="breadcrumb-item" aria-current="page">Perusahaan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Data Perusahaan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel"
                            aria-labelledby="analytics-tab-1" tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple-1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahaan</th>
                                            <th>NIB</th>
                                            <th>Tipe Layanan</th>
                                            <th>Status Sertifikat</th>
                                            <th>Provinsi</th>
                                            <th>Kota</th>
                                            <th>Alamat</th>
                                            <th>Terdaftar Spionam</th>
                                            <th>Tanggal Bergabung</th>
                                            <th class="text-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PT WIRASWASTA GEMILANG INDONESIA</td>
                                            <td>8120004962755</td>
                                            <td>AKDP, AJAP, Angkutan B3, Angkutan lintas batas negara, Alat berat</td>
                                            <td>Wawancara terjadwal</td>
                                            <td>Jawa Barat</td>
                                            <td>Kab. Bekasi</td>
                                            <td>GEDUNG THE CITY TOWER LT.5 UNIT 1S JL.MH THAMRIN NO.81</td>
                                            <td><span class="badge bg-light-danger">Belum Terdaftar</span></td>
                                            <td>14 Mei 2024</td>
                                            <td class="text-end">
                                                <li class="list-inline-item"><a href="/perusahaan/detail"
                                                            class="avtar avtar-s btn-link-info btn-pc-default">
                                                            <i class="ti ti-eye f-20"></i></a>
                                                    </li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>PT WIRASWASTA GEMILANG INDONESIA</td>
                                            <td>8120004962755</td>
                                            <td>AKDP, AJAP, Angkutan B3, Angkutan lintas batas negara, Alat berat</td>
                                            <td>Wawancara terjadwal</td>
                                            <td>Jawa Barat</td>
                                            <td>Kab. Bekasi</td>
                                            <td>GEDUNG THE CITY TOWER LT.5 UNIT 1S JL.MH THAMRIN NO.81</td>
                                            <td><span class="badge bg-light-success">Terdaftar</span></td>
                                            <td>14 Mei 2024</td>
                                            <td class="text-end">
                                                <li class="list-inline-item"><a href="/perusahaan/detail"
                                                            class="avtar avtar-s btn-link-info btn-pc-default">
                                                            <i class="ti ti-eye f-20"></i></a>
                                                    </li>
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
    </div>
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="https://ableproadmin.com/assets/js/plugins/apexcharts.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
@endsection
