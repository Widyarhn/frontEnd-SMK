@extends('...Administrator.index', ['title' => 'User Manajemen | Master Data Administrasi'])

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Administrasi</a></li>
                        <li class="breadcrumb-item" aria-current="page">User Manajemen</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-start">
                    <div class="page-header-title">
                        <h2 class="mb-0">Data Pengguna</h2>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-md btn-primary px-3 p-2 mt-3 mt-md-0 add-data"
                        id="add-data">
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
                                                </select> 
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
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nama Pengguna</th>
                                                    <th>NIP</th>
                                                    <th>Peran</th>
                                                    <th>Status</th>
                                                    <th>Tanggal Terdaftar</th>
                                                    <th class="text-end">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="listData">
                                            </tbody>
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
        <div class="modal fade modal-animate modal-lg modal-animate-scrollable" id="modal-form" data-bs-keyboard="false"
            tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                        <div class="p-3">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-floating mb-0">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Masukkan email" required />
                                            <label for="email">Email<sup
                                                    class="required-pass text-danger ms-1">*</sup></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-floating mb-0">
                                            <input type="text" class="form-control" name="fullname" id="fullname"
                                                placeholder="Masukkan nama lengkap" required />
                                            <label for="fullname">Nama Lengkap<sup
                                                    class="required-pass text-danger ms-1">*</sup></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-floating mb-0">
                                            <input type="text" class="form-control" name="username" id="username"
                                                placeholder="Masukkan nama pengguna" required />
                                            <label for="username">Nama Pengguna (username)<sup
                                                    class="required-pass text-danger ms-1">*</sup></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-floating mb-0">
                                            <input type="text" class="form-control" name="nip" id="nip"
                                                placeholder="Masukkan NIP" autocomplete="off" required />
                                            <label for="nip">NIP<sup
                                                    class="required-pass text-danger ms-1">*</sup></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <select class="form-select" name="input_role" id="input-role"
                                        aria-label="Floating label select example">
                                        <option selected>Pilih role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Asesor</option>
                                    </select>
                                    <label for="input_role">Role<sup
                                            class="required-pass text-danger ms-1">*</sup></label>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-floating mb-0 position-relative">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Masukkan kata sandi" autocomplete="off" required />
                                            <label for="password">Kata Sandi
                                                <sup class="required-pass text-danger ms-1">*</sup>
                                            </label>
                                            <a href="javascript:void(0);"
                                                class="form-icon form-icon-right passcode-switch lg"
                                                onclick="togglePasswordVisibility('password', this)">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off d-none"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-floating mb-0 position-relative">
                                            <input type="password" class="form-control" id="password-confirm"
                                                name="password-confirm" placeholder="Masukkan kata sandi"
                                                autocomplete="off" required />
                                            <label for="password-confirm" >Konfirmasi Kata Sandi
                                                <sup class="required-pass text-danger ms-1">*</sup>
                                            </label>
                                            <a href="javascript:void(0);"
                                                class="form-icon form-icon-right passcode-switch lg"
                                                onclick="togglePasswordVisibility('password-confirm', this)">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off d-none"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <small id="passwordHelp mt-2">
                                <b>Kata sandi yang baik mengandung:</b>
                                <ul>
                                    <li id="is8">
                                        <span>Minimal 8 karakter <i style="display: none" class="ti ti-check"
                                                id="is8Check" aria-hidden="true"></i></span>
                                    </li>
                                    <li id="isCapLow">
                                        <span>Huruf Besar & Huruf Kecil (Aa) <i style="display: none" class="ti ti-check"
                                                id="isCapLowCheck" aria-hidden="true"></i></span>
                                    </li>
                                    <li id="isAngka">
                                        <span>Angka (1234567890) <i style="display: none" class="ti ti-check"
                                                id="isAngkaCheck" aria-hidden="true"></i></span>
                                    </li>
                                    <li id="isSymbol">
                                        <span>Symbol (?!@#$%^&*.) <i style="display: none" class="ti ti-check"
                                                id="isSymbolCheck" aria-hidden="true"></i></span>
                                    </li>
                                </ul>
                            </small>
                        </div>

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
    
    <script>
        
    </script>

    <script>
        let defaultLimitPage = 10;
        let currentPage = 1;
        let totalPage = 1;
        let defaultAscending = 0;
        let defaultSearch = '';
        let menu = 'Pengguna';
        let getDataTable = '';
        let errorMessage = "Terjadi Kesalahan.";
        let isActionForm = "store";
        let env = `{{ env('ESMK_SERVICE_BASE_URL') }}`

        function togglePasswordVisibility(inputId, toggleElement) {
            const input = document.getElementById(inputId);
            const showIcon = toggleElement.querySelector('.icon-show');
            const hideIcon = toggleElement.querySelector('.icon-hide');
            
            if (input.type === 'password') {
                input.type = 'text';
                showIcon.classList.add('d-none');
                hideIcon.classList.remove('d-none');
            } else {
                input.type = 'password';
                showIcon.classList.remove('d-none');
                hideIcon.classList.add('d-none');
            }
        }
        
        async function getListData(defaultLimitPage, currentPage, defaultAscending, defaultSearch) {
            loadingPage(true);
            let getDataRest;
            try {
                getDataRest = await CallAPI(
                    'GET',
                    // '{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/direktur-jendral/list', 
                    '{{ asset('dummy/internal/user-manajemen/list_user_manajemen.json') }}', {
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
                        `<a class="avtar avtar-s btn-link-danger change-status" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Nonaktifkan Status ${element.name}" data-id="${element.id}" data-status="nonaktifkan">
                            <i class="fa-solid fa-user-xmark"></i>
                        </a>` :
                        `<a class="avtar avtar-s btn-link-success change-status" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Aktifkan Status ${element.name}" data-id="${element.id}" data-status="aktifkan">
                            <i class="fa-solid fa-user-check fa-lg"></i>
                        </a>`;

                    appendHtml += `
                        <tr>
                            <td>${index_loop}.</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto pe-0">
                                        <img src="{{ asset('assets') }}/images/user/avatar-5.jpg" alt="user-image"
                                            class="wid-40 hei-40 rounded-circle" />
                                    </div>
                                    <div class="col">
                                        <h6 class="mb-1"><span class="text-truncate w-100">${element.name || '-'}</span> </h6>
                                        <p class="f-12 mb-0"><a href="#!" class="text-muted"><span
                                                    class="text-truncate w-100">${element.email || '-'}</span></a>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>${element.username || '-'}</td>
                            <td>${element.nip || '-'}</td>
                            <td><span class="badge text-bg-light fw-bold p-2"><i class="fa-solid fa-user me-2 fa-lg"></i>${element.role_name || '-'}</span></td>
                            <td>
                                ${statusBadge}
                            </td>
                            <td>${element.created_at ? new Date(element.created_at).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' }) : '-'}</td>
                            <td class="text-end">
                                <li class="list-inline-item">
                                    ${actionButton}
                                </li>
                                <li class="list-inline-item">
                                        ${getEditButton(elementData, element)}
                                </li>
                            </td>
                        </tr>`;
                    index_loop++;
                }

                $('#listData tr').remove();
                if (totalPage === 0) {
                    appendHtml = `
                        <tr>
                            <th class="text-center" colspan="8> Tidak ada data. </th>
                        </tr>`;
                    $('#countPage').text("0 - 0");
                    $('#pagination-js').hide();
                } else {
                    $('#pagination-js').show();
                    $('#countPage').text(`${display_from} - ${display_to}`);
                }

                $('#listData').html(appendHtml);
                $('#totalPage').text(totalPage);
                $('[data-bs-toggle="tooltip"]').tooltip();
            }
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

        async function addData() {
            $(document).on("click", ".add-data", function() {
                $("#modal-title").html(`Form Pendaftaran ${menu}`);
                isActionForm = "store";
                $("#modal-form").modal("show");
                $("form").find("input, textarea").val("").prop("checked", false).trigger("change");

                $("#password").attr("required", "required");
                $("#password-confirm").attr("required", "required");
                $(".required-pass").text("*");
                // $("#form-user").data("action-url",
                //     `{{ env('AUTH_SERVICE_BASE_URL') }}/user-management/esmk/add`);
                $("#form-create").data("action-url",
                    ``);
            });
        }

        async function submitForm() {
            $(document).on("submit", "#form-create", async function(e) {
                e.preventDefault();
                if ($('#password').val() != $('#password-confirm').val()) {
                    notificationAlert('info', 'Pemberitahuan', 'Konfirmasi kata sandi tidak sama.');
                    return;
                }
                loadingPage(true);

                let actionUrl = $("#form-create").data("action-url");
                // work_unit_id: $('#input-instansi').val(),
                let formData = {
                    id_application: params,
                    id_role: $('#input-role').val(),
                    name: $('#fullname').val(),
                    username: $('#username').val(),
                    email: $('#email').val(),
                    nip: $('#nip').val(),
                    password: $('#password').val()
                };

                let idUser = $("#form-create").data("id_user");
                if (idUser) {
                    formData.id_user = idUser;
                }

                let id_user = $("#form-create").data("id_user");
                console.log(id_user);
                if (id_user) {
                    formData.id = id_user;
                }
                let method = id_user ? 'PUT' : 'POST';
                let postDataRest = console.log(formData);
                loadingPage(false);
                $("#modal-form").modal("hide");
                Swal.fire({
                    icon: 'success',
                    title: 'Pemberitahuan',
                    text: 'Data berhasil didaftarkan!',
                    confirmButtonText: 'OK'
                }).then(async () => {
                    await initDataOnTable(defaultLimitPage, currentPage,
                        defaultAscending, defaultSearch);
                    $(this).trigger("reset");
                    $("#modal-form").modal("hide");
                });
            });
        }

        async function setStatus() {
            $(document).on("click", ".change-status", async function() {
                let id = $(this).attr("data-id");
                let status = $(this).attr("data-status");
                console.log(status);
                await setStatusAction(id, status);
            });
        }

        async function setStatusAction(id, status) {
            Swal.fire({
                icon: "info",
                title: "Pemberitahuan",
                text: "Apakah anda yakin mengganti status data ini?",
                showCancelButton: true,
                confirmButtonText: "Ya, Saya Yakin!",
                cancelButtonText: "Batal",
                reverseButtons: true
            }).then(async (result) => {
                loadingPage(true)
                let postDataRest = console.log(id);
                loadingPage(false);
                if (result.isConfirmed == true) {
                    setTimeout(async () => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Pemberitahuan',
                            text: 'Status berhasil dirubah!',
                            confirmButtonText: 'OK'
                        }).then(async () => {
                            await initDataOnTable(defaultLimitPage,
                                currentPage,
                                defaultAscending, defaultSearch);
                        });
                    }, 100);
                }
            }).catch(swal.noop);
        }

        async function editData() {
            $(document).on("click", ".edit-data", async function() {
                loadingPage(false);

                let modalTitle = `Form Perbarui Data ${menu}`;
                let data = $(this).attr("data");
                data = JSON.parse(data);
                let id = $(this).attr("data-id");

                $("#modal-title").html(modalTitle);
                $("#modal-form").modal("show");

                $("form").find("input, textarea").val("").prop("checked", false).trigger("change");

                $("#password").removeAttr("required");
                $("#password-confirm").removeAttr("required");

                let newOption = new Option(data.role_name, data.role_id, true, true);
                $('#input-role').append(newOption).trigger('change');

                $('#fullname').val(data.name)
                $('#username').val(data.username)
                $('#email').val(data.email)
                $('#nip').val(data.nip)

                $(".required-pass").text("");
                $("#form-create").data("action-url",
                    `{{ asset('dummy/internal/user-manajemen/edit_user.json') }}`);
                $("#form-create").data("id_user", data.id);
            });
        }


        async function selectFilter(id) {
            if (id === '#input-role' || id === '#input-filter') {
                let placeholder = '';
                if (id === '#input-role') {
                    placeholder = 'Pilih role';
                }
                if (id === '#input-filter') {
                    placeholder = 'Filter By Role';
                }
                let dataSelect = {
                    ajax: {
                        url: ` `,
                        // url: `${url}/user-management/esmk/role/list`,
                        dataType: 'json',
                        delay: 500,
                        headers: {
                            Authorization: `Bearer ${Cookies.get('auth_token')}`
                        },
                        data: function(params) {
                            let query = {
                                search: params.term,
                            }
                            return query;
                        },
                        processResults: function(res) {
                            let data = res;
                            return {
                                results: $.map(data.data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.role
                                    }
                                })
                            };
                        },
                    },
                    allowClear: true,
                    placeholder: placeholder
                };
                if (id === '#input-role') {
                    dataSelect.dropdownParent = $('#modal-form')
                }
                $(id).select2(dataSelect);
            }
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

        async function initPageLoad() {
            await Promise.all([
                initDataOnTable(defaultLimitPage, currentPage, defaultAscending, defaultSearch),
                manipulationDataOnTable(),
                addData(),
                setStatus(),
                editData(),
                submitForm(),
                deleteData(),
                // selectList('#input_satuan_kerja_id',
                //     '{{ env('ESMK_SERVICE_BASE_URL') }}/internal/admin-panel/satuan-kerja/list',
                //     'Pilih Satuan Kerja', true),
            ]);

        }
    </script>
@endsection
