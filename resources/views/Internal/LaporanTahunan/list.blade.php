@extends('...Internal.index', ['title' => 'List | Data Laporan Tahunan'])
@section('asset_css')
<link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/flatpickr.min.css" />
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/internal/dashboard-internal">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Laporan Tahunan</li>
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
    <div class="row">
        <div class="col-lg-4 col-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Laporan Tahunan</p>
                            <h5 class="mb-1 submission-total"></h5>
                            {{-- <p class="mb-0 text-sm">May 23 - June 01 (2018)</p> --}}
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-primary rounded-circle">
                                <i class="ph-duotone ph-chart-bar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Laporan Terverifikasi</p>
                            <h5 class="mb-1 submission-verified"></h5>
                            {{-- <p class="mb-0 text-sm">May 23 - June 01 (2018)</p> --}}
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-success rounded-circle">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                            <p class="mb-1 fw-medium text-muted">Total Laporan Direvisi</p>
                            <h5 class="mb-1 submission-revision"></h5>
                            {{-- <p class="mb-0 text-sm">May 23 - June 01 (2018)</p> --}}
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-l bg-light-warning rounded-circle">
                                <i class="fa-solid fa-file-circle-exclamation"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="collapseFilter">
        <div class="col-12 mt-3">
            <div class="card card-body mb-3">
                <h5 class="card-title mt-1 mb-2"><i class="fa-solid fa-filter fa-20"></i> Filter Download</h5>
                <form id="custom-filter">
                    <div class="row g-3">
                        <!-- Kolom kiri -->
                        <div class="col-lg-9">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="fw-bold" for="daterange">Rentang Tanggal <sup
                                            class="text-danger">*</sup></label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="daterange" name="daterange"
                                            placeholder="Pilih rentang tanggal">
                                        <span class="input-group-text"><i class="feather icon-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-normal" for="input-status">Status</label>
                                    <select class="form-control select2" name="input_status" id="input-status">
                                        <option value="" selected disabled>Pilih status</option>
                                        <option value="verified">Laporan Terverifikasi</option>
                                        <option value="rejected">Ditolak</option>
                                        <option value="request">Pengajuan</option>
                                        <option value="disposition">Disposisi</option>
                                        <option value="not_passed">Tidak Lulus</option>
                                        <option value="cancelled">Pengajuan Dibatalkan</option>
                                        <option value="revision">Revisi Pengajuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-normal" for="input-perusahaan">Perusahaan</label>
                                    <select class="form-control select2" name="input_perusahaan" id="input-perusahaan">
                                        <option value="" selected disabled>Pilih perusahaan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Kolom kanan -->
                        <div class="col-lg-3">
                            <div class="d-flex flex-column h-100 justify-content-between">
                                <div class="d-flex gap-2">
                                    <button type="submit" id="btn-find" class="btn btn-primary w-100">
                                        <i class="fa-solid fa-magnifying-glass me-2"></i>Cari
                                    </button>
                                    <button type="button" id="resetCustomFilter" class="btn btn-light w-100">
                                        <i class="fa-solid fa-eraser me-2"></i>Reset
                                    </button>
                                </div>
                                <div class="dropdown w-100 mt-3">
                                    <button class="btn dropdown-toggle w-100 text-white" type="button"
                                        id="downloadDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="background-color: #28a745; font-weight: bold; padding: 10px; border-radius: 8px;">
                                        <i class="fa-solid fa-download me-2"></i>Download
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="downloadDropdown">
                                        <li><a class="dropdown-item" id="download-excel" href="#"><i
                                                    class="fas fa-file-excel me-1"></i>Download Excel</a></li>
                                        <li><a class="dropdown-item" id="download-csv" href="#"><i
                                                    class="fas fa-file-csv me-1"></i>Download CSV</a></li>
                                        <li><a class="dropdown-item" id="download-pdf" href="#"><i
                                                    class="fas fa-file-pdf me-1"></i>Download PDF</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 mt-3">
            <div class="table-responsive">
                <div class="datatable-wrapper datatable-loading no-footer searchable fixed-columns">
                    <div class="datatable-top">
                        <div class="datatable-dropdown">
                            <label>
                                <select id="limitPage"class="datatable-selector" name="per-page">
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                </select>
                            </label>
                        </div>
                        <div class="datatable-search">
                            <input class="datatable-input" placeholder="Search..." type="search"
                                title="Search within table" aria-controls="pc-dt-simple-1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 help-main large-view">
                    <div id="submission-card"></div>
                </div>
            </div>

            <div class="table-responsive">
                <div class="datatable-wrapper datatable-loading no-footer searchable fixed-columns">
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

    <div id="exampleModalCenter" class="modal fade" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Catatan Pengajuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/pages/invoice-list.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/moment.js"></script>
    <script src="{{ asset('assets') }}/js/daterange-picker.js"></script>
    <script src="{{ asset('assets') }}/js/daterange-custom.js"></script>
    <script src="{{ asset('assets') }}/js/select2/select2.full.min.js"></script>
    <script src="{{ asset('assets') }}/js/select2/select2.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/flatpickr.min.js"></script>
