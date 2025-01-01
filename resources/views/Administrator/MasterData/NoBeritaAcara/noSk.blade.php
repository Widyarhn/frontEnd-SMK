@extends('...Administrator.index', ['title' => 'Nomor SK | Master Data Satuan Kerja'])
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
                        <li class="breadcrumb-item" aria-current="page">No. Berita Acara</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex d-flex flex-column flex-md-row justify-content-between align-items-start">
                    <div class="page-header-title">
                        <h2 class="mb-0">No. Berita Acara</h2>
                    </div>
                    <button data-pc-animate="fade-in-scale" type="button" class="btn btn-md btn-primary px-3 p-2 mt-3 mt-md-0"
                        data-bs-toggle="modal" data-bs-target="#animateModal">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Data
                    </button>
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
                                <table class="table table-hover" id="pc-dt-simple-1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Berita Acara</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th class="text-end">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listData">
                                        {{-- <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div class="wid-40 hei-40 rounded-circle bg-light d-flex align-items-center justify-content-center">
                                                            <i class="fa-solid fa-book-open-reader text-black"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">SK123-2024</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>05 September 2024</td>
                                            <td><span class="badge bg-light-danger">Tidak Aktif</span></td>
                                            <td class="text-end">
                                                <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-success btn-pc-default">
                                                            <i class="fa-solid fa-user-check"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                                class="ti ti-edit f-20"></i></a></li>
                                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                class="ti ti-trash f-20"></i></a></li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-auto pe-0">
                                                        <div class="wid-40 hei-40 rounded-circle bg-light d-flex align-items-center justify-content-center">
                                                            <i class="fa-solid fa-book-open-reader text-black"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-1"><span class="text-truncate w-100">SK123-2024</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>20 Oktober 2024</td>
                                            <td><span class="badge bg-light-success">Aktif</span></td>
                                            <td class="text-end">
                                                <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default">
                                                            <i class="fas fa-user-times"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                                class="ti ti-edit f-20"></i></a></li>
                                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                                class="ti ti-trash f-20"></i></a></li>
                                            </td>
                                        </tr> --}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-animate modal-animate-scrollable" data-bs-keyboard="false" tabindex="-1"
        id="animateModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Nomor Berita Acara</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                    <form class="p-3">
                        <div class="mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" disabled>
                                    <option selected>Dishub Jabar</option>
                                    <option value="1">Kementrian Perhubungan Darat</option>
                                    <option value="2"></option>
                                </select>
                                <label for="floatingSelect">Satuan Kerja</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-0">
                                <input type="kota" class="form-control" id="floatingKota" placeholder="kota" />
                                <label for="floatingInput">No. Berita Acara</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary shadow-2">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
    <script>
        let env = '{{ env('ESMK_SERVICE_BASE_URL') }}';
        let menu = 'Nomor SK';
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
                $("form").find("input, select, textarea").val("").prop("checked", false).trigger("change");

                $("#form-create").data("action-url", `${env}/internal/admin-panel/sk-number/store`);
            });
        }

        async function editData() {
            $(document).on("click", ".edit-data", async function() {
                loadingPage(false);
                let name = $(this).attr("data-name");
                let modalTitle = `Form Perbaharui ${menu}`;
                let data = $(this).attr("data");
                data = JSON.parse(data);
                let id = $(this).attr("data-id");

                $("#modal-title").html(modalTitle);
                $("#modal-form").modal("show");
                $("form").find("input, select, textarea").val("").prop("checked", false).trigger("change");


                $("#input_sk_number").val(data.decree_number);

                let workUnit = data.work_unit.id;
                console.log(data)
                $("#input_satuan_kerja_id").val(null).trigger('change');
                $('#input_satuan_kerja_id').append(new Option(data.work_unit.name, workUnit, true, true));
                $("#input_satuan_kerja_id").trigger('change');


                $("#form-create").data("action-url", `${env}/internal/admin-panel/sk-number/update`);
                $("#form-create").data("id_user", id);
            });
        }

        async function submitForm() {
            $(document).on("submit", "#form-create", async function(e) {
                e.preventDefault();
                loadingPage(true);

                let actionUrl = $("#form-create").data("action-url");
                let formData = {
                    sk_number: $('#input_sk_number').val(),
                    satker_id: $('#input_satuan_kerja_id').val()
                };

                let id_user = $("#form-create").data("id_user");
                if (id_user) {
                    formData.id = id_user;
                }

                let method = isActionForm === "store" ? 'POST' : 'PUT';
                try {
                    let postData = await CallAPI(method, actionUrl, formData);

                    loadingPage(false);
                    if (postData.status >= 200 && postData.status <
                        300) { // Check for status codes in the success range
                        let rest_data = postData.data;
                        notificationAlert('success', 'Berhasil', rest_data.message);
                        setTimeout(async function() {
                            window.location.reload();
                        }, 1500);
                        $("#modal-form").modal("hide");
                    } else {
                        notificationAlert('info', 'Pemberitahuan', postData.data.errors ||
                            'Terjadi kesalahan');
                    }
                } catch (error) {
                    loadingPage(false);
                    console.error('API Call Error:', error);
                    let resp = error.response || {};
                    notificationAlert('info', 'Pemberitahuan', resp.data.errors || 'Terjadi kesalahan');
                }
            });
        }

        async function deleteData() {
            $(document).on("click", ".delete-data", async function() {
                isActionForm = "destroy";
                let id = $(this).attr("data-id");
                let name = $(this).attr("data-name");
                swal({
                    title: `Hapus Data ${name}`,
                    text: "Anda tidak akan dapat mengembalikannya!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Tidak, Batal!",
                    reverseButtons: true
                }).then(async (result) => {
                    loadingPage(true);
                    // if (result.isConfirmed) {
                    let postDataRest = await CallAPI(
                        'DELETE',
                        `{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/sk-number/${isActionForm}`, {
                            "id": id
                        }
                    ).then(function(response) {
                        loadingPage(false);
                        return response;
                    }).catch(function(error) {
                        loadingPage(false);
                        let resp = error.response;
                        notificationAlert('info', 'Pemberitahuan', resp.data
                            .message);
                        return resp;
                    });

                    if (postDataRest.status == 200) {
                        notificationAlert('success', 'Berhasil', postDataRest.message);
                        setTimeout(async function() {
                            window.location.reload();
                        }, 1500);
                        notificationAlert('success', 'Pemberitahuan', postDataRest.data
                            .message);
                    }
                    // }
                }).catch(swal.noop);
            })
        }

        async function getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch) {
            loadingPage(true);
            let getDataRest;
            try {
                getDataRest = await CallAPI(
                    'GET',
                    // `{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/sk-number/list`, 
                    '{{ asset('dummy/internal/md-no-ba/list_noBa.json') }}',
                    {
                        page: currentPage,
                        limit: defaultLimitPage,
                        ascending: defaultAscending,
                        search: defaultSearch
                    }
                );
            } catch (error) {
                loadingPage(false);
                let resp = error.response;
                errorMessage = resp.data.message || errorMessage;
                notificationAlert('info', 'Pemberitahuan', errorMessage);
                getDataRest = resp;
            }
            if (getDataRest.status == 200) {
                loadingPage(false);
                let data = getDataRest.data;
                appendHtml = '';
                totalPage = data.pagination.total;
                let dataList = data.data;

                let display_from = ((defaultLimitPage * data.pagination.current_page) + 1) - defaultLimitPage;
                let index_loop = display_from;
                let display_to = display_from + dataList.length - 1;

                for (let index = 0; index < dataList.length; index++) {
                    let element = dataList[index];
                    const elementData = JSON.stringify(element);

                    const isActive = element.is_active === true;
                    const statusBadge = isActive ?
                        `<span class="badge bg-success d-flex align-items-center justify-content-center text-white" style="max-width: 100px; white-space: nowrap;"><i class="fa fa-check-circle me-2"></i> Aktif</span>` :
                        `<span class="badge bg-danger d-flex align-items-center justify-content-center text-white" style="max-width: 100px; white-space: nowrap;"><i class="fa fa-times-circle me-2"></i> Tidak Aktif</span>`;

                    const actionButton = isActive ?
                        `<button class="btn btn-primary border-white btn-dim btn-outline-light change-status uniform-button" data-id="${element.id}" data-status="nonaktifkan"><i class="fa fa-circle-xmark text-danger me-1"></i>Nonaktifkan</button>` :
                        `<button class="btn btn-primary border-white btn-dim btn-outline-light change-status uniform-button" data-id="${element.id}" data-status="aktifkan"><i class="fa fa-circle-check text-success me-1"></i>Aktifkan</button>`;

                    appendHtml += `
                        <tr class="nk-tb-item">
                            <td>${index_loop}.</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto pe-0">
                                        <div class="wid-40 hei-40 rounded-circle bg-light d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-book-open-reader text-black"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="mb-1"><span class="text-truncate w-100">${element.decree_number || '-'}</span></h6>
                                    </div>
                                </div>
                            </td>
                            <td>${element.created_at ? new Date(element.created_at).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' }) : '-'}</td>
                            <td>
                                ${statusBadge}
                            </td>
                            <td class="text-end">
                                <li class="list-inline-item"><a data-bs-toggle="modal"
                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                            class="avtar avtar-s btn-link-success btn-pc-default">
                                            <i class="fa-solid fa-user-check"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                            class="avtar avtar-s btn-link-warning btn-pc-default"><i
                                                class="ti ti-edit f-20"></i></a></li>
                                    <li class="list-inline-item"><a data-bs-toggle="modal"
                                            data-pc-animate="fade-in-scale" data-bs-target="#animateModal"
                                            class="avtar avtar-s btn-link-danger btn-pc-default"><i
                                                class="ti ti-trash f-20"></i></a></li>
                            </td>
                        </tr>`;
                    index_loop++;
                }

                $('#listData tr').remove();
                if (totalPage === 0) {
                    appendHtml = `
                        <tr class="nk-tb-item">
                            <th class="nk-tb-col text-center" colspan="${$('.nk-tb-head th').length}"> Tidak ada data. </th>
                        </tr>`;
                    $('#countPage').text("0 - 0");
                    $('#pagination-js').hide();
                } else {
                    $('#pagination-js').show();
                    $('#countPage').text(`${display_from} - ${display_to}`);
                }

                $('#listData').html(appendHtml);
                $('#totalPage').text(totalPage);
            }
        }


        function getEditButton(elementData, element) {
            return `
                <button class="btn btn-secondary border-white btn-dim btn-outline-light edit-data uniform-button"
                    data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Edit Data ${element.decree_number}"
                    data='${elementData}'
                    data-id="${element.id}"
                    data-name="${element.decree_number}">
                    <i class="fa fa-edit text-warning me-1"></i>Edit
                </button>`;
        }

        function getDeleteButton(elementData, element) {
            return `
                <button class="btn btn-secondary border-white btn-dim btn-outline-light delete-data uniform-button"
                    data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Hapus Data ${element.decree_number}"
                    data='${elementData}'
                    data-id="${element.id}"
                    data-name="${element.decree_number}">
                    <i class="fa fa-trash text-danger me-1"></i>Hapus
                </button>`;
        }

        function getChangeStatusButton(element) {
            return `
                <button class="btn btn-primary border-white btn-dim btn-outline-light change-status uniform-button"
                    data-id="${element.id}"
                    data-status="${element.is_active.init}">
                    <i class="${element.is_active.icon_action} me-1"></i>${element.is_active.text_action}
                </button>`;
        }

        async function setStatus() {
            $(document).on("click", ".change-status", async function() {
                let id = $(this).attr("data-id");
                let status = $(this).attr("data-status");
                await setStatusAction(id, status);
            });
        }

        async function setStatusAction(id, status) {
            swal({
                title: "Pemberitahuan",
                text: "Apakah anda yakin mengganti status data ini?",
                type: "info",
                showCancelButton: true,
                confirmButtonText: "Ya, Setujui",
                cancelButtonText: "Batal",
                reverseButtons: true
            }).then(async (result) => {
                loadingPage(true)
                let notes = result ? result : "";
                let env = `{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/sk-number/status`;
                let dataRest = await CallAPI(
                    'GET',
                    `${env}`, {
                        id: id,
                        is_active: status,
                    }

                ).then(function(response) {
                    loadingPage(false)
                    return response;
                }).catch(function(error) {
                    loadingPage(false);
                    let resp = error.response;
                    notificationAlert('info', 'Pemberitahuan', resp.data.message);
                    return resp;
                });
                if (dataRest.status == 200) {
                    loadingPage(false);
                    setTimeout(async function() {
                        window.location.reload();
                    }, 500);
                    notificationAlert('success', 'Pemberitahuan', 'Berhasil');
                }
            }).catch(swal.noop);
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
                            search: params.term, // search term
                            page: 1,
                            limit: 30,
                            ascending: 1,
                        };
                        return query;
                    },
                    processResults: function(res) {
                        // Log response to check structure

                        if (res.error === false && Array.isArray(res.data)) {
                            // Map response to match Select2 expected format
                            let filteredData = $.map(res.data, function(item) {
                                return {
                                    id: item.id, // 'id' field
                                    text: item.name + ' (' + item.level +
                                        ')' // Display 'name' and 'level'
                                };
                            });

                            return {
                                results: filteredData,
                                pagination: {
                                    more: (res.paginate.current_page < res.paginate.total_pages)
                                }
                            };
                        } else {
                            return {
                                results: []
                            };
                        }
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

        function formatTanggalIndo(dateString) {
            const date = new Date(dateString);
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            return new Intl.DateTimeFormat('id-ID', options).format(date);
        }

        async function initPageLoad() {
            await Promise.all([
                selectList('#input_satuan_kerja_id',
                    '{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/satuan-kerja/list',
                    'Pilih Satuan Kerja', true),
                initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch),
                manipulationDataOnTable(),
                setStatus(),
                addData(),
                editData(),
                submitForm(),
                deleteData(),
            ])
        }

        document.addEventListener('DOMContentLoaded', initPageLoad);
    </script>
@endsection
