@extends('...Administrator.index', ['title' => 'Administrasi | Hak Akses'])
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
    <link rel="stylesheet" href="{{ asset('assets') }}/css/select2.min.css" />
    <style>
        .datatable-top {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0)">Administrasi</a></li>
                        <li class="breadcrumb-item" aria-current="page">Hak Akses</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-start">
                    <div class="page-header-title">
                        <h2 class="mb-0">Manajemen Peran</h2>
                    </div>
                    <button data-pc-animate="fade-in-scale" type="button"
                        class="btn btn-md btn-primary px-3 p-2 mt-3 mt-md-0" data-bs-toggle="modal"
                        data-bs-target="#animateModal">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Peran Baru
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
                    <div class="col-lg-4 mt-2">
                        <div class="mb-3">
                            <label class="fw-bold mb-2" for="input-role">Pencarian Peran</label>
                            <select class="form-control select2" name="input_role" id="input-role"></select>

                        </div>
                    </div>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel"
                            aria-labelledby="analytics-tab-1" tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Peran</th>
                                            <th>Izin</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-animate modal-animate-scrollable" data-bs-keyboard="false" tabindex="-1" id="animateModal"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah Peran Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                    <form class="p-3">
                        <div class="mb-3">
                            <div class="form-floating mb-0">
                                <input type="text" class="form-control" id="namaPeran" placeholder="" />
                                <label for="namaPeran">Nama Peran</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-check-label mt-2" for="customCheckinl1" style="font-weight: 500;">Peran
                                Status</label><br>
                            <div class="form-check form-switch custom-switch-v1 form-check-inline mt-2">
                                <input type="checkbox" class="form-check-input input-primary me-2" id="customCheckinl1" />
                                <label class="form-check-label" style="color: rgba(0, 0, 0, 0.625)"
                                    for="customCheckinl1">Centang jika peran ini aktif.</label>
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
    <script src="https://ableproadmin.com/assets/js/plugins/apexcharts.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/select2/select2.full.min.js"></script>
    <script src="{{ asset('assets') }}/js/select2/select2.min.js"></script>
@endsection

@section('page_js')
    <script>
        async function getPermissions() {
            loadingPage(true);

            const getDataRest = await CallAPI(
                    'GET',
                    `/dummy/hakAkses/group_permission.json`,
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
                let data = getDataRest.data.data
                let $rowTable = '';
                for (let idxData in data) {
                    let $tdPermissions = ``
                    for (let idxPermission in data[idxData]) {
                        let permission = data[idxData][idxPermission]
                        $tdPermissions += `
                            <div class="form-check form-switch form-switch-lg">
                                <input type="checkbox" name="status" class="form-check-input checkbox-permission" id="checkbox-permission-${permission.id}" value="${permission.id}" style="left: 0;">
                                <label class="form-check-label" for="checkbox-status" style="margin-left: 10px;">${permission.name}</label>
                            </div>
                        `
                    }

                    $rowTable += `
                        <tr>
                            <td style="text-align: center">
                                ${Object.keys(data).indexOf(idxData) + 1}
                            </td>
                            <td>
                                ${idxData}
                            </td>
                            <td>
                                ${$tdPermissions}
                            </td>
                        </tr>
                    `
                }
                $('#datatable').find('tbody').append($rowTable)
            }
        }

        async function selectFilter(id) {
            $('#input-role').select2({
                ajax: {
                    url: `/dummy/hakAkses/role.json`,
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
                placeholder: 'Pilih peran'
            });
        }

        async function getPermissionsByRoleID() {
            loadingPage(true);

            const getDataRest = await CallAPI(
                    'GET',
                    `/dummy/hakAkses/permission.json`,
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
                let data = getDataRest.data.data
                for (let i in data) {
                    $(`#checkbox-permission-${data[i].id}`).prop('checked', true)
                }
            }
        }


        $(document).on('change', '.checkbox-permission', function() {
            let permissionID = $(this).val()
            let isAssign = $(this).prop('checked')

            let getDataRest = CallAPI(
                    'GET',
                    `/dummy/hakAkses/sync_permission.json`, {
                        isAssign: isAssign,
                        permission: parseInt(permissionID),

                    }
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
                Swal.fire({
                    icon: 'info',
                    title: 'Pemberitahuan',
                    text: "Berhasil merubah role",
                    confirmButtonColor: '#28a745',
                });
            }
        })


        $('#input-role').on('change', function() {
            $('.checkbox-permission').each(function() {
                $(this).prop('checked', false)
            })

            selectedRole = $(this).val()
            getPermissionsByRoleID($(this).val())
        })

        async function initPageLoad() {

            await Promise.all([
                getPermissions(),
                getPermissionsByRoleID(),
                selectFilter('#input-role'),
            ]);

        }
    </script>
    @include('Administrator.partial-js')
@endsection