@endsection

@section('page_js')
    <script>
        let defaultLimitPage = 10;
        let currentPage = 1;
        let totalPage = 1;
        let defaultAscending = 0;
        let defaultSearch = '';
        let customFilter = {};

        async function getCount() {
            loadingPage(true)
            const getDataRest = await CallAPI(
                    'GET',
                    `/dummy/internal/laporan-tahunan/submission-count.json`,
                )
                .then(response => response)
                .catch(error => {
                    loadingPage(false);
                    let resp = error.response;
                    Swal.fire({
                        icon: 'info',
                        title: 'Pemberitahuan',
                        text: resp.data.message,
                        confirmButtonColor: '#28a745',
                    });
                    return resp;
                });

            if (getDataRest.status === 200) {
                let data = getDataRest.data.data
                $(".submission-total").text(`${data.submission_total || 0} Pengajuan`);
                $(".submission-verified").text(`${data.submission_verified || 0} Terverifikasi`);
                $(".submission-revision").text(`${data.submission_revision || 0} Revisi`);

            }
        }
        async function getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter) {
            loadingPage(true);
            let card = $('#submission-card');
            let countPaging = $('#countPage');
            let totalPaging = $('#totalPage');
            let tablePaging = $('#tableList');


            let data = [];
            customFilter = customFilter || {};
            const queryParams = new URLSearchParams({
                page: currentPage,
                limit: defaultLimitPage,
                ascending: defaultAscending,
                search: defaultSearch,
                company: Object.keys(customFilter).length !== 0 ? customFilter['company'] : '',
                status: Object.keys(customFilter).length !== 0 ? customFilter['status'] : '',
                fromdate: customFilter?.['start_date'] || '',
                duedate: customFilter?.['end_date'] || '',
            }).toString();

            // Memanggil API untuk mendapatkan data bidang
            const getDataRest = await CallAPI(
                    'GET',
                    `{{ env('SERVICE_BASE_URL') }}/internal/admin-panel/laporan-tahunan/list?${queryParams}`
                )
                .then(response => response)
                .catch(error => {
                    loadingPage(false);
                    let resp = error.response;
                    Swal.fire({
                        icon: 'info',
                        title: 'Pemberitahuan',
                        text: resp.data.message,
                        confirmButtonColor: '#28a745',
                    });
                    return resp;
                });

            if (getDataRest.status === 200) {
                loadingPage(false);
                let data = getDataRest.data;
                let dataTable = data.data;
                if (dataTable.length === 0) {
                    card.html(`
                        <tr>
                            <th class="text-center" colspan="5">Tidak ada data.</th>
                        </tr>
                    `);
                } else {
                    totalData = getDataRest.data.pagination.total || 0;
                    totalPage = Math.ceil(totalData / defaultLimitPage);
                    let display_from = (currentPage - 1) * defaultLimitPage + 1;
                    let display_to = Math.min(currentPage * defaultLimitPage, totalData);
                    let index_loop = display_from;
                    let domTableHtml = "";

                    for (let index = 0; index < dataTable.length; index++) {
                        let element = dataTable[index];
                        let statusBadge = element.is_active ?
                            '<span class="badge bg-light-success">Aktif</span>' :
                            '<span class="badge bg-light-danger">Tidak Aktif</span>';

                        let statusLabel = '';

                        switch (element.status) {
                            case "request":
                                statusLabel = '<span class="badge bg-light-secondary ms-2">Pengajuan Baru</span>';
                                break;
                            case "revision":
                                statusLabel = '<span class="badge bg-light-danger ms-2">Revisi</span>';
                                break;
                            case "verified":
                                statusLabel = '<span class="badge bg-light-success ms-2">Terverifikasi</span>';
                                break;
                            default:
                                statusLabel = '<span class="badge bg-light-warning ms-2">Status Tidak Diketahui</span>';
                                break;
                        }

                        let lastUpdate = new Date(element.updated_at).toLocaleDateString();
                        let createdDate = new Date(element.created_at).toLocaleDateString();

                        let cardClass = element.status === 'verified' ? 'ticket-card close-ticket' :
                            (element.rejection_notes && element.rejection_notes.length > 0 ? 'ticket-card open-ticket' :
                                'ticket-card');

                        let truncatedNotes = element.rejection_notes && element.rejection_notes.length !== null ?
                            element.rejection_notes.substring(0, 100) + '...' : element.rejection_notes || '';

                        domTableHtml += `
                            <div class="card ${cardClass}">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-auto mb-3 mb-sm-0">
                                            <div class="d-sm-inline-block d-flex align-items-center">
                                                 <div class="wid-60 hei-60 rounded-circle bg-primary d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-book text-white fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="popup-trigger">
                                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                                                    <div class="h4 font-weight-bold mb-2 mb-md-0">
                                                       ${element.nama_perusahaan}
                                                       ${statusLabel}
                                                    </div>
                                                </div>
                                                <div class="help-sm-hidden">
                                                    <ul
                                                        class="list-unstyled mt-2 mb-0 text-muted">
                                                        <li
                                                            class="d-sm-inline-block d-block mt-1 me-2">
                                                            <i
                                                                class="fa-solid fa-calendar-day me-1"></i>
                                                            Tahun Laporan : <b>${element.tahun_laporan}</b>
                                                        </li>
                                                        <li
                                                            class="d-sm-inline-block d-block mt-1 me-2">
                                                            <i
                                                                class="fa-solid fa-calendar-day me-1"></i>
                                                            Tanggal Verifikasi : <b>${element.tanggal_verifikasi}</b>
                                                        </li>
                                                        <li
                                                            class="d-sm-inline-block d-block mt-1 me-2">
                                                            <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                                alt=""
                                                                class="wid-20 rounded me-1 img-fluid">
                                                            Diverifikasi Oleh <b>${element.diverifikasi_oleh.assessor.name}</b>
                                                        </li>
                                                        <li
                                                            class="d-sm-inline-block d-block mt-1 me-2">
                                                            <i
                                                                class="fa-regular fa-calendar-days me-1"></i>Dibuat
                                                            pada
                                                            <b>${element.created_at}</b>
                                                        </li>
                                                    </ul>
                                                </div>
                                                ${element.rejection_notes ? `
                                                                                                                                                                                                                                    <div class="h5 mt-3">
                                                                                                                                                                                                                                        <i class="material-icons-two-tone f-16 me-1">notification_important</i>Catatan Permohonan
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                    <div class="help-md-hidden">
                                                                                                                                                                                                                                        <div class="bg-body mb-3 p-3">
                                                                                                                                                                                                                                            <h6>
                                                                                                                                                                                                                                                <img src="{{ asset('assets') }}/images/user/avatar-5.jpg"
                                                                                                                                                                                                                                                    alt="" class="wid-20 avatar me-2 rounded">
                                                                                                                                                                                                                                                Last comment from <a href="#" class="link-secondary">${element.updated_by}:</a>
                                                                                                                                                                                                                                            </h6>
                                                                                                                                                                                                                                            <p class="mb-0">
                                                                                                                                                                                                                                                ${truncatedNotes}
                                                                                                                                                                                                                                            </p>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                    </div>` : ''}
                                            </div>
                                            <div class="mt-2">
                                                ${element.rejection_notes ? `
                                                                                                                                                                                                                                    <button type="button" class="me-2 btn btn-sm btn-light-danger"
                                                                                                                                                                                                                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter" onclick="showModalNotes('${element.rejection_notes}')" style="border-radius: 5px;">
                                                                                                                                                                                                                                        <i class="ti ti-eye me-1"></i> Lihat Catatan
                                                                                                                                                                                                                                    </button>` : ''}
                                                <a href="/internal/laporan-tahunan/detail"
                                                    class="me-2 btn btn-sm btn-light-secondary" style="border-radius: 5px;">
                                                    <i class="feather icon-eye mx-1"></i>Lihat Pengajuan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;
                    }

                    countPaging.text(`${display_from} - ${display_to}`);
                    totalPaging.text(totalData);
                    card.empty();
                    card.html(domTableHtml);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            }
        }

        function showModalNotes(notes) {
            $('#exampleModalCenter .modal-body').html(`<p>${notes}</p>`);
            $('#exampleModalCenter').modal('show');
        }

        async function customFilterTable() {
            let dateRangePicker = initializeDateRangePicker();
            let startDate = dateRangePicker.data('daterangepicker').startDate;
            let endDate = dateRangePicker.data('daterangepicker').endDate;
            let startDateObj = new Date(startDate);
            let endDateObj = new Date(endDate);
            let timeDiff = endDateObj - startDateObj;
            let dayDiff = timeDiff / (1000 * 3600 * 24);

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

                let company = document.getElementById('input-perusahaan').value;
                let status = document.getElementById('input-status').value;

                customFilter = {
                    'company': company,
                    'status': status,
                    'start_date': startDate,
                    'end_date': endDate
                };

                currentPage = 1;
                await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch,
                    customFilter);
            });

            document.getElementById('download-excel').addEventListener('click', async function() {
                let startDate = dateRangePicker.data('daterangepicker').startDate;
                let endDate = dateRangePicker.data('daterangepicker').endDate;

                if ($("#daterange").val() !== '') {
                    startDate = startDate.startOf('day').toISOString();
                    endDate = endDate.endOf('day').toISOString();
                } else {
                    startDate = '';
                    endDate = '';
                }

                let company = document.getElementById('input-perusahaan').value;
                let status = document.getElementById('input-status').value;

                let customFilter = {
                    'status': status,
                    'company': company,
                    'start_date': $("#daterange").val() !== '' ? startDate : '',
                    'end_date': $("#daterange").val() !== '' ? endDate : ''
                };

                if (dayDiff > 31) {
                    notificationAlert('info', 'Pemberitahuan',
                        'Rentang tanggal tidak boleh lebih dari 31 hari');
                    return;
                }

                if (!customFilter['start_date'] || !customFilter['end_date']) {
                    notificationAlert('info', 'Pemberitahuan', 'Download Membutuhkan Rentang Tanggal!');
                    return;
                }

                await getFilterDownload(customFilter, startDate, endDate);
            });

            document.getElementById('download-csv').addEventListener('click', async function() {
                let startDate = dateRangePicker.data('daterangepicker').startDate;
                let endDate = dateRangePicker.data('daterangepicker').endDate;

                if ($("#daterange").val() !== '') {
                    startDate = startDate.startOf('day').toISOString();
                    endDate = endDate.endOf('day').toISOString();
                } else {
                    startDate = '';
                    endDate = '';
                }

                let company = document.getElementById('input-perusahaan').value;
                let status = document.getElementById('input-status').value;

                let customFilter = {
                    'status': status,
                    'company': company,
                    'start_date': $("#daterange").val() !== '' ? startDate : '',
                    'end_date': $("#daterange").val() !== '' ? endDate : ''
                };

                if (dayDiff > 31) {
                    notificationAlert('info', 'Pemberitahuan',
                        'Rentang tanggal tidak boleh lebih dari 31 hari');
                    return;
                }

                if (!customFilter['start_date'] || !customFilter['end_date']) {
                    notificationAlert('info', 'Pemberitahuan', 'Download Membutuhkan Rentang Tanggal!');
                    return;
                }

                let filteredData = await fetchFilteredData(customFilter);

                if (filteredData.length > 0) {
                    await downloadToCSV(filteredData, startDate, endDate);
                } else {
                    notificationAlert('info', 'Pemberitahuan', 'Data tidak ada');
                }
            });

            document.getElementById('download-pdf').addEventListener('click', async function() {
                let startDate = dateRangePicker.data('daterangepicker').startDate;
                let endDate = dateRangePicker.data('daterangepicker').endDate;

                if ($("#daterange").val() !== '') {
                    startDate = startDate.startOf('day').toISOString();
                    endDate = endDate.endOf('day').toISOString();
                } else {
                    startDate = '';
                    endDate = '';
                }

                let company = document.getElementById('input-perusahaan').value;
                let status = document.getElementById('input-status').value;

                let customFilter = {
                    'status': status,
                    'company': company,
                    'start_date': $("#daterange").val() !== '' ? startDate : '',
                    'end_date': $("#daterange").val() !== '' ? endDate : ''
                };

                if (dayDiff > 31) {
                    notificationAlert('info', 'Pemberitahuan',
                        'Rentang tanggal tidak boleh lebih dari 31 hari');
                    return;
                }

                if (!customFilter['start_date'] || !customFilter['end_date']) {
                    notificationAlert('info', 'Pemberitahuan', 'Download Membutuhkan Rentang Tanggal!');
                    return;
                }

                let filteredData = await fetchFilteredData(customFilter);

                if (filteredData.length > 0) {
                    await downloadToPDF(filteredData, startDate, endDate);
                } else {
                    notificationAlert('info', 'Pemberitahuan', 'Data tidak ada');
                }
            });

            document.getElementById('resetCustomFilter').addEventListener('click', async function() {
                $('.select2').val('').trigger('change');
                $('#daterange').val('');
                $('.search-input').val('');

                customFilter = {};
                defaultSearch = '';
                defaultLimitPage = 10;
                currentPage = 1;

                await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch,
                    customFilter);
            });
        }

        async function fetchFilteredData(filter = {}, fromDate, toDate) {
            const formatDate = (date) => {
                const d = new Date(date);
                return d.toISOString().split('T')[0];
            };
            let params = {
                status: filter['status'] || '',
                company: filter['company'] || '',
                fromdate: formatDate(filter['start_date'] || startDate),
                duedate: formatDate(filter['end_date'] || endDate),
                limit: filter['limit'] || 10,
                ascending: true
            };

            try {

                let getDataRest = await CallAPI('GET',
                        `{{ env('SERVICE_BASE_URL') }}/internal/admin-panel/laporan-tahunan/list`, params)
                    .then(function(response) {
                        return response;
                    })
                    .catch(function(error) {
                        loadingPage(false);
                        let resp = error.response;
                        notificationAlert('warning', 'Error', 'Tidak dapat memuat data');
                        return resp;
                    });


                // Check if the request was successful
                if (getDataRest.data.status_code == 200) {
                    let data = getDataRest.data.data;

                    // Filter data based on parameters
                    let filteredData = data.filter(item => {
                        return (!params.status || item.status === params.status) &&
                            (!params.company || item.nama_perusahaan === params.company) &&
                            (!params.start_date || new Date(item.tanggal_pengajuan) >= new Date(params
                                .start_date)) &&
                            (!params.end_date || new Date(item.tanggal_pengajuan) <= new Date(params.end_date));
                    });

                    // Check the result of the filtered data
                    if (filteredData.length > 0) {
                        notificationAlert('success', 'Berhasil', 'Silahkan periksa file anda.');
                        return filteredData;
                    } else {
                        notificationAlert('info', 'Pemberitahuan',
                            'Data tidak ditemukan dengan filter yang diberikan.');
                        return [];
                    }
                } else {
                    notificationAlert('error', 'Error', 'Gagal mendapatkan data, status code bukan 200.');
                    return [];
                }
            } catch (error) {
                notificationAlert('warning', 'Error', 'Terjadi kesalahan saat memuat data.');

                return [];
            }
        }

        async function selectFilter(id, route, placeholder) {
            var multipleFetch = new Choices(id, {
                placeholder: placeholder,
                placeholderValue: placeholder,
                maxItemCount: 5
            }).setChoices(function() {
                return fetch(
                        route
                    )
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(data) {
                        return data.data.map(function(item) {
                            return {
                                value: item.id,
                                label: item.name
                            };
                        });
                    });
            });
        }

        async function selectFilterStatus(id, placeholder) {
            // Data didefinisikan langsung di dalam fungsi
            const data = {
                verified: 'Laporan Terverifikasi',
                rejected: 'Ditolak',
                request: 'Pengajuan',
                disposition: 'Disposisi',
                not_passed: 'Tidak Lulus',
                cancelled: 'Pengajuan Dibatalkan',
                revision: 'Revisi Pengajuan'
            };

            var multipleFetch = new Choices(id, {
                placeholder: placeholder,
                placeholderValue: placeholder,
                maxItemCount: 5
            }).setChoices(function() {
                // Mengonversi objek menjadi array untuk diolah oleh Choices.js
                const choicesArray = Object.entries(data).map(([key, value]) => ({
                    value: key,
                    label: value
                }));

                return Promise.resolve(choicesArray);
            });
        }

        // async function selectFilter(id) {
        //     if (id === '#input-perusahaan') {
        //         $(id).select2({
        //             ajax: {
        //                 url: `/dummy/internal/select-company.json`,
        //                 dataType: 'json',
        //                 delay: 500,
        //                 headers: {
        //                     Authorization: `Bearer ${Cookies.get('auth_token')}`
        //                 },
        //                 data: function(params) {
        //                     let query = {
        //                         search: params.term,
        //                         page: 1,
        //                         limit: 30,
        //                         ascending: 1
        //                     }
        //                     return query;
        //                 },
        //                 processResults: function(res) {
        //                     let data = res.data;
        //                     return {
        //                         results: $.map(data, function(item) {
        //                             return {
        //                                 id: item.id,
        //                                 text: item.name
        //                             }
        //                         })
        //                     };
        //                 },
        //             },
        //             allowClear: true,
        //             placeholder: 'Pilih perusahaan'
        //         });
        //     } else if (id === '#input-status') {
        //         $(id).select2({
        //             allowClear: true,
        //             placeholder: 'Pilih status'
        //         });
        //     }
        // }

        async function getFilterDownload(filter = {}, startDate, endDate) {

            loadingPage(true);

            const formatDate = (date) => {
                const d = new Date(date);
                return d.toISOString().split('T')[0]; // Formats to 'YYYY-MM-DD'
            };

            // Format startDate and endDate
            let formattedStartDate = formatDate(startDate);
            let formattedEndDate = formatDate(endDate);

            let params = {
                status: filter['status'] || '',
                company: filter['company'] || '',
                date_from: formatDate(filter['start_date'] || formattedStartDate),
                date_to: formatDate(filter['end_date'] || formattedEndDate),
                limit: filter['limit'],
                ascending: true
            };

            try {
                // Fetch data from the JSON file
                let getDataRest = await CallAPI('GET',
                        `{{ env('SERVICE_BASE_URL') }}/internal/admin-panel/laporan-tahunan/list`, params)
                    .then(function(response) {
                        return response;
                    })
                    .catch(function(error) {
                        loadingPage(false);
                        let resp = error.response;
                        notificationAlert('warning', 'Error', 'Tidak dapat memuat data');
                        return resp;
                    });


                // Check if the request was successful
                if (getDataRest.data.status_code == 200) {
                    let data = getDataRest.data.data;


                    // Filter data based on parameters
                    let filteredData = data.filter(item => {
                        return (!params.status || item.status === params.status) &&
                            (!params.company || item.nama_perusahaan === params.company) &&
                            (!params.start_date || new Date(item.tanggal_pengajuan) >= new Date(params
                                .start_date)) &&
                            (!params.end_date || new Date(item.tanggal_pengajuan) <= new Date(params.end_date));
                    });


                    if (filteredData.length > 0) {
                        await downloadToExcel(filteredData, formattedStartDate,
                            formattedEndDate);
                        notificationAlert('success', 'Berhasil', 'Silahkan periksa file anda');
                    } else {
                        notificationAlert('info', 'Pemberitahuan', 'Data tidak ada');
                    }
                } else {
                    notificationAlert('info', 'Pemberitahuan', 'Data tidak ada');
                }
            } catch (error) {
                notificationAlert('warning', 'Error', 'Tidak dapat memuat data');
            } finally {
                loadingPage(false);
            }
        }

        function mapData(data) {
            return data.map((item, index) => {
                let created_at = moment(item.created_at, 'YYYY-MM-DD');
                let current = moment();
                let lastUpdated = item.updated_at ? moment(item.updated_at, 'YYYY-MM-DD') : current;
                let weekDays = calculateBusinessDays(created_at, current);
                if (item.status === 'certificate_validation') {
                    weekDays = calculateBusinessDays(lastUpdated, current);
                }
                let progressLabel = `${weekDays} hari`;

                const statusLabels = {
                    'draft': 'Draft',
                    'request': 'Pengajuan',
                    'disposition': 'Disposisi',
                    'not_passed_assessment': 'Tidak lulus penilaian',
                    'submission_revision': 'Revisi pengajuan',
                    'passed_assessment': 'Lulus penilaian',
                    'not_passed_assessment_verification': 'Penilaian tidak lulus verifikasi',
                    'assessment_revision': 'Revisi penilaian',
                    'passed_assessment_verification': 'Penilaian terverifikasi',
                    'scheduling_interview': 'Penjadwalan wawancara',
                    'scheduled_interview': 'Wawancara Terjadwal',
                    'not_passed_interview': 'Tidak lulus wawancara',
                    'completed_interview': 'Wawancara selesai',
                    'verification_director': 'Validasi direktur',
                    'certificate_validation': 'Pengesahan sertifikat',
                    'rejected': 'Pengajuan ditolak',
                    'cancelled': 'Pengajuan dibatalkan',
                    'expired': 'Pengajuan kedaluwarsa'
                };

                // Mengambil nama service types dari company
                let serviceTypes = '-';
                if (item.company && Array.isArray(item.company.service_types)) {
                    serviceTypes = item.company.service_types.map(service => service.name).join(', ');
                }

                console.log(item);

                return {
                    No: index + 1,
                    Header1: item.regnumber || '-',
                    Header2: item.company_name || '-',
                    Header3: serviceTypes, // Menambahkan serviceTypes setelah company_name
                    Header4: statusLabels[item.status] || '-',
                    Header5: progressLabel,
                    Header6: item.disposition_to && item.disposition_to.name ? item.disposition_to.name : '-',
                    Header7: item.schedule_interview ? dateDMYFormat(item.schedule_interview) : '-',
                    Header8: item.disposition_by ? item.disposition_by.name : '-',
                    Header9: item.created_at ? dateDMYFormat(item.created_at) : '-'
                };
            });
        }

        async function downloadToExcel(data, fromDate, toDate) {
            let selectedData = mapData(data);

            let header = [
                'No.',
                'No. Pendaftaran',
                'Nama Perusahaan',
                'Jenis Pelayanan',
                'Status',
                'Lama Proses',
                'Penilai',
                'Jadwal Interview',
                'Posisi',
                'Tanggal Pengajuan'
            ];

            let formattedFromDate = dateLanguageFormat(fromDate);
            let formattedToDate = dateLanguageFormat(toDate);
            let sameDate = moment(fromDate).isSame(moment(toDate), 'day');

            let title;
            let fileName;
            if (sameDate) {
                title = `Daftar Pengajuan Laporan Tahunan E-SMK ${formattedFromDate}`.toUpperCase();
                fileName = `Daftar Pengajuan Laporan Tahunan E-SMK (${formattedFromDate}).xlsx`;
            } else {
                title = `Daftar Pengajuan Laporan Tahunan E-SMK ${formattedFromDate} - ${formattedToDate}`.toUpperCase();
                fileName = `Daftar Pengajuan Laporan Tahunan E-SMK (${formattedFromDate} - ${formattedToDate}).xlsx`;
            }

            try {
                let workbook = await XlsxPopulate.fromBlankAsync();
                let sheet = workbook.sheet(0);
                sheet.name("Data");

                let lastColumn = String.fromCharCode(64 + header.length);
                let titleRange = `A1:${lastColumn}1`;
                sheet.range(titleRange).merged(true).value(title).style({
                    horizontalAlignment: "center",
                    bold: true,
                    fontSize: 12
                });

                header.forEach((title, index) => {
                    let cell = sheet.cell(3, index + 1);
                    cell.value(title);
                    cell.style({
                        bold: true,
                        fill: "CCCCCC",
                        border: true,
                        horizontalAlignment: "center"
                    });
                });

                selectedData.forEach((row, rowIndex) => {
                    Object.values(row).forEach((value, colIndex) => {
                        let cell = sheet.cell(rowIndex + 4, colIndex + 1);
                        cell.value(value);
                        cell.style({
                            border: true,
                            horizontalAlignment: "left"
                        });
                    });
                });

                header.forEach((title, index) => {
                    sheet.column(index + 1).width(Math.max(...[title, ...selectedData.map(row => row[Object
                        .keys(row)[index]])].map(text => text.toString().length)) * 1.2);
                });

                let blob = await workbook.outputAsync();
                saveAs(blob, fileName);
            } catch (error) {
                notificationAlert('warning', 'Error', 'Periksa Jaringan Anda.');
            }
        }

        async function downloadToCSV(data, fromDate, toDate) {
            let formattedFromDate = dateLanguageFormat(fromDate);
            let formattedToDate = dateLanguageFormat(toDate);
            let sameDate = moment(fromDate).isSame(moment(toDate), 'day');

            let title;
            if (sameDate) {
                title = `Pengajuan Laporan Tahunan e-SMK TANGGAL ${formattedFromDate}`.toUpperCase();
            } else {
                title = `Pengajuan Laporan Tahunan e-SMK DARI TANGGAL ${formattedFromDate} - ${formattedToDate}`.toUpperCase();
            }

            let headers = [
                'No.',
                'No. Pendaftaran',
                'Nama Perusahaan',
                'Jenis Pelayanan',
                'Status',
                'Lama Proses',
                'Penilai',
                'Jadwal Interview',
                'Posisi',
                'Tanggal Pengajuan'
            ];

            let csvContent = headers.join(',') + '\n';
            let selectedData = mapData(data);

            selectedData.forEach(row => {
                csvContent += Object.values(row).join(',') + '\n';
            });

            let blob = new Blob([csvContent], {
                type: 'text/csv;charset=utf-8;'
            });
            let link = document.createElement('a');
            let fileName = `Perusahaan e-SMK (${formattedFromDate} - ${formattedToDate}).csv`;

            if (navigator.msSaveBlob) {
                navigator.msSaveBlob(blob, fileName);
            } else {
                let url = URL.createObjectURL(blob);
                link.setAttribute('href', url);
                link.setAttribute('download', fileName);
                link.style.visibility = 'hidden';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        }

        async function downloadToPDF(data, fromDate, toDate) {
            const {
                jsPDF
            } = window.jspdf;
            let selectedData = mapData(data);

            let header = [
                'No.',
                'No. Pendaftaran',
                'Nama Perusahaan',
                'Jenis Pelayanan',
                'Status',
                'Lama Proses',
                'Penilai',
                'Jadwal Interview',
                'Posisi',
                'Tanggal Pengajuan'
            ];

            let formattedFromDate = dateLanguageFormat(fromDate);
            let formattedToDate = dateLanguageFormat(toDate);
            let sameDate = moment(fromDate).isSame(moment(toDate), 'day');

            let title;
            if (sameDate) {
                title = `Daftar Pengajuan Laporan Tahunan e-SMK ${formattedFromDate}`.toUpperCase();
            } else {
                title = `Daftar Pengajuan Laporan Tahunan e-SMK ${formattedFromDate} - ${formattedToDate}`.toUpperCase();
            }

            let doc = new jsPDF({
                orientation: 'landscape',
                unit: 'pt',
                format: 'a4'
            });

            doc.setFontSize(12);
            doc.text(title, doc.internal.pageSize.getWidth() / 2, 30, {
                align: 'center'
            });

            doc.autoTable({
                head: [header],
                body: selectedData.map(Object.values),
                startY: 50,
                styles: {
                    fontSize: 9,
                    cellPadding: 4
                },
                headStyles: {
                    fillColor: [204, 204, 204],
                    textColor: 0,
                    halign: 'center'
                },
                bodyStyles: {
                    valign: 'middle'
                },
                columnStyles: {
                    0: {
                        halign: 'center',
                        cellWidth: 30
                    }
                }
            });

            doc.save(`Daftar Pengajuan Penilaian e-SMK (${formattedFromDate} - ${formattedToDate}).pdf`);
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

        async function performSearch() {
            defaultSearch = $('.search-input').val();
            defaultLimitPage = $("#limitPage").val();
            currentPage = 1;
            await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter);
        }


        async function manipulationDataOnTable() {
            $(document).on("change", "#limitPage", async function() {
                defaultLimitPage = $(this).val();
                currentPage = 1;
                await getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch,
                    customFilter);
                await paginationDataOnTable(defaultLimitPage);
            });

            $(document).on("input", ".search-input", debounce(performSearch, 500));
            await paginationDataOnTable(defaultLimitPage);
        }

        async function initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter) {
            await getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch, customFilter);
            await paginationDataOnTable(defaultLimitPage);
        }

        async function initPageLoad() {

            await Promise.all([
                getCount(),
                customFilterTable(),
                getListData(),
                selectFilter('#input-status'),
                selectFilter('#input-perusahaan'),
            ]);
        }
    </script>
    @include('Internal.partial-js')
@endsection
