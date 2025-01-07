@extends('Administrator.index', ['title' => 'Dashboard'])
@section('asset_css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/daterange.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/daterange-picker.css" />
    <style>
        .chart-container {
            position: relative;
            width: 100%;
            height: 300px;
        }

        @media (max-width: 768px) {
            .chart-container {
                height: 200px;
            }
        }
    </style>
@endsection
@section('content')
    <div id="custom-filter"></div>
    <div id="resetCustomFilter"></div>
    <div class="row">
        <div class="col-12">
            <div class="card welcome-banner bg-blue-800" style="background: #0f2a7d;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="p-4">
                                <h2 class="text-white internal-name"></h2>
                                <p class="text-white">Sistem ini dirancang untuk mendukung perusahaan angkutan umum dalam
                                    menerapkan dan memantau standar keselamatan operasional. Sistem ini memantau kinerja
                                    keselamatan secara berkelanjutan.
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
        <div class="row mx-1" id="custom-filter">
            <div class="card">
                <div class="row align-items-center py-4 px-2">
                    <div class="col-md-6 offset-md-6 d-flex justify-content-start">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="feather icon-calendar"></i>
                            </span>

                            <input type="text" id="daterange" class="form-control" placeholder="Pilih rentang tanggal" />

                            <button type="submit" id="btn-find" class="btn btn-outline-primary p-3"
                                style="border: 1px solid #ced4da;">
                                <i class="fa-solid fa-magnifying-glass me-2"></i> Cari
                            </button>
                            <button type="button" id="resetCustomFilter" class="btn btn-outline-secondary p-3"
                                style="border: 1px solid #ced4da;">
                                <i class="fa-solid fa-arrows-rotate me-2"></i> Ulang
                            </button>
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
                            <h3 class="mb-1" id="totalperusahaan"></h3>
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
                            <h3 class="mb-1" id="totaltidakterverifikasi"></h3>
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
                            <h3 class="mb-1" id="totalprosessertivikasi"></h3>
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
                            <h3 class="mb-1" id="totaltersertifikasi"></h3>
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
                        <h5 class="mb-5">Proses Sertifikasi</h5>
                    </div>

                    <div class="row g-3 mx-3">
                        <div class="col-lg-4 col-12 d-flex align-items-center justify-content-center">
                            <div id="pie-chart-2" style="width: 100%; height: 350px;"></div>
                        </div>
                        <div class="col-lg-8 col-12 mb-4">
                            <div class="row g-3 mt-3">
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #4680FF;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block bg-primary rounded-circle"
                                                style="width: 10px; height: 10px; background:#4680FF;"></span>
                                        </div>
                                        <p class="mb-1">Pengajuan</p>
                                        <h6 class="mb-0" id="pengajuan"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #E58A00;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block  rounded-circle"
                                                style="width: 10px; height: 10px; background:#E58A00;"></span>
                                        </div>
                                        <p class="mb-1">Disposisi</p>
                                        <h6 class="mb-0" id="disposisi"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #DC2626;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#DC2626;"></span>
                                        </div>
                                        <p class="mb-1">Tidak Lulus Penilaian</p>
                                        <h6 class="mb-0" id="tidakLulusPenilaian"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #FF5733;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#FF5733;"></span>
                                        </div>
                                        <p class="mb-1">Perbaikan Dokumen</p>
                                        <h6 class="mb-0" id="perbaikanDokumen"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #2CA87F;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#2CA87F;"></span>
                                        </div>
                                        <p class="mb-1">Lulus Penilaian</p>
                                        <h6 class="mb-0" id="lulusPenilaian"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #DC2626;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#DC2626;"></span>
                                        </div>
                                        <p class="mb-1">Tidak Lulus Verifikasi Penilaian</p>
                                        <h6 class="mb-0" id="tidakLulusVerifikasiPenilaian"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #9B59B6;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block  rounded-circle"
                                                style="width: 10px; height: 10px; background:#9B59B6;"></span>
                                        </div>
                                        <p class="mb-1">Lulus Verifikasi Penilaian</p>
                                        <h6 class="mb-0" id="lulusVerifikasiPenilaian"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #F4D03F;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#F4D03F;"></span>
                                        </div>
                                        <p class="mb-1">Penjadwalan Wawancara</p>
                                        <h6 class="mb-0" id="penjadwalanWawancara"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #3EC9D6;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#3EC9D6;"></span>
                                        </div>
                                        <p class="mb-1">Wawancara Terjadwal</p>
                                        <h6 class="mb-0" id="wawancaraTerjadwal"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #006400;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#006400;"></span>
                                        </div>
                                        <p class="mb-1">Wawancara Selesai</p>
                                        <h6 class="mb-0" id="wawancaraSelesai"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #D4A5A5;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#D4A5A5;"></span>
                                        </div>
                                        <p class="mb-1">Verifikasi Direktur</p>
                                        <h6 class="mb-0" id="verifikasiDirektur"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #4680FF;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#4680FF;"></span>
                                        </div>
                                        <p class="mb-1">Pengesahan Sertifikat</p>
                                        <h6 class="mb-0" id="pengesahanSertifikat"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #FF6347;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px;background:#FF6347"></span>
                                        </div>
                                        <p class="mb-1">Ditolak</p>
                                        <h6 class="mb-0" id="ditolak"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #FF8C00;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px;background:#FF8C00"></span>
                                        </div>
                                        <p class="mb-1">Dibatalkan</p>
                                        <h6 class="mb-0" id="dibatalkan"></h6>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex">
                                    <div class="bg-body p-3 rounded text-center w-100" style="border: 1px solid #B22222;">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <span class="d-block rounded-circle"
                                                style="width: 10px; height: 10px; background:#B22222;"></span>
                                        </div>
                                        <p class="mb-1">Kadaluwarsa</p>
                                        <h6 class="mb-0" id="kadaluwarsa"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-5">Proses Sertifikasi</h5>
                    </div>

                    <div class="row g-3 mx-3">
                        <!-- Chart section -->
                        <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center">
                            <div id="pie-chart-2" style="width: 100%; height: 350px;"></div>
                        </div>

                        <!-- Cards section -->
                        <div class="col-lg-8 col-12">
                            <div class="row g-3 mt-3" id="status-cards-container">
                                <!-- Cards will be dynamically generated here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0" id="titleTotalPenilaian"></h5>
                    </div>
                    <div class="my-2" id="totalPenilaian" class="chart-container"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">Tipe Perusahaan</h5>
                        </div>
                    </div>
                    <div class="my-2" id="bar-chart-3" class="chart-container"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-12" id="widget-table-1">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Penilai Dengan Disposisi Terbanyak</h5>
                    </div>
                    <div class="table-responsive">
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-top">
                                <div class="datatable-dropdown">
                                    <label>
                                        <select class="datatable-selector" id="limitPage" name="per-page"
                                            style="width: auto;min-width: unset;">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="datatable-search">
                                    <input class="datatable-input search-input" placeholder="Cari..." type="search"
                                        name="search" title="Search within table" aria-controls="pc-dt-simple">
                                </div>
                            </div>
                            <div class="datatable-container">
                                <table class="table table-hover datatable-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Proses</th>
                                            <th>Selesai</th>
                                            <th>Total Disposisi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listData">
                                    </tbody>
                                </table>
                            </div>
                            <div class="datatable-bottom">
                                <div class="datatable-info">Menampilkan <span id="countPage">0</span>
                                    dari <span id="totalPage">0</span> data</div>
                                <nav class="datatable-pagination">
                                    <ul id="pagination-js" class="datatable-pagination-list">
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12" id="tahunan">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Informasi Belum Laporan Tahunan</h5>
                    </div>
                    <div class="table-responsive">
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-top">
                                <div class="datatable-dropdown">
                                    <label>
                                        <select class="datatable-selector" id="limitPageReport" name="per-page"
                                            style="width: auto;min-width: unset;">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="datatable-search">
                                    <input class="datatable-input .search-input-report" placeholder="Cari..."
                                        type="search" name="search" title="Search within table"
                                        aria-controls="pc-dt-simple">
                                </div>
                            </div>
                            <div class="datatable-container">
                                <table class="table table-hover datatable-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tahun</th>
                                            <th>Tanggal Berakhir</th>
                                            <th class="text-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listData2">
                                    </tbody>
                                </table>
                            </div>
                            <div class="datatable-bottom">
                                <div class="datatable-info">Menampilkan <span id="countPageReport">0</span>
                                    dari <span id="totalPageReport">0</span> data</div>
                                <nav class="datatable-pagination">
                                    <ul id="pagination-js-report" class="datatable-pagination-list">
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/paginationjs/pagination.min.js') }}"></script>
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets/js/excel/xlsx-populate.min.js') }}"></script>
    <script src="{{ asset('assets/js/excel/file-saver.min.js') }}"></script>
    <script src="{{ asset('assets/js/date/date-language-format.js') }}"></script>
    <script src="{{ asset('assets/js/date/daterange-picker.js') }}"></script>
    <script src="{{ asset('assets/js/date/daterange-custom.js') }}"></script>
    <script src="{{ asset('assets/js/date/date-DMY-format.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/locale/id.js"></script>
@endsection
@section('page_js')
    <script>
        let defaultLimitPage = 10;
        let currentPage = 1;
        let totalPage = 1;
        let defaultAscending = 0;
        let defaultSearch = '';
        let defaultLimitPageReport = 10;
        let currentPageReport = 1;
        let totalPageReport = 1;
        let defaultAscendingReport = 0;
        let defaultSearchReport = '';
        let customFilter = {};
        let customFilterReport = {};
        let getDataRestDashboard;
        let isAdmin;

        async function getUserData() {
            loadingPage(true);
            let getDataRest = await CallAPI(
                'GET', `{{ env('SERVICE_BASE_URL') }}/internal/admin-panel/dashboard/userDetail`
            ).then(function(response) {
                return response;
            }).catch(function(error) {
                loadingPage(false);
                let resp = error.response;
                notificationAlert('info', 'Pemberitahuan', resp.data.message);
                return resp;
            });
            if (getDataRest.status == 200) {
                loadingPage(false);
                let handleDataResult = await handleUserData(getDataRest.data.data);
                await setUserData(handleDataResult);
                const userRole = handleDataResult.role || [];
                isAdmin = userRole.includes('Super Admin');

                if (!isAdmin) {
                    document.getElementById('widget-table-1').style.display = 'none';
                    const infoTableCol = document.getElementById('tahunan');
                    if (infoTableCol) {
                        infoTableCol.classList.remove('col-lg-6', 'col-12');
                        infoTableCol.classList.add('col-12');
                    }
                }
            }
        }

        function handleUserData(data) {
            const userData = data['user'];
            const isActive = (userData['is_active'] === true) || (userData['is_active'] === 1);
            let handleData = {
                id: userData['id'] ?? '-',
                name: userData['name'] ?? '-',
                role: userData['role'] ?? []
            };
            return handleData;
        }

        function setUserData(data) {
            $('.internal-name').html(`Selamat Datang, ${data.name}`);
        }

        async function getDataAllCompany(customFilter) {
            loadingPage(true);
            let defaultStartDate = moment().subtract(30, 'days').format('YYYY-MM-DD');
            let defaultEndDate = moment().format('YYYY-MM-DD');

            let startDate = customFilter?.start_date || defaultStartDate;
            let endDate = customFilter?.end_date || defaultEndDate;

            let requestData = {
                date_from: startDate,
                date_to: endDate
            };

            let getDataRest = await CallAPI(
                'GET',
                '{{ env('SERVICE_BASE_URL') }}/internal/admin-panel/dashboard/dataDashboard',
                requestData
            ).then(function(response) {
                return response;
            }).catch(function(error) {
                loadingPage(false);
                let resp = error.response;
                notificationAlert('info', 'Pemberitahuan', resp.data.message);
                return resp;
            });

            if (getDataRest.status == 200) {
                loadingPage(false);
                let companies = getDataRest.data.data.companies || [];
                let certificateRequests = getDataRest.data.data.certificate_requests || [];
                let totalCompany = companies.length;
                document.getElementById('totalperusahaan').innerText = totalCompany;

                let totalWithoutCertification = companies.filter(company =>
                    !certificateRequests.some(request => request.company_id === company.id)
                ).length;
                document.getElementById('totaltidakterverifikasi').innerText = totalWithoutCertification;

                let validStatuses = [
                    'request', 'disposition', 'not_passed_assessment',
                    'revision', 'submission_revision', 'passed_assessment',
                    'not_passed_assessment_verification', 'passed_assessment_verification',
                    'scheduling_interview', 'scheduled_interview', 'completed_interview'
                ];
                let totalProcess = certificateRequests.filter(request => validStatuses.includes(request.status)).length;
                document.getElementById('totalprosessertivikasi').innerText = totalProcess;

                let validStatusesverif = ['certificate_validation'];
                let totalverif = certificateRequests.filter(request => validStatusesverif.includes(request.status))
                    .length;
                document.getElementById('totaltersertifikasi').innerText = totalverif;

                let serviceTypes = getDataRest.data.data.service_types || [];
                console.log("🚀 ~ getDataAllCompany ~ serviceTypes:", serviceTypes)
                setChart(serviceTypes);

                let certificateRequestschart = getDataRest.data.data.certificate_requests || [];
                setChartcertificateRequest(certificateRequestschart);

                let statusMapping = {
                    request: 'Pengajuan',
                    disposition: 'Disposisi',
                    not_passed_assessment: 'Tidak lulus penilaian',
                    submission_revision: 'Perbaikan dokumen',
                    passed_assessment: 'Lulus penilaian',
                    not_passed_assessment_verification: 'Tidak lulus verifikasi penilaian',
                    assessment_revision: 'Lulus verifikasi penilaian',
                    passed_assessment_verification: 'Lulus verifikasi penilaian',
                    scheduling_interview: 'Penjadwalan wawancara',
                    scheduled_interview: 'Wawancara terjadwal',
                    completed_interview: 'Wawancara selesai',
                    verification_director: 'Verifikasi direktur',
                    certificate_validation: 'Pengesahan Sertifikat',
                    rejected: 'Ditolak',
                    cancelled: 'Dibatalkan',
                    expired: 'Kedaluarsa'
                };

                // Menghitung jumlah untuk setiap kategori status
                let statusCounts = {
                    'Pengajuan': 0,
                    'Disposisi': 0,
                    'Tidak lulus penilaian': 0,
                    'Perbaikan dokumen': 0,
                    'Lulus penilaian': 0,
                    'Tidak lulus verifikasi penilaian': 0,
                    'Lulus verifikasi penilaian': 0,
                    'Lulus verifikasi penilaian': 0,
                    'Penjadwalan wawancara': 0,
                    'Wawancara terjadwal': 0,
                    'Wawancara selesai': 0,
                    'Verifikasi direktur': 0,
                    'Pengesahan Sertifikat': 0,
                    'Ditolak': 0,
                    'Dibatalkan': 0,
                    'Kedaluwarsa': 0
                };

                certificateRequestschart.forEach(request => {
                    if (request && request.status && statusMapping[request.status]) {
                        let statusLabel = statusMapping[request.status];
                        statusCounts[statusLabel]++;
                    }
                });

                // Update values in the cards based on ID
                document.getElementById('pengajuan').innerText = statusCounts['Pengajuan'] || 0;
                document.getElementById('disposisi').innerText = statusCounts['Disposisi'] || 0;
                document.getElementById('tidakLulusPenilaian').innerText = statusCounts['Tidak lulus penilaian'] || 0;
                document.getElementById('perbaikanDokumen').innerText = statusCounts['Perbaikan dokumen'] || 0;
                document.getElementById('lulusPenilaian').innerText = statusCounts['Lulus penilaian'] || 0;
                document.getElementById('tidakLulusVerifikasiPenilaian').innerText = statusCounts[
                    'Tidak lulus verifikasi penilaian'] || 0;
                document.getElementById('lulusVerifikasiPenilaian').innerText = statusCounts[
                    'Lulus verifikasi penilaian'] || 0;
                document.getElementById('penjadwalanWawancara').innerText = statusCounts['Penjadwalan wawancara'] || 0;
                document.getElementById('wawancaraTerjadwal').innerText = statusCounts['Wawancara terjadwal'] || 0;
                document.getElementById('wawancaraSelesai').innerText = statusCounts['Wawancara selesai'] || 0;
                document.getElementById('verifikasiDirektur').innerText = statusCounts['Verifikasi direktur'] || 0;
                document.getElementById('pengesahanSertifikat').innerText = statusCounts['Pengesahan Sertifikat'] || 0;
                document.getElementById('ditolak').innerText = statusCounts['Ditolak'] || 0;
                document.getElementById('dibatalkan').innerText = statusCounts['Dibatalkan'] || 0;
                document.getElementById('kadaluwarsa').innerText = statusCounts['Kadaluwarsa'] || 0;
            }

        }

        async function setChart(serviceTypes) {
            let labels = serviceTypes.map(item => item.name);
            let dataPoints = serviceTypes.map(item => item.companies.length);

            let minValue = Math.min(...dataPoints);
            let maxValue = Math.max(...dataPoints);

            var options_bar_chart_3 = {
                chart: {
                    height: 350,
                    width: '90%',
                    type: 'bar',
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        dataLabels: {
                            position: 'top'
                        }
                    }
                },
                colors: ['#4680FF'],
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
                    name: 'Perusahaan',
                    data: dataPoints
                }],
                xaxis: {
                    categories: labels,
                    min: minValue,
                    max: maxValue,
                }
            };

            var chart_bar_chart_3 = new ApexCharts(document.querySelector('#bar-chart-3'), options_bar_chart_3);
            chart_bar_chart_3.render();
        }

        async function setChartcertificateRequest(certificateRequestschart) {
            if (!Array.isArray(certificateRequestschart)) {
                console.error('Error: certificateRequestschart is not an array.');
                return;
            }

            let labels = [
                'Pengajuan',
                'Disposisi',
                'Tidak lulus penilaian',
                'Perbaikan dokumen',
                'Lulus penilaian',
                'Tidak lulus verifikasi penilaian',
                'Lulus verifikasi penilaian',
                'Penjadwalan wawancara',
                'Wawancara terjadwal',
                'Wawancara selesai',
                'Verifikasi direktur',
                'Pengesahan Sertifikat',
                'Ditolak',
                'Dibatalkan',
                'Kedaluarsa'
            ];

            let statusMapping = {
                request: 'Pengajuan',
                disposition: 'Disposisi',
                not_passed_assessment: 'Tidak lulus penilaian',
                submission_revision: 'Perbaikan dokumen',
                passed_assessment: 'Lulus penilaian',
                not_passed_assessment_verification: 'Tidak lulus verifikasi penilaian',
                assessment_revision: 'Lulus verifikasi penilaian',
                passed_assessment_verification: 'Lulus verifikasi penilaian',
                scheduling_interview: 'Penjadwalan wawancara',
                scheduled_interview: 'Wawancara terjadwal',
                completed_interview: 'Wawancara selesai',
                verification_director: 'Verifikasi direktur',
                certificate_validation: 'Pengesahan Sertifikat',
                rejected: 'Ditolak',
                cancelled: 'Dibatalkan',
                expired: 'Kedaluarsa'
            };

            let dataPoints = Array(labels.length).fill(0);

            certificateRequestschart.forEach(item => {
                if (item && item.status) {
                    let mappedLabel = statusMapping[item.status];
                    if (mappedLabel) {
                        let index = labels.indexOf(mappedLabel);
                        if (index !== -1) {
                            dataPoints[index]++;
                        }
                    } else {
                        console.warn(`Status "${item.status}" tidak ditemukan di statusMapping.`);
                    }
                } else {
                    console.warn('Warning: item does not have a valid status.', item);
                }
            });

            // Menghancurkan chart sebelumnya jika ada
            if (window.chart_pie_chart_2) {
                window.chart_pie_chart_2.destroy();
            }

            // Menentukan warna untuk setiap status
            let colors = [
                '#4680FF', // Pengajuan
                '#E58A00', // Disposisi
                '#DC2626', // Tidak lulus penilaian
                '#FF5733', // Perbaikan dokumen
                '#2CA87F', // Lulus penilaian
                '#DC2626', // Tidak lulus verifikasi penilaian
                '#9B59B6', // Lulus verifikasi penilaian
                '#F4D03F', // Penjadwalan wawancara
                '#3EC9D6', // Wawancara terjadwal
                '#006400', // Wawancara selesai
                '#DC2626', // Verifikasi direktur
                '#4680FF', // Pengesahan Sertifikat
                '#D4A5A5', // Ditolak
                '#FF8C00', // Dibatalkan
                '#B22222' // Kedaluarsa
            ];

            var options_pie_chart_2 = {
                chart: {
                    height: 320,
                    type: 'donut',
                    toolbar: {
                        show: false
                    }
                },
                series: dataPoints,
                colors: colors,
                labels: labels,
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

            // Membuat chart baru
            window.chart_pie_chart_2 = new ApexCharts(document.querySelector('#pie-chart-2'), options_pie_chart_2);
            window.chart_pie_chart_2.render();
        }

        async function getDataPenilaian(customFilter) {
            loadingPage(true);
            let defaultStartDate = moment().subtract(30, 'days').format('YYYY-MM-DD');
            let defaultEndDate = moment().format('YYYY-MM-DD');

            let startDate = customFilter?.start_date || defaultStartDate;
            let endDate = customFilter?.end_date || defaultEndDate;

            let requestData = {
                date_from: startDate,
                date_to: endDate
            };

            let getDataRest = await CallAPI(
                'GET',
                '{{ env('SERVICE_BASE_URL') }}/internal/admin-panel/dashboard/dataDashboard', requestData
            ).then(function(response) {
                return response;
            }).catch(function(error) {
                loadingPage(false);
                let resp = error.response;
                notificationAlert('info', 'Pemberitahuan', resp.data.message);
                return resp;
            });

            if (getDataRest.status == 200) {
                loadingPage(false);
                let totalPenilaian = getDataRest.data.data.total_penilaian || [];

                // Ensure the Indonesian locale is set correctly
                moment.locale('id');

                // Format the start and end dates with Indonesian month names
                let startMonth = moment(startDate).format('MMMM YYYY'); // "MMMM" gives full month name in Indonesian
                let endMonth = moment(endDate).format('MMMM YYYY');

                // If the start and end months are the same, show only one month
                let titleText = (startMonth === endMonth) ? `Total Penilaian untuk Bulan ${startMonth}` :
                    `Total Penilaian untuk Periode ${startMonth} - ${endMonth}`;

                document.getElementById('titleTotalPenilaian').innerText = titleText;

                setChartTotalPenilaian(totalPenilaian, startDate, endDate);
            }


        }

        // async function setChartTotalPenilaian(totalPenilaian) {
        //     var options = {
        //         series: [{
        //             name: 'Pengajuan awal',
        //             data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        //         }, {
        //             name: 'Proses Pengajuan',
        //             data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        //         }, {
        //             name: 'Proses Selesai',
        //             data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        //         }],
        //         chart: {
        //             type: 'bar',
        //             height: 350,
        //             toolbar: false,
        //         },
        //         plotOptions: {
        //             bar: {
        //                 horizontal: false,
        //                 columnWidth: '55%',
        //                 borderRadius: 5,
        //                 borderRadiusApplication: 'end'
        //             },
        //         },
        //         dataLabels: {
        //             enabled: false
        //         },
        //         stroke: {
        //             show: true,
        //             width: 2,
        //             colors: ['transparent']
        //         },
        //         xaxis: {
        //             categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        //         },
        //         yaxis: {
        //             title: {
        //                 text: 'Total'
        //             }
        //         },
        //         fill: {
        //             opacity: 1
        //         },
        //         tooltip: {
        //             y: {
        //                 formatter: function(val) {
        //                     return val + " Permohonan"
        //                 }
        //             }
        //         },
        //         colors: ['#007bff', '#ffc107', '#28a745'] 
        //     };

        //     var chart = new ApexCharts(document.querySelector("#totalPenilaian"), options);
        //     chart.render();
        // }
        async function setChartTotalPenilaian(totalPenilaian) {
            // Get the number of days in the current month using Moment.js
            const daysInMonth = moment().daysInMonth(); // Get the number of days in the current month
            const daysArray = Array.from({
                length: daysInMonth
            }, (_, i) => (i + 1).toString()); // Generate an array of day numbers

            // Get the current month (formatted like "January", "February", etc.)
            const currentMonth = moment().format('MMMM YYYY'); // e.g., "January 2025"

            // Assuming we have data for each day of the month (using random data for demo purposes)
            var options = {
                series: [{
                    name: 'Pengajuan awal',
                    data: Array.from({
                        length: daysInMonth
                    }, () => Math.floor(Math.random() * 100)) // Random data for 'Pengajuan awal'
                }, {
                    name: 'Proses Pengajuan',
                    data: Array.from({
                        length: daysInMonth
                    }, () => Math.floor(Math.random() * 100)) // Random data for 'Proses Pengajuan'
                }, {
                    name: 'Proses Selesai',
                    data: Array.from({
                        length: daysInMonth
                    }, () => Math.floor(Math.random() * 100)) // Random data for 'Proses Selesai'
                }],
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: false,
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        borderRadius: 5,
                        borderRadiusApplication: 'end'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: daysArray,
                    title: {
                        text: 'Tanggal'
                    }
                },
                yaxis: {
                    title: {
                        text: 'Total Permohonan'
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    shared: true, // This will group all tooltips in a shared container
                    intersect: false, // Tooltips will be triggered by any segment, not only on hover
                    y: {
                        formatter: function(val) {
                            return val + " Permohonan";
                        }
                    },
                    custom: function({
                        series,
                        seriesIndex,
                        dataPointIndex,
                        w
                    }) {
                        // Create a custom tooltip with a header and additional info
                        const date = daysArray[dataPointIndex]; // Get the current date
                        const pengajuanAwal = series[0][dataPointIndex]; // Get 'Pengajuan awal' value
                        const prosesPengajuan = series[1][dataPointIndex]; // Get 'Proses Pengajuan' value
                        const prosesSelesai = series[2][dataPointIndex]; // Get 'Proses Selesai' value

                        // Format the tooltip content
                        return `
                    <div style="padding: 10px; font-size: 14px;">
                        <strong>Tanggal: ${date} ${currentMonth}</strong><br/>
                        <strong>Pengajuan awal: </strong>${pengajuanAwal} Permohonan<br/>
                        <strong>Proses Pengajuan: </strong>${prosesPengajuan} Permohonan<br/>
                        <strong>Proses Selesai: </strong>${prosesSelesai} Permohonan
                    </div>
                `;
                    }
                },
                colors: ['#007bff', '#ffc107', '#28a745'],
            };

            // Render the chart
            var chart = new ApexCharts(document.querySelector("#totalPenilaian"), options);
            chart.render();
        }


        // async function setChartTotalPenilaian(totalPenilaian, startDate, endDate) {
        //     // Generate an array of dates between startDate and endDate
        //     const dateRange = [];
        //     let currentDate = moment(startDate);

        //     // Create the date range and format it as "DD MMM"
        //     while (currentDate.isBefore(endDate) || currentDate.isSame(endDate, 'day')) {
        //         dateRange.push(currentDate.format('YYYY-MM-DD')); // Store full date for filtering
        //         currentDate.add(1, 'days'); // Increment the day
        //     }

        //     // Filter the totalPenilaian data to get the dates that have data
        //     const filteredDates = dateRange.filter(date => {
        //         return totalPenilaian.some(item => moment(item.date).format('YYYY-MM-DD') === date);
        //     });

        //     // Map the filtered dates into "DD MMM" format for the x-axis
        //     const formattedDates = filteredDates.map(date => moment(date).format('DD MMM'));

        //     // Map totalPenilaian data to match the filtered dates
        //     const pengajuanAwal = filteredDates.map(date => {
        //         const dataForDate = totalPenilaian.find(item => moment(item.date).format('YYYY-MM-DD') ===
        //         date);
        //         return dataForDate ? dataForDate.pengajuan_awal : 0;
        //     });

        //     const prosesPengajuan = filteredDates.map(date => {
        //         const dataForDate = totalPenilaian.find(item => moment(item.date).format('YYYY-MM-DD') ===
        //         date);
        //         return dataForDate ? dataForDate.proses_pengajuan : 0;
        //     });

        //     const prosesSelesai = filteredDates.map(date => {
        //         const dataForDate = totalPenilaian.find(item => moment(item.date).format('YYYY-MM-DD') ===
        //         date);
        //         return dataForDate ? dataForDate.proses_selesai : 0;
        //     });

        //     var options = {
        //         series: [{
        //             name: 'Pengajuan awal',
        //             data: pengajuanAwal
        //         }, {
        //             name: 'Proses Pengajuan',
        //             data: prosesPengajuan
        //         }, {
        //             name: 'Proses Selesai',
        //             data: prosesSelesai
        //         }],
        //         chart: {
        //             type: 'bar',
        //             height: 350,
        //             toolbar: false,
        //         },
        //         plotOptions: {
        //             bar: {
        //                 horizontal: false,
        //                 columnWidth: '55%',
        //                 borderRadius: 5,
        //                 borderRadiusApplication: 'end'
        //             },
        //         },
        //         dataLabels: {
        //             enabled: false
        //         },
        //         stroke: {
        //             show: true,
        //             width: 2,
        //             colors: ['transparent']
        //         },
        //         xaxis: {
        //             categories: formattedDates, // Display only the dates that have data
        //             title: {
        //                 text: 'Tanggal'
        //             },
        //         },
        //         yaxis: {
        //             title: {
        //                 text: 'Total Permohonan'
        //             }
        //         },
        //         fill: {
        //             opacity: 1
        //         },
        //         tooltip: {
        //             y: {
        //                 formatter: function(val) {
        //                     return val + " Permohonan";
        //                 }
        //             }
        //         },
        //         colors: ['#007bff', '#ffc107', '#28a745'], // Different colors for the bars
        //     };

        //     // Render the chart
        //     var chart = new ApexCharts(document.querySelector("#totalPenilaian"), options);
        //     chart.render();
        // }

        async function fetchData(url, params) {
            try {
                loadingPage(true);
                let response = await CallAPI('GET', url, params);
                loadingPage(false);
                return response;
            } catch (error) {
                loadingPage(false);
                let resp = error.response;
                notificationAlert('info', 'Pemberitahuan', resp.data.message);
                return resp;
            }
        }

        async function getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter) {
            let defaultStartDate = moment().subtract(30, 'days').format('YYYY-MM-DD');
            let defaultEndDate = moment().format('YYYY-MM-DD');
            let startDate = customFilter?.['start_date'] || defaultStartDate;
            let endDate = customFilter?.['end_date'] || defaultEndDate;
            let params = {
                page: currentPage,
                limit: defaultLimitPage,
                ascending: defaultAscending,
                search: defaultSearch,
                date_from: startDate,
                date_to: endDate
            };

            let getDataRest = await fetchData(
                '{{ env('SERVICE_BASE_URL') }}/internal/admin-panel/dashboard/listAsesor', params);

            if (getDataRest.status === 200) {
                let data = getDataRest.data.data;
                let totalPage = getDataRest.data.pagination.total_pages;
                let totalItems = getDataRest.data.pagination.total;

                if (totalItems === 0) {
                    $('#pagination-js').hide();
                } else {
                    $('#pagination-js').show();
                }

                let display_from = (data.length > 0) ? ((defaultLimitPage * (currentPage - 1)) + 1) : 0;
                let display_to = (data.length > 0) ?
                    Math.min(display_from + data.length - 1, totalItems) :
                    0;

                $('#totalPage').text(totalItems);
                $('#countPage').text(`${display_from} - ${display_to}`);

                let appendHtml = "";
                let index_loop = display_from;
                if (data.length > 0) {
                    for (let index = 0; index < data.length; index++) {
                        let element = data[index];
                        appendHtml += `
                            <tr>
                            <td>${index_loop}.</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="row">
                                        <h6 class="mb-2"><span class="text-truncate w-100">${element.name || '-'}</span>
                                        </h6>
                                        <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                            NIP: ${element.nip || '-'}</span>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>${element.certificate_request_disposition_process_count || '0'}</td>
                            <td>${element.certificate_request_completed_count || '0'}</td>
                            <td>${element.certificate_request_disposisition_count || '0'}</td>
                        </tr>`;
                        index_loop++;
                    }
                } else {
                    appendHtml = `
                        <tr>
                            <th class="text-center" colspan="${$('.nk-tb-head th').length}"> Tidak ada data. </th>
                        </tr>`;
                }
                $('#listData').html(appendHtml);
            }
        }

        async function getListDataReport(defaultLimitPageReport, currentPageReport, defaultAscendingReport,
            defaultSearchReport) {
            let params = {
                page: currentPageReport,
                limit: defaultLimitPageReport,
                ascending: defaultAscendingReport,
                search: defaultSearchReport
            };

            let getDataRest = await fetchData(
                '{{ env('SERVICE_BASE_URL') }}/internal/admin-panel/dashboard/listYearly', params
            );

            if (getDataRest.status === 200) {
                let data = getDataRest.data.data;
                let totalItems = getDataRest.data.pagination.total;
                totalPagesReport = getDataRest.data.pagination.total_pages;

                if (totalItems === 0) {
                    $('#pagination-js-report').hide();
                } else {
                    $('#pagination-js-report').show();
                }

                let display_from = (data.length > 0) ? ((defaultLimitPageReport * (currentPageReport - 1)) + 1) : 0;
                let display_to = (data.length > 0) ?
                    Math.min(display_from + data.length - 1, totalItems) : 0;

                $('#totalPageReport').text(totalItems);
                $('#countPageReport').text(`${display_from} - ${display_to}`);

                let appendHtml = "";
                let index_loop = display_from;

                if (data.length > 0) {
                    for (let index = 0; index < data.length; index++) {
                        let element = data[index];
                        let companyName = element.company ? element.company.name : '-';
                        let nib = element.company ? element.company.nib : '-';

                        appendHtml += `
                            <tr>
                                <td>${index_loop}.</td>
                                <td>
                                    <div class="row align-items-center">
                                        <div class="row">
                                            <h6 class="mb-2"><span class="text-truncate w-100">${companyName}</span>
                                            </h6>
                                            <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                                                    NIB: ${nib}</span>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                
                                <td>${element.year || 'N/A'}</td>
                                <td>${element.due_date || 'N/A'}</td>
                                <td>
                                    <a type="button" href="" class="avtar avtar-s btn-link-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>`;
                        index_loop++;
                    }
                } else {
                    appendHtml = `
                        <tr>
                            <th class="text-center" colspan="5"> Tidak ada data. </th>
                        </tr>`;
                    $('#countPageReport').text("0 - 0");
                }

                $('#listData2').html(appendHtml);
            }
        }

        async function performSearch() {
            defaultSearch = $('.search-input').val();
            defaultLimitPage = $("#limitPage").val();
            currentPage = 1;
            await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
        }

        async function initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter) {
            await getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter);
            await paginationDataOnTable(defaultLimitPage);
        }
        async function manipulationDataOnTable() {
            $(document).on("change", "#limitPage", async function() {
                defaultLimitPage = $(this).val();
                currentPage = 1;
                await getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
                await paginationDataOnTable(defaultLimitPage);
            });

            $(document).on("input", ".search-input", debounce(performSearch, 500));
            await paginationDataOnTable(defaultLimitPage);
        }

        function paginationDataOnTable(isPageSize) {
            $('#pagination-js').pagination({
                dataSource: Array.from({
                    length: totalPage
                }, (_, i) => i + 1),
                pageSize: isPageSize,
                className: 'paginationjs-theme-blue',
                afterPreviousOnClick: function(e) {
                    currentPage = parseInt(e.currentTarget.dataset.num);
                    getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
                },
                afterPageOnClick: function(e) {
                    currentPage = parseInt(e.currentTarget.dataset.num);
                    getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
                },
                afterNextOnClick: function(e) {
                    currentPage = parseInt(e.currentTarget.dataset.num);
                    getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
                },
            });
        }

        function debounce(func, wait, immediate) {
            let timeout;
            return function() {
                let context = this,
                    args = arguments;
                let later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                let callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        }

        async function performSearchReport() {
            defaultSearchReport = $('.search-input-report').val();
            defaultLimitPageReport = $("#limitPageReport").val();
            currentPage = 1;
            await initDataOnTableReport(defaultLimitPageReport, currentPageReport, defaultAscendingReport,
                defaultSearchReport);
        }

        async function initDataOnTableReport(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter) {
            await getListDataReport(defaultLimitPageReport, currentPageReport, defaultAscendingReport,
                defaultSearchReport);
            await paginationDataOnTableReport(defaultLimitPageReport);
        }
        async function manipulationDataOnTableReport() {
            $(document).on("change", "#limitPageReport", async function() {
                defaultLimitPageReport = $(this).val();
                currentPageReport = 1;
                await getListDataReport(defaultLimitPageReport, currentPageReport, defaultAscendingReport,
                    defaultSearchReport);
                await paginationDataOnTableReport(defaultLimitPage);
            });

            $(document).on("input", ".search-input-report", debounceReport(performSearchReport, 500));
            await paginationDataOnTableReport(defaultLimitPageReport);
        }

        function paginationDataOnTableReport(isPageSize) {
            $('#pagination-js-report').pagination({
                dataSource: Array.from({
                    length: totalPageReport
                }, (_, i) => i + 1),
                pageSize: isPageSize,
                className: 'paginationjs-theme-blue',
                afterPreviousOnClick: function(e) {
                    currentPage = parseInt(e.currentTarget.dataset.num);
                    getListDataReport(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
                },
                afterPageOnClick: function(e) {
                    currentPage = parseInt(e.currentTarget.dataset.num);
                    getListDataReport(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
                },
                afterNextOnClick: function(e) {
                    currentPage = parseInt(e.currentTarget.dataset.num);
                    getListDataReport(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
                },
            });
        }

        function debounceReport(func, wait, immediate) {
            let timeout;
            return function() {
                let context = this,
                    args = arguments;
                let later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                let callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        }

        function initializeDateRangePicker() {
            let today = moment();
            let last30Days = moment().subtract(30, 'days');

            $('#daterange').daterangepicker({
                startDate: last30Days,
                endDate: today,
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });

            $('#daterange').val(last30Days.format('YYYY-MM-DD') + ' - ' + today.format('YYYY-MM-DD'));

            return $('#daterange');
        }

        async function customFilterTable() {
            let dateRangePicker = initializeDateRangePicker();

            document.getElementById('btn-find').addEventListener('click', async function(e) {
                e.preventDefault();

                let startDate = dateRangePicker.data('daterangepicker')?.startDate;
                let endDate = dateRangePicker.data('daterangepicker')?.endDate;

                if (!startDate || !endDate) {
                    console.log("Tanggal tidak valid!");
                    return;
                }

                console.log("🚀 ~ startDate:", startDate);
                console.log("🚀 ~ endDate:", endDate);

                startDate = moment(startDate).startOf('day').format('YYYY-MM-DD');
                endDate = moment(endDate).endOf('day').format('YYYY-MM-DD');

                customFilter = {
                    'start_date': startDate,
                    'end_date': endDate
                };

                currentPage = 1;

                await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch,
                    customFilter);
                await getDataAllCompany(customFilter);
            });

            document.getElementById('resetCustomFilter').addEventListener('click', async function() {
                $('.search-input').val('');
                $('.search-input-report').val('');

                let today = moment(new Date());
                let last30Days = moment().subtract(30, 'days');
                dateRangePicker.data('daterangepicker').setStartDate(last30Days);
                dateRangePicker.data('daterangepicker').setEndDate(today);

                $('#daterange').val(last30Days.format('YYYY-MM-DD') + ' - ' + today.format('YYYY-MM-DD'));

                customFilter = {
                    'start_date': last30Days.format('YYYY-MM-DD'),
                    'end_date': today.format('YYYY-MM-DD')
                };

                console.log("🚀 ~ customFilter (reset):", customFilter);

                defaultSearch = '';
                defaultLimitPage = 10;
                currentPage = 1;

                await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch,
                    customFilter);
                await getDataAllCompany(customFilter);
            });
        }


        async function initPageLoad() {
            await customFilterTable();
            await getUserData();
            await getDataAllCompany();
            await getDataPenilaian();

            await Promise.all([
                initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter),
                manipulationDataOnTable(),
                initDataOnTableReport(defaultLimitPageReport, currentPageReport, defaultAscendingReport,
                    defaultSearchReport),
                manipulationDataOnTableReport(),
            ]);
        }
    </script>
@endsection
