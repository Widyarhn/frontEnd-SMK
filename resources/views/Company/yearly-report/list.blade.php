@extends('...Company.index', ['title' => 'Sertifikat SMK'])
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
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/company/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Laporan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Laporan Tahunan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Laporan Tahunan</h2>
                    </div>
                    <a href="/company/yearly-report/create" data-pc-animate="fade-in-scale"
                        class="btn btn-md btn-primary px-3 p-2">
                        <i class="fas fa-plus-circle me-2"></i> Buat Laporan
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row"><!-- [ sample-page ] start -->
        <div class="col-12">
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
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
@endsection

@section('page_js')
    <script>
        async function getListData() {
            loadingPage(true);
            let card = $('#submission-card');

            // Memanggil API untuk mendapatkan data bidang
            const getDataRest = await CallAPI(
                    'GET',
                    `/dummy/company/laporanTahunan/list.json`,
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

                        let statusLabel = element.status === "disposition" ?
                            '<span class="badge bg-light-primary">Pengajuan Baru</span>' :
                            '<span class="badge bg-light-success">Terverifikasi</span>';

                        let lastUpdate = new Date(element.approved_at).toLocaleDateString();
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
                                            <img class="media-object wid-60 img-radius"
                                                src="{{ asset('assets') }}/images/user/avatar-1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="ms-3 ms-sm-0">
                                                <ul class="text-sm-center list-unstyled mt-2 mb-0 d-inline-block">
                                                    <li class="list-unstyled-item"><a href="#" class="link-secondary">${element.notes_count || 0} Catatan</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="popup-trigger">
                                            <div class="h5 font-weight-bold">Tahun Laporan: ${element.year}</div>
                                            <div class="help-sm-hidden">
                                                <ul class="list-unstyled mt-2 mb-0 text-muted">
                                                    <li class="d-sm-inline-block d-block mt-1">
                                                        <i class="ti ti-file-certificate"></i>
                                                        ${statusLabel}
                                                    </li>
                                                    <li class="d-sm-inline-block d-block mt-1">
                                                        <i class="fas fa-user wid-20 rounded me-1 img-fluid"></i>
                                                            Diproses Oleh: <b>${element.assessor.name || '-'}</b>
                                                    </li>
                                                    <li class="d-sm-inline-block d-block mt-1">
                                                        <i class="wid-20 material-icons-two-tone text-center f-14 me-2">calendar_today</i>Diajukan ${createdDate}
                                                    </li>
                                                    <li class="d-sm-inline-block d-block mt-1">
                                                        <i class="wid-20 material-icons-two-tone text-center f-14 me-2">calendar_today</i>Disetujui ${lastUpdate}
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
                                                    </div>` :
                                                    ''}
                                        </div>
                                        <div class="mt-2">
                                            ${element.rejection_notes ? `
                                                    <button type="button" class="me-2 btn btn-sm btn-light-danger"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter" onclick="showModalNotes('${element.rejection_notes}')" style="border-radius: 5px;">
                                                        <i class="ti ti-eye me-1"></i> Lihat Catatan
                                                    </button>` : ''}
                                            <a href="/company/yearly-report/detail"
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


        async function initPageLoad() {

            await getListData();
        }
    </script>
    @include('Company.partial-js')
@endsection
