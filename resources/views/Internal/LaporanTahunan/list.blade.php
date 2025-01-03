@extends('...Internal.index', ['title' => 'List | Data Laporan Tahunan'])
@section('asset_css')
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/daterange.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/daterange-picker.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/flatpickr.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/select2.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <script src="{{ asset('assets') }}/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
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
    <div class="" id="collapseFilter">
        <div class="card card-body mb-3">
            <h5 class="card-title mt-1 mb-2"><i class="fa-solid fa-filter fa-20"></i> Filter Download</h5>
            <form id="custom-filter">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label class="fw-bold" for="daterange">Rentang Tanggal <sup
                                        class="text-danger">*</sup></label>
                                <div class="input-group">
                                    <input type="text" id="pc-date_range_picker-2" class="form-control"
                                        placeholder="Pilih rentang tanggal" />
                                    <span class="input-group-text"><i class="feather icon-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="fw-normal" for="input-status">Status</label>
                                <select class="form-control select2" name="input_status" id="input-status">
                                    <option value="" selected disabled></option>
                                    <option value="verified">Laporan Terverifikasi</option>
                                    <option value="rejected">ditolak</option>
                                    <option value="request">Pengajuan</option>
                                    <option value="disposition">Disposisi</option>
                                    <option value="not_passed">Tidak lulus </option>
                                    <option value="cancelled">Pengajuan dibatalkan</option>
                                    <option value="revision">Revisi Pengajuan</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="fw-normal" for="input-perusahaan">Perusahaan</label>
                                <select class="form-control select2" name="input_perusahaan" id="input-perusahaan"></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="row mt-md-0">
                            <div class="col-6 mb-2">
                                <button type="submit" id="btn-find"
                                    class="btn btn-primary hovering w-100 align-items-center justify-content-center">
                                    <i class="fa-solid fa-magnifying-glass me-2"></i>Cari
                                </button>
                            </div>
                            <div class="col-6 mb-2">
                                <button type="button" id="resetCustomFilter"
                                    class="btn btn-light hovering w-100 align-items-center justify-content-center">
                                    <i class="fa-solid fa-eraser me-2"></i>Reset
                                </button>
                            </div>
                            <div class="col-12 mb-2 mt-4">
                                <div id="download-container">
                                    <div class="dropdown w-100">
                                        <button class="btn w-100 dropdown-toggle align-items-center justify-content-center"
                                            type="button" id="downloadDropdown" data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                            style="cursor: pointer; font-weight: bold; padding: 10px 20px; border-radius: 8px; transition: all 0.3s ease-in-out; background-color: #28a745; color: white; text-align: center;">
                                            <i class="fa-solid fa-download me-2"></i>Download</span>
                                        </button>

                                        <!-- Opsi download dalam dropdown -->
                                        <ul class="dropdown-menu w-100" aria-labelledby="downloadDropdown">
                                            <li>
                                                <a class="dropdown-item" id="download-excel" href="#">
                                                    <i class="fas fa-file-excel me-1"></i><span>Download Excel</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="download-csv" href="#">
                                                    <i class="fas fa-file-csv me-1"></i><span>Download CSV</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="download-pdf" href="#">
                                                    <i class="fas fa-file-pdf me-1"></i><span>Download PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-12 mt-3">
            <div class="table-responsive">
                <div class="datatable-wrapper datatable-loading no-footer searchable fixed-columns">
                    <div class="datatable-top">
                        <div class="datatable-dropdown">
                            <label>
                                <select class="datatable-selector">
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
        async function getListData() {
            loadingPage(true);
            let card = $('#submission-card');

            // Memanggil API untuk mendapatkan data bidang
            const getDataRest = await CallAPI(
                    'GET',
                    `/dummy/internal/laporan-tahunan/list.json`,
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

        async function selectFilter(id) {
            if (id === '#input-perusahaan') {
                $(id).select2({
                    ajax: {
                        url: `/dummy/internal/select-company.json`,
                        dataType: 'json',
                        delay: 500,
                        headers: {
                            Authorization: `Bearer ${Cookies.get('auth_token')}`
                        },
                        data: function(params) {
                            let query = {
                                search: params.term,
                                page: 1,
                                limit: 30,
                                ascending: 1
                            }
                            return query;
                        },
                        processResults: function(res) {
                            let data = res.data;
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.name
                                    }
                                })
                            };
                        },
                    },
                    allowClear: true,
                    placeholder: 'Pilih perusahaan'
                });
            } else if (id === '#input-status') {
                $(id).select2({
                    allowClear: true,
                    placeholder: 'Pilih status'
                });
            }
        }

        async function getFilterDownload(filter = {}, startDate, endDate) {
            loadingPage(true);
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


            let getDataRest = await CallAPI('GET', `${url}/internal/admin-panel/laporan-tahunan/list`, params)
                .then(function(response) {
                    return response;
                })
                .catch(function(error) {
                    loadingPage(false);
                    notificationAlert('warning', 'Error', 'Tidak dapat memuat data');
                    return null;
                });

            if (getDataRest && getDataRest.data.status_code === 200) {
                let data = getDataRest.data.data;


                let filteredData = data.filter(item => {
                    return (!params.status || item.status === params.status) &&
                        (!params.company || item.nama_perusahaan === params.company) &&
                        (!params.start_date || new Date(item.tanggal_pengajuan) >= new Date(params
                            .start_date)) &&
                        (!params.end_date || new Date(item.tanggal_pengajuan) <= new Date(params.end_date));
                });

                if (filteredData.length > 0) {
                    // Fungsi ini harus dipanggil untuk mengunduh data
                    await downloadToExcel(filteredData, startDate, endDate);
                    notificationAlert('success', 'Berhasil', 'Silahkan periksa file anda');
                } else {
                    notificationAlert('info', 'Pemberitahuan', 'Data tidak ada');
                }
            } else {
                notificationAlert('error', 'Pemberitahuan', 'Gagal mendapatkan data atau data tidak ada.');
            }
        }


        async function downloadToExcel(data, fromDate, toDate) {
            let selectedData = data.map((item, index) => ({
                No: index + 1,
                Header2: item.nama_perusahaan || '-',
                Header3: item.status || '-',
                Header5: item.diverifikasi_oleh.assessor && item.diverifikasi_oleh.assessor.name ? item
                    .diverifikasi_oleh.assessor.name : '-',
                Header7: item.tahun_laporan || '-',
                Header8: item.tanggal_verifikasi ? dateDMYFormat(item.tanggal_verifikasi) : '-',
                Header9: item.created_at ? dateDMYFormat(item.created_at) : '-'
            }));


            let header = [
                'No.',
                'Nama Perusahaan',
                'Status',
                'Diverifikasi Oleh',
                'Tahun Laporan',
                'Tanggal Verivikasi',
                'Tanggal Dibuat',
            ];

            let formattedFromDate = await dateLanguageFormat(fromDate);
            let formattedToDate = await dateLanguageFormat(toDate);
            let sameDate = moment(fromDate).isSame(moment(toDate), 'day');

            let title;
            let fileName;
            if (sameDate) {
                title = `Daftar Pengajuan Sertifikan E-SMK ${formattedFromDate}`.toUpperCase();
                fileName = `Daftar Pengajuan Sertifikan E-SMK (${formattedFromDate}).xlsx`;
            } else {
                title = `Daftar Pengajuan Sertifikan E-SMK ${formattedFromDate} - ${formattedToDate}`
                    .toUpperCase();
                fileName = `Daftar Pengajuan Sertifikan E-SMK (${formattedFromDate} - ${formattedToDate}).xlsx`;
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
                            horizontalAlignment: "left" // Rata kiri untuk semua data
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
                title = `Perusahaan e-SMK TANGGAL ${formattedFromDate}`.toUpperCase();
            } else {
                title = `Perusahaan e-SMK DARI TANGGAL ${formattedFromDate} - ${formattedToDate}`.toUpperCase();
            }

            // Prepare the headers
            let headers = [
                'No.',
                'Nama Perusahaan',
                'Status',
                'Diverifikasi Oleh',
                'Tahun Laporan',
                'Tanggal Verifikasi',
                'Tanggal Dibuat',
            ];

            // Convert the data to CSV format
            let csvContent = headers.join(',') + '\n'; // Add headers

            data.forEach((item, index) => {
                let row = [
                    index + 1,
                    item.nama_perusahaan || '-',
                    item.status || '-',
                    item.diverifikasi_oleh.assessor && item.diverifikasi_oleh.assessor.name ? item
                    .diverifikasi_oleh.assessor.name : '-',
                    item.tahun_laporan || '-', // Changed from item.year to item.tahun_laporan
                    item.tanggal_verifikasi ? dateDMYFormat(item.tanggal_verifikasi) :
                    '-', // Changed from item.tanggal_verivikasi to item.tanggal_verifikasi
                    item.created_at ? dateDMYFormat(item.created_at) :
                    '-'
                ];
                csvContent += row.join(',') + '\n';
            });

            let blob = new Blob([csvContent], {
                type: 'text/csv;charset=utf-8;'
            });
            let link = document.createElement('a');
            let fileName = `Perusahaan e-SMK (${formattedFromDate} - ${formattedToDate}).csv`;

            if (navigator.msSaveBlob) { // For IE 10+
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

            let selectedData = data.map((item, index) => ({
                No: index + 1,
                Header2: item.nama_perusahaan || '-',
                Header3: item.status || '-',
                Header5: item.diverifikasi_oleh.assessor && item.diverifikasi_oleh.assessor.name ? item
                    .diverifikasi_oleh.assessor.name : '-',
                Header7: item.tahun_laporan || '-',
                Header8: item.tanggal_verifikasi ? dateDMYFormat(item.tanggal_verifikasi) : '-',
                Header9: item.created_at ? dateDMYFormat(item.created_at) : '-'
            }));

            let header = [
                'No.',
                'Nama Perusahaan',
                'Status',
                'Diverifikasi Oleh',
                'Tahun Laporan',
                'Tanggal Verifikasi',
                'Tanggal Dibuat',
            ];

            let formattedFromDate = await dateLanguageFormat(fromDate);
            let formattedToDate = await dateLanguageFormat(toDate);
            let sameDate = moment(fromDate).isSame(moment(toDate), 'day');

            let title = sameDate ?
                `Daftar Pengajuan Penilaian e-SMK ${formattedFromDate}`.toUpperCase() :
                `Daftar Pengajuan Penilaian e-SMK ${formattedFromDate} - ${formattedToDate}`.toUpperCase();

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
                    cellPadding: 4,
                    halign: 'center' // Rata tengah untuk seluruh isi
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
                        cellWidth: 30 // Lebar kolom pertama
                    },
                    // Atur semua kolom lain agar rata tengah
                    1: {
                        halign: 'center'
                    },
                    2: {
                        halign: 'center'
                    },
                    3: {
                        halign: 'center'
                    },
                    4: {
                        halign: 'center'
                    },
                    5: {
                        halign: 'center'
                    }
                }
            });

            doc.save(`Daftar Pengajuan Penilaian e-SMK (${formattedFromDate} - ${formattedToDate}).pdf`);
        }

        async function customFilterTable() {

            let dateRangePicker = initializeDateRangePicker();
            let startDate = dateRangePicker.data('daterangepicker').startDate;
            let endDate = dateRangePicker.data('daterangepicker').endDate;
            let startDateObj = new Date(startDate);
            let endDateObj = new Date(endDate);
            let timeDiff = endDateObj - startDateObj;
            let dayDiff = timeDiff / (1000 * 3600 * 24);

            // Submit filter
            document.getElementById('custom-filter').addEventListener('submit', async function(e) {
                e.preventDefault();

                // Ambil nilai startDate dan endDate dari datepicker
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

                // Buat objek custom filter
                customFilter = {

                    'company': company,
                    'status': status,
                    'start_date': $("#daterange").val() != '' ? startDate : '',
                    'end_date': $("#daterange").val() != '' ? endDate : ''
                };


                // Set currentPage ke 1 dan muat data baru
                currentPage = 1;
                await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch,
                    customFilter);
            });

            // Fungsi download
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

                // Validation for date range length
                if (dayDiff > 31) {
                    notificationAlert('info', 'Pemberitahuan',
                        'Rentang tanggal tidak boleh lebih dari 31 hari');
                    return;
                }

                if (!customFilter['start_date'] || !customFilter['end_date']) {
                    notificationAlert('info', 'Pemberitahuan', 'Download Membutuhkan Rentang Tanggal!');
                    return;
                }

                loadingPage(true);

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

            // Reset filter
            document.getElementById('resetCustomFilter').addEventListener('click', async function() {
                // Reset semua input
                $('.select2').val('').trigger('change');
                $('#daterange').val('');
                $('.search-input').val('');

                // Reset custom filter dan muat ulang data default
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

                let getDataRest = await CallAPI('GET', `${url}/internal/admin-panel/laporan-tahunan/list`, params)
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


        async function initPageLoad() {
            flatpickr(document.querySelector('#pc-date_range_picker-2'), {
                mode: 'range'
            });
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
