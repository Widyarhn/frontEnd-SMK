@extends('...Administrator.index', ['title' => 'Kota | Master Data Wilayah'])
@section('asset_css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}"> --}}
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Master Data Wilayah</a></li>
                        <li class="breadcrumb-item" aria-current="page">Kota</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-start">
                    <div class="page-header-title">
                        <h2 class="mb-0">Data Kota</h2>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-md btn-primary px-3 p-2 mt-3 mt-md-0 add-data"
                        id="add-data">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Data
                    </a>
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
                                <div
                                    class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                    <div class="datatable-top">
                                        <div class="datatable-dropdown">
                                            <label>
                                                <select class="datatable-selector" id="limitPage" name="per-page">
                                                    <option value="5">5</option>
                                                    <option value="10" selected="">10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                </select> entries per page
                                            </label>
                                        </div>
                                        <div class="datatable-search">
                                            <input class="datatable-input search-input" placeholder="Search..."
                                                type="search" name="search" title="Search within table"
                                                aria-controls="pc-dt-simple">
                                        </div>
                                    </div>
                                    <div class="datatable-container">
                                        <table class="table table-hover datatable-table">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Kota</th>
                                                    <th>Provinsi</th>
                                                    <th>Kode Wilayah</th>
                                                    <th class="text-end">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="listData"></tbody>
                                            {{-- <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>
                                            <div class="row align-items-center">
                                                <div class="col-auto pe-0">
                                                    <div class="wid-40 hei-40 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
                                                        <i class="fa-solid fa-city text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="mb-1"><span class="text-truncate w-100">Tangerang</span></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Banten</td>
                                        <td>123</td>
                                        <td class="text-end">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a data-bs-toggle="modal" data-pc-animate="fade-in-scale" 
                                                    data-bs-target="#animateModal"
                                                        class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                            class="ti ti-eye f-20"></i></a></li>
                                                <li class="list-inline-item"><a data-bs-toggle="modal" data-pc-animate="fade-in-scale" 
                                                    data-bs-target="#animateModal"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            <div class="row align-items-center">
                                                <div class="col-auto pe-0">
                                                    <div class="wid-40 hei-40 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
                                                        <i class="fa-solid fa-city text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="mb-1"><span class="text-truncate w-100">Sorong</span></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Papua</td>
                                        <td>1223</td>
                                        <td class="text-end">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a data-bs-toggle="modal" data-pc-animate="fade-in-scale" 
                                                    data-bs-target="#animateModal"
                                                        class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                            class="ti ti-eye f-20"></i></a></li>
                                                <li class="list-inline-item"><a data-bs-toggle="modal" data-pc-animate="fade-in-scale" 
                                                    data-bs-target="#animateModal"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                            class="ti ti-trash f-20"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody> --}}
                                        </table>
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
                </div>
            </div>
        </div>
    </div>
    <form id="form-create">
        <div class="modal fade modal-animate" id="modal-form" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="p-3">
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" id="input_province_id"
                                            name="input_province_id" aria-label="Floating label select example" readonly>
                                            <option value="1" selected>Jawa Barat</option>
                                        </select>
                                        <label for="floatingSelect">Provinsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-floating mb-0">
                                            <input type="kota" class="form-control" name="input_name" id="input_name"
                                                placeholder="kota" required />
                                            <label for="input_name">Nama Kota</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-floating mb-0">
                                            <input type="text" class="form-control form-control-lg"
                                                name="input_administrative_code" id="input_administrative_code"
                                                placeholder="Masukkan kode wilayah" autocomplete="off" required
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '')">
                                            <label for="input_administrative_code">Kode Wilayah</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary reset-all"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary shadow-2">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/paginationjs/pagination.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script> --}}
    <script>
        let env = '{{ env('ESMK_SERVICE_BASE_URL') }}';
        let menu = 'Kota';
        let defaultLimitPage = 10;
        let currentPage = 1;
        let totalPage = 1;
        let defaultAscending = 0;
        let defaultSearch = '';
        let getDataTable = '';
        let errorMessage = "Terjadi Kesalahan.";
        let isActionForm = "store";

        async function addData() {
            $(document).on("click", ".add-data", function() {
                $("#modal-title").html(`Form Tambah ${menu}`);
                isActionForm = "store";
                $("#modal-form").modal("show");
                $("form").find("input, textarea").val("").prop("checked", false).trigger("change");

                // $("#form-create").data("action-url", `${env}/internal/admin-panel/kota/store`);
                $("#form-create").data("action-url", ``);
            });
        }


        async function editData() {
            $(document).on("click", ".edit-data", async function() {
                loadingPage(false);
                let name = $(this).attr("data-name");
                let province = $(this).attr("data-province");
                let modalTitle = `Form Perbaharui ${menu}`;
                isActionForm = "update";
                let data = $(this).attr("data");
                data = JSON.parse(data);
                let id = $(this).attr("data-id");

                $("#modal-title").html(modalTitle);
                $("#modal-form").modal("show");
                $("form").find("input, textarea").val("").prop("checked", false).trigger("change");


                $("#input_name").val(data.name);
                let administrativeCode = data.administrative_code.split('.')[
                    1];
                $("#input_administrative_code").val(
                    administrativeCode);

                let provinceId = data.province.id;
                $("#input_province_id").val(null).trigger('change');
                $('#input_province_id').append(new Option(data.province.name, provinceId, true, true));
                $("#input_province_id").trigger('change');


                $("#input_is_ministry").val(data.is_ministry);


                // $("#form-create").data("action-url", `${env}/internal/admin-panel/kota/update`);
                $("#form-create").data("action-url",
                    `{{ asset('dummy/internal/md-wilayah/edit_kota.json') }}`);
                $("#form-create").data("id_user", id);
            });
        }


        async function submitForm() {
            $(document).on("submit", "#form-create", async function(e) {
                e.preventDefault();
                loadingPage(true);

                let actionUrl = $("#form-create").data("action-url");
                let formData = {
                    name: $('#input_name').val(),
                    administrative_code: $('#input_administrative_code').val(),
                    province_id: $('#input_province_id').val()
                };

                let id_user = $("#form-create").data("id_user");
                if (id_user) {
                    formData.id = id_user;
                }

                let method = isActionForm === "store" ? 'POST' : 'PUT';
                // let postData = await CallAPI(method, actionUrl, formData);

                let postDataRest = console.log(formData);
                loadingPage(false);
                $("#modal-form").modal("hide");
                Swal.fire({
                    icon: 'success',
                    title: 'Pemberitahuan',
                    text: 'Data berhasil dikirim!',
                    confirmButtonText: 'OK'
                }).then(async () => {
                    await getListData();
                    $(this).trigger("reset");
                    $("#modal-form").modal("hide");
                });

            });
        }


        async function deleteData() {
            $(document).on("click", ".delete-data", async function() {
                isActionForm = "destroy";
                let id = $(this).attr("data-id");
                let name = $(this).attr("data-name");

                const result = await Swal.fire({
                    icon: "question",
                    title: `Hapus Data ${name}`,
                    text: "Anda tidak akan dapat mengembalikannya!",
                    showCancelButton: true,
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Tidak, Batal!",
                    reverseButtons: true
                });

                if (result.isConfirmed) {
                    console.log(id);
                    setTimeout(async () => {
                        loadingPage(false); 
                        Swal.fire({
                            icon: 'success',
                            title: 'Pemberitahuan',
                            text: 'Data berhasil dihapus!',
                            confirmButtonText: 'OK'
                        }).then(async () => {
                            await initDataOnTable(defaultLimitPage, currentPage,
                                defaultAscending, defaultSearch);
                        });
                    }, 100); 
                }
            });
        }


        async function getListData(limit = 10, page = 1, ascending = 0, search = '') {
            loadingPage(true);
            let getDataRest;
            try {
                getDataRest = await CallAPI(
                    'GET',
                    // '{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/kota/list', 
                    '{{ asset('dummy/internal/md-wilayah/list_kota.json') }}', {
                        page: page,
                        limit: limit,
                        ascending: ascending,
                        search: search
                    }
                );
            } catch (error) {
                loadingPage(false);
                let resp = error.response;
                errorMessage = resp.data.message || errorMessage;
                notificationAlert('info', 'Pemberitahuan', errorMessage);
                getDataRest = resp;
            }

            loadingPage(false);
            if (getDataRest.status == 200) {
                await setListData(getDataRest.data);
            } else {
                getDataTable = `
                <tr class="nk-tb-item">
                    <th class="nk-tb-col text-center" colspan="${$('.nk-tb-head th').length}"> ${errorMessage} </th>
                </tr>`;
                $('#listData tr').remove();
                $('#listData').append(getDataTable);
            }
        }

        async function setListData(data) {
            getDataTable = '';
            totalPage = data.pagination.total;
            let dataList = data.data;

            let display_from = ((defaultLimitPage * data.pagination.current_page) + 1) - defaultLimitPage;
            let index_loop = display_from;
            let display_to = display_from + dataList.length - 1;

            for (let index = 0; index < dataList.length; index++) {
                let element = dataList[index];
                const elementData = JSON.stringify(element);
                // <td>
                //         <ul class="nk-tb-actions">
                //             <li class="hovering p-1">
                //                 ${getEditButton(elementData, element)}
                //             </li>
                //             <li class="hovering p-1">
                //                 ${getDeleteButton(elementData, element)}
                //             </li>
                //         </ul>
                //     </td>
                getDataTable += `
                <tr>
                    <td>${index_loop}.</td>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-auto pe-0">
                                <div class="wid-40 hei-40 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-city text-white"></i>
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="mb-1"><span class="text-truncate w-100">${element.name ? element.name : '-'}</span></h6>
                            </div>
                        </div>
                    </td>
                    <td>${element.province.name ? element.province.name : '-'}</td>
                    <td>
                        ${element.administrative_code ? +  element.administrative_code : '-'}
                    </td>
                    <td class="text-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                    ${getEditButton(elementData, element)}
                            </li>
                            <li class="list-inline-item">
                                ${getDeleteButton(elementData, element)}
                            </li>
                        </ul>
                    </td>
                </tr>`;
                index_loop++;
            }

            if (totalPage == 0 || dataList.length === 0) {
                getDataTable = `
                <tr>
                    <th class="text-center" colspan="5"> Tidak ada data. </th>
                </tr>`;
                $('#countPage').text("0 - 0");
            }

            $('#listData tr').remove();
            $('#listData').append(getDataTable);
            $('#totalPage').text(data.pagination.total);
            $('#countPage').text("" + display_from + " - " + display_to + "");

            $('[data-bs-toggle="tooltip"]').tooltip();
        }

        function getEditButton(elementData, element) {
            return `
                <a class="avtar avtar-s btn-link-warning btn-pc-default edit-data"
                data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Edit Data ${element.name}"
                    data='${elementData}'
                    data-id="${element.id}"
                    data-name="${element.name}">
                    <i class="ti ti-edit f-20"></i>
                </a>`;
        }

        function getDeleteButton(elementData, element) {
            return `
                <a class="avtar avtar-s btn-link-danger btn-pc-default delete-data"
                    data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Hapus Data ${element.name}"
                    data='${elementData}'
                    data-id="${element.id}"
                    data-name="${element.name}">
                    <i class="ti ti-trash f-20"></i>
                </a>`;
        }

        async function performSearch() {
            defaultSearch = $('.search-input').val();
            defaultLimitPage = $("#limitPage").val();
            currentPage = 1;
            await initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
        }

        async function initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch) {
            await getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch);
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


        async function selectList(id, isUrl, placeholder, isModal = false) {
            let select2Options = {
                ajax: {
                    url: isUrl,
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
                            ascending: 1,
                        };
                        return query;
                    },
                    processResults: function(res) {
                        let filteredData = $.map(res.data, function(item) {
                            return {
                                id: item.id,
                                text: item.name
                            };
                        });
                        return {
                            results: filteredData,
                            pagination: {
                                more: (res.pagination.current_page < res.pagination.total_pages)
                            }
                        };
                    }
                },
                allowClear: true,
                placeholder: placeholder
            };

            if (isModal === true) {
                select2Options.dropdownParent = $('#modal-form');
            }

            await $(id).select2(select2Options);
        }

        async function initPageLoad() {
            await Promise.all([
                // selectList('#input_province_id',
                //     // '{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/provinsi/list',
                //     '{{ asset('dummy/internal/md-wilayah/select_provinsi.json') }}',
                //     'Jawa Barat', true),
                initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch),
                manipulationDataOnTable(),
                addData(),
                editData(),
                submitForm(),
                deleteData(),
            ])
        }
        document.addEventListener('DOMContentLoaded', initPageLoad);
    </script>
@endsection
