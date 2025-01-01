@extends('...Administrator.index', ['title' => 'Kota | Master Data Wilayah'])
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
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Master Data</a></li>
                        <li class="breadcrumb-item" aria-current="page">Element Pemantauan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-start">
                    <div class="page-header-title">
                        <h2 class="mb-0">Data Element Pemantauan</h2>
                    </div>
                    <a href="/admin/element-pemantauan/create" class="btn btn-md btn-primary px-3 p-2 mt-3 mt-md-0">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Data
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->


    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel"
                            aria-labelledby="analytics-tab-1" tabindex="0">
                            <div class="table-responsive">
                                <div
                                    class="datatable-wrapper datatable-loading no-footer searchable fixed-columns datatable-empty">
                                    <div class="datatable-top">
                                        <div class="datatable-dropdown">
                                            <label>
                                                <select id="limitPage"class="datatable-selector" name="per-page">
                                                    <option value="10" selected="">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                </select> entries per page
                                            </label>
                                        </div>
                                        <div class="datatable-search">
                                            <input id="searchInput" class="datatable-input" placeholder="Search..."
                                                type="search" name="search" title="Search within table"
                                                aria-controls="pc-dt-simple-1">
                                        </div>
                                    </div>
                                    <div class="datatable-container">
                                        <table class="table table-hover datatable-table" id="pc-dt-simple-1">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10.24%;">NO</th>
                                                    <th style="width: 30.4%;">NAMA ELEMENT</th>
                                                    <th style="width: 13.919999999999998%;">STATUS</th>
                                                    <th style="width: 32.64%;">TANGGAL DIBUAT</th>
                                                    <th class="text-end" style="width: 12.8%;">AKSI</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableList">

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="datatable-bottom">
                                        <div class="datatable-info">Menampilkan <span id="countPage">0</span>
                                            dari <span id="totalPage">0</span> data</div>
                                        <nav class="datatable-pagination">
                                            <ul class="datatable-pagination-list" id="pagination"></ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="https://ableproadmin.com/assets/js/plugins/apexcharts.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.min.js"></script>
@endsection

@section('page_js')
    <script>
        async function getListData(paramsTable) {
            loadingPage(true);
            let countPaging = $('#countPage');
            let totalPaging = $('#totalPage');
            let tablePaging = $('#tableList');

            // Memanggil API untuk mendapatkan data bidang
            const getDataRest = await CallAPI(
                    'GET',
                    `/dummy/monitoring_element_list.json`,
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
                let totalPage = data.paginate.total;
                paramsTable.totalPage = totalPage;

                if (dataTable.length === 0) {
                    tablePaging.html(`
                <tr>
                    <th class="text-center" colspan="5">Tidak ada data.</th>
                </tr>
            `);
                    countPaging.text("0 - 0");
                    totalPaging.text("0");
                } else {
                    let display_from = ((paramsTable.defaultLimitPage * getDataRest.data.paginate.current_page) + 1) -
                        paramsTable.defaultLimitPage;
                    let display_to = paramsTable.currentPage < getDataRest.data.paginate.total_pages ?
                        dataTable.length < paramsTable.defaultLimitPage ?
                        dataTable.length :
                        (paramsTable.defaultLimitPage * getDataRest.data.paginate.current_page) :
                        totalPage;
                    let index_loop = display_from;
                    let domTableHtml = "";

                    for (let index = 0; index < dataTable.length; index++) {
                        let element = dataTable[index];
                        const elementData = JSON.stringify(element);
                        let statusBadge = element.is_active ?
                            '<span class="badge bg-light-success">Aktif</span>' :
                            '<span class="badge bg-light-danger">Tidak Aktif</span>';

                        domTableHtml += `
                            <tr>
                              <td class="text-start">${index_loop}.</td>
                                <td class="fw-bold text-start">${element.title}</td>
                                <td class="text-start">${statusBadge}</td>
                                <td class="text-start">${new Date(element.created_at).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' })}</td>
                                <td class="text-end">
                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                            class="avtar avtar-s btn-link-success btn-pc-default">
                                            <i class="fa-regular fa-square-check"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="/admin/element-pemantauan/detail"
                                            class="avtar avtar-s btn-link-info btn-pc-default"><i
                                                class="ti ti-eye f-20"></i></a></li>
                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                            class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                class="ti ti-trash f-20"></i></a></li>
                                </td>
                            </tr>
                        `;
                        index_loop++;
                    }

                    countPaging.html(`${display_from} - ${display_to}`);
                    totalPaging.html(getDataRest.data.paginate.total);
                    tablePaging.empty();
                    tablePaging.html(domTableHtml);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            }
        }


        async function initPageLoad() {

            let paramsTable = {
                "defaultLimitPage": 10, // Set limit page default
                "currentPage": 1,
                "totalPage": 0,
                "defaultAscending": 1,
                "defaultSearch": '',
            };

            await manipulationDataTable(paramsTable, '#pagination', '#limitPage',
                '#searchInput', getListData); // Memanggil getListDataBidang
        }
    </script>
    @include('Administrator.partial-js')
@endsection
