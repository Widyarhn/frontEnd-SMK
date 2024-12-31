@extends('Administrator.index', ['title' => 'Dashboard'])

@section('content')
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
                                <h6 class="mb-0" id="pengajuan"></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-warning rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Tidak Lulus Penilaian</p>
                                <h6 class="mb-0" id="tidakLulusPenilaian"></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-success rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Lulus Penilaian</p>
                                <h6 class="mb-0" id="lulusPenilaian"></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-info rounded-circle" style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Lulus Verifikasi Penilaian</p>
                                <h6 class="mb-0" id="lulusVerifikasiPenilaian"></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block rounded-circle"
                                        style="width: 10px; height: 10px; background:#9B59B6;"></span>
                                </div>
                                <p class="mb-1">Wawancara Terjadwal</p>
                                <h6 class="mb-0" id="wawancaraTerjadwal"></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block rounded-circle"
                                        style="width: 10px; height: 10px; background:#006400;"></span>
                                </div>
                                <p class="mb-1">Verifikasi Direktur</p>
                                <h6 class="mb-0" id="verifikasiDirektur"></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block bg-danger rounded-circle"
                                        style="width: 10px; height: 10px;"></span>
                                </div>
                                <p class="mb-1">Ditolak</p>
                                <h6 class="mb-0" id="ditolak"></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div class="bg-body p-3 rounded text-center w-100">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="d-block rounded-circle"
                                        style="width: 10px; height: 10px; background:#F4D03F;"></span>
                                </div>
                                <p class="mb-1">Kadaluwarsa</p>
                                <h6 class="mb-0" id="kadaluwarsa"></h6>
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
                        <div class="datatable-wrapper datatable-loading no-footer searchable fixed-columns">
                            <div class="datatable-top">
                                <div class="datatable-dropdown">
                                    <label>
                                        <select class="datatable-selector" id="limitPage">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select> entries per page
                                    </label>
                                </div>
                                <div class="datatable-search">
                                    <input class="datatable-input search-input" placeholder="Search..." type="search"
                                        title="Search within table" aria-controls="pc-dt-simple-1">
                                </div>
                            </div>
                        </div>
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
                            <tbody id="listData">
                            </tbody>
                        </table>
                    </div>
                    <div class="datatable-bottom">
                        <div class="datatable-info">Menampilkan <span id="countPage">0</span> dari <span id="totalPage">0</span> data</div>
                        <nav class="datatable-pagination">
                            {{-- <ul class="datatable-pagination-list">
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
                            </ul> --}}
                        </nav>
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
                            <tbody id="listData2">
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
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>

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
                'GET', `{{ asset('dummy/internal/dashboard-admin/user_detail.json') }}`
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
                        infoTableCol.classList.remove('col-lg-6', 'col-md-12');
                        infoTableCol.classList.add('col-lg-12', 'col-md-12');
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
            // let defaultStartDate = moment().subtract(30, 'days').format('YYYY-MM-DD');
            // let defaultEndDate = moment().format('YYYY-MM-DD');
            // let startDate = customFilter['start_date'] || defaultStartDate;
            // let endDate = customFilter['end_date'] || defaultEndDate;

            let getDataRest = await CallAPI(
                'GET',
                // '{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/dashboard/dataDashboard', {
                //     date_from: startDate,
                //     date_to: endDate,
                // }
                '{{ asset('dummy/internal/dashboard-admin/data_dashboard.json') }}'
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
                let totalCompeny = companies.length;
                document.getElementById('totalperusahaan').innerText = totalCompeny;

                // Count companies without certification
                let totalWithoutCertification = companies.filter(company =>
                    !certificateRequests.some(request => request.company_id === company.id)
                ).length;
                document.getElementById('totaltidakterverifikasi').innerText = totalWithoutCertification;

                // Filter for valid statuses
                let validStatuses = [
                    'request', 'disposition', 'not_passed_assessment',
                    'revision', 'submission_revision', 'passed_assessment',
                    'not_passed_assessment_verification', 'passed_assessment_verification',
                    'scheduling_interview', 'scheduled_interview', 'completed_interview'
                ];
                let totalProcess = certificateRequests.filter(request => validStatuses.includes(request.status)).length;
                document.getElementById('totalprosessertivikasi').innerText = totalProcess;

                // Count verified certificates
                let validStatusesverif = ['certificate_validation'];
                let totalverif = certificateRequests.filter(request => validStatusesverif.includes(request.status))
                    .length;
                document.getElementById('totaltersertifikasi').innerText = totalverif;

                // Process service types and certification requests for charts
                let serviceTypes = getDataRest.data.data.service_types || [];
                setChart(serviceTypes);

                let certificateRequestschart = getDataRest.data.data.certificate_requests || [];
                setChartcertificateRequest(certificateRequestschart);
                setChartVersus();

                // Menghitung jumlah untuk setiap status yang akan ditampilkan di kartu
                let statusMapping = {
                    request: 'Pengajuan',
                    not_passed_assessment: 'Tidak lulus penilaian',
                    passed_assessment: 'Lulus penilaian',
                    passed_assessment_verification: 'Lulus verifikasi penilaian',
                    scheduled_interview: 'Wawancara terjadwal',
                    verification_director: 'Verifikasi direktur',
                    rejected: 'Ditolak',
                    expired: 'Kedaluwarsa'
                };

                // Menghitung jumlah untuk setiap kategori status
                let statusCounts = {
                    'Pengajuan': 0,
                    'Tidak lulus penilaian': 0,
                    'Lulus penilaian': 0,
                    'Lulus verifikasi penilaian': 0,
                    'Penjadwalan wawancara': 0,
                    'Wawancara terjadwal': 0,
                    'Wawancara selesai': 0,
                    'Verifikasi direktur': 0,
                    'Pengesahan Sertifikat': 0,
                    'Ditolak': 0,
                    'Kadaluwarsa': 0
                };

                certificateRequestschart.forEach(request => {
                    if (request && request.status && statusMapping[request.status]) {
                        let statusLabel = statusMapping[request.status];
                        statusCounts[statusLabel]++;
                    }
                });
                certificateRequestschart.forEach(request => {
                    if (request && request.status && statusMapping[request.status]) {
                        let statusLabel = statusMapping[request.status];
                        statusCounts[statusLabel]++;
                    }
                });

                // Update values in the cards based on ID
                document.getElementById('pengajuan').innerText = statusCounts['Pengajuan'] || 0;
                document.getElementById('tidakLulusPenilaian').innerText = statusCounts['Tidak lulus penilaian'] || 0;
                document.getElementById('lulusPenilaian').innerText = statusCounts['Lulus penilaian'] || 0;
                document.getElementById('lulusVerifikasiPenilaian').innerText = statusCounts[
                    'Lulus verifikasi penilaian'] || 0;
                // document.getElementById('penjadwalanWawancara').innerText = statusCounts['Penjadwalan wawancara'] || 0;
                document.getElementById('wawancaraTerjadwal').innerText = statusCounts['Wawancara terjadwal'] || 0;
                // document.getElementById('wawancaraSelesai').innerText = statusCounts['Wawancara selesai'] || 0;
                document.getElementById('verifikasiDirektur').innerText = statusCounts['Verifikasi direktur'] || 0;
                // document.getElementById('pengesahanSertifikat').innerText = statusCounts['Pengesahan Sertifikat'] || 0;
                document.getElementById('ditolak').innerText = statusCounts['Ditolak'] || 0;
                document.getElementById('kadaluwarsa').innerText = statusCounts['Kadaluwarsa'] || 0;
            }

        }

        async function setChart(serviceTypes) {
            let labels = serviceTypes.map(item => item.name);
            let dataPoints = serviceTypes.map(item => item.companies.length);

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
                    categories: labels
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
                'Tidak lulus penilaian',
                'Lulus penilaian',
                'Lulus verifikasi penilaian',
                'Wawancara terjadwal',
                'Verifikasi direktur',
                'Ditolak',
                'Kedaluarsa'
            ];

            let statusMapping = {
                request: 'Pengajuan',
                not_passed_assessment: 'Tidak lulus penilaian',
                passed_assessment: 'Lulus penilaian',
                passed_assessment_verification: 'Lulus verifikasi penilaian',
                scheduled_interview: 'Wawancara terjadwal',
                verification_director: 'Verifikasi direktur',
                rejected: 'Ditolak',
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

            // Buat chart
            var options_pie_chart_2 = {
                chart: {
                    height: 320,
                    type: 'donut'
                },
                series: dataPoints,
                colors: ['#4680FF', '#E58A00', '#2CA87F', '#3EC9D6', '#9B59B6', '#006400', '#DC2626', '#F4D03F'],
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

            var chart_pie_chart_2 = new ApexCharts(document.querySelector('#pie-chart-2'), options_pie_chart_2);
            chart_pie_chart_2.render();
        }

        async function setChartVersus() {
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
        }

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
            // let defaultStartDate = moment().subtract(30, 'days').format('YYYY-MM-DD');
            // let defaultEndDate = moment().format('YYYY-MM-DD');
            // let startDate = customFilter?.['start_date'] || defaultStartDate;
            // let endDate = customFilter?.['end_date'] || defaultEndDate;
            let params = {
                page: currentPage,
                limit: defaultLimitPage,
                ascending: defaultAscending,
                search: defaultSearch,
                // date_from: startDate,
                // date_to: endDate
            };

            let getDataRest = await fetchData(
                // '{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/dashboard/listAsesor', params
                '{{ asset('dummy/internal/dashboard-admin/list_asesor.json') }}'
            );

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
                                            ${element.work_unit.name || '-'}</span>
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
                // '{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/dashboard/listYearly', params
                '{{ asset('dummy/internal/dashboard-admin/list_yearly.json') }}'
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


                // Calculate display range
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
                        let companyName = element.company ? element.company.name : 'N/A';

                        appendHtml += `
                            <tr>
                                <td>${index_loop}.</td>
                                <td>
                                    <div class="row align-items-center">
                                        <div class="row">
                                            <h6 class="mb-2"><span class="text-truncate w-100">${companyName}</span>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>${element.year || 'N/A'}</td>
                                <td>${element.due_date || 'N/A'}</td>
                                <td>
                                    <a type="button" href="" class="btn btn-primary">
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

        function initializeDateRangePicker() {
            let today = moment();
            let last30Days = moment().subtract(30, 'days');

            // Initialize the Date Range Picker with default 30 days
            $('#daterange').daterangepicker({
                startDate: last30Days,
                endDate: today,
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });

            // Set initial value to the input
            $('#daterange').val(last30Days.format('YYYY-MM-DD') + ' - ' + today.format('YYYY-MM-DD'));

            return $('#daterange');
        }

        async function customFilterTable() {
            let dateRangePicker = initializeDateRangePicker();

            document.getElementById('custom-filter').addEventListener('submit', async function(e) {
                e.preventDefault();

                let startDate = dateRangePicker.data('daterangepicker').startDate;
                let endDate = dateRangePicker.data('daterangepicker').endDate;

                if ($("#daterange").val() !== '') {
                    startDate = startDate.startOf('day').format('YYYY-MM-DD');
                    endDate = endDate.endOf('day').format('YYYY-MM-DD');
                } else {
                    startDate = '';
                    endDate = '';
                }

                customFilter = {
                    'start_date': startDate,
                    'end_date': endDate
                };

                currentPage = 1;

                await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch,
                    customFilter);
                await getDataAllCompany(customFilter); // Panggil ulang getDataAllCompany dengan filter baru
            });

            document.getElementById('resetCustomFilter').addEventListener('click', async function() {
                $('.select2').val('').trigger('change');
                $('.search-input').val('');

                // Reset date range to last 30 days
                let today = moment();
                let last30Days = moment().subtract(30, 'days');
                dateRangePicker.data('daterangepicker').setStartDate(last30Days);
                dateRangePicker.data('daterangepicker').setEndDate(today);

                // Update the input with the new 30-day default
                $('#daterange').val(last30Days.format('YYYY-MM-DD') + ' - ' + today.format('YYYY-MM-DD'));

                customFilter = {
                    'start_date': last30Days.format('YYYY-MM-DD'),
                    'end_date': today.format('YYYY-MM-DD')
                };

                defaultSearch = '';
                defaultLimitPage = 10;
                currentPage = 1;

                await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch,
                    customFilter);
                await getDataAllCompany(customFilter); // Reset data tanpa filter
            });
        }

        async function initPageLoad() {
            await getUserData();
            await getDataAllCompany();
            await Promise.all([
                initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter),
                manipulationDataOnTable(),
                initDataOnTableReport(defaultLimitPageReport, currentPageReport, defaultAscendingReport,
                    defaultSearchReport),
                manipulationDataOnTableReport(),
                customFilterTable(),
            ]);
        }

        document.addEventListener('DOMContentLoaded', initPageLoad);
    </script>
@endsection
