@extends('...Company.index', ['title' => 'Tambah Element SMK | Master Data Element'])
@section('asset_css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/style.css" />
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

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
                        <li class="breadcrumb-item"><a href="/company/yearly-report/list">Laporan Tahunan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Buat Laporan Tahunan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Laporan Tahunan</h2>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-md btn-primary px-3 p-2 dropdown-toggle" id="dropdownTahun"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-plus-circle me-2"></i> Pilih tahun
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownTahun">
                            <!-- List Tahun -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="basicwizard" class="form-wizard row justify-content-center">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="nav-wrapper" style="overflow-x: auto; white-space: nowrap;">
                        <ul class="nav nav-pills nav-justified" id="wizardTabs"
                            style="display: flex; overflow-x: auto; padding-bottom: 10px;">
                            <!-- Tab Dinamis Akan Dimasukkan di Sini -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="wizardContent">
                        <!-- Konten Dinamis Akan Dimasukkan di Sini -->
                    </div>
                </div>
                <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                    <button type="button" class="btn btn-secondary" id="previousStep"
                        style="margin-right: 10px;">Kembali</button>
                    <button type="button" class="btn btn-primary" id="nextStep"
                        style="margin-left: 10px;">Selanjutnya</button>
                    <button type="button" class="btn btn-success" id="saveStep"
                        style="display: none; margin-left: 10px;">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets') }}/js/plugins/wizard.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/moment.js"></script>
@endsection

@section('page_js')
    <script>
        let monitoringElementID
        let monitoringElement
        let responseData;
        let resp

        function yearPicker(minYear, maxYear, isReportMonth, publishYear, latestReportYear, currentYear) {
            $('#iReportYear').yearpicker({
                startYear: minYear,
                endYear: maxYear,
                selectedClass: 'text-primary',
                disabled: !isReportMonth // Disable if not in the report month
            });

            $('#iReportYear').on('change', function() {
                let selectedYear = parseInt($(this).val());

                if (selectedYear === publishYear) {
                    notificationAlert('info', 'Pemberitahuan', 'Tahun pengesahan sertifikat tidak bisa dipilih!');
                    $('#iReportYear').val(''); // Reset selection
                } else if (selectedYear === latestReportYear) {
                    notificationAlert('info', 'Pemberitahuan', 'Sudah ada pengajuan laporan!');
                    $('#iReportYear').val(''); // Reset selection
                } else if (selectedYear > currentYear) {
                    notificationAlert('info', 'Pemberitahuan', 'Belum waktunya laporan tahunan!');
                    $('#iReportYear').val(''); // Reset selection
                } else if (selectedYear < publishYear) {
                    notificationAlert('info', 'Pemberitahuan', 'Tidak ada pengesahan sertifikat pada tahun ini!');
                    $('#iReportYear').val(''); // Reset selection
                }
            });

            if (!isReportMonth) {
                $('#iReportYear').prop('disabled', true); // Explicitly disable input
            } else {
                $('#iReportYear').prop('disabled', false); // Enable input when it's the report month
            }
        }

        async function setReportYear() {
            let smkCertificate = await getSmkCertificate(),
                currentYear = new moment().year(),
                currentMonth = new moment().month(), // Get current month (0-11)
                publishYear = moment(smkCertificate.data.data.publish_date).year(),
                reportMonth = moment(smkCertificate.data.data.publish_date).month(),
                minYear = currentYear,
                latestReportYear = null;

            if (smkCertificate.data.data !== null) {
                let latestReport = await getLatestReportYear();

                if (Object.keys(latestReport.data).length > 0) {
                    minYear = latestReport.data.year + 1;
                    latestReportYear = latestReport.data.year;
                } else {
                    minYear = publishYear + 1;
                }
            } else {
                minYear++;
            }

            // Check if it's the report month and the publish year is not the current year
            let isReportMonth = (currentMonth === reportMonth) && (publishYear < currentYear);
            toggleSubmitButton(isReportMonth);

            yearPicker(minYear, currentYear, isReportMonth, publishYear, latestReportYear, currentYear);
        }

        async function getSmkCertificate() {
            loadingPage(true);
            let getDataRest;

            try {
                getDataRest = await CallAPI(
                    'GET',
                    '/dummy/company/laporanTahunan/certificate.json'
                    // `{{ env('ESMK_SERVICE_BASE_URL') }}/company/documents/certificate`
                );
            } catch (error) {
                loadingPage(false);
                const resp = error.response;
                const errorMessage = resp?.data?.message;
                notificationAlert('info', 'Pemberitahuan', errorMessage);
                return resp;
            }

            return getDataRest;
        }

        async function getLatestReportYear() {
            loadingPage(true);
            let getDataRest;

            try {
                getDataRest = await CallAPI(
                    'GET',
                    '/dummy/company/laporanTahunan/latest.json'
                    // `{{ env('ESMK_SERVICE_BASE_URL') }}/company/laporan-tahunan/latest`
                );
                loadingPage(false);

            } catch (error) {
                loadingPage(false);
                const resp = error.response;
                const errorMessage = resp?.data?.message || 'Terjadi kesalahan saat mengambil data laporan tahunan.';
                notificationAlert('info', 'Pemberitahuan', errorMessage);
                return resp;
            }

            return getDataRest;
        }

        function toggleSubmitButton(isVisible) {
            const submitButton = document.querySelector('#saveStep'); // Tombol "Simpan"
            if (isVisible) {
                submitButton.style.display = 'inline-flex'; // Tampilkan tombol
            } else {
                submitButton.style.display = 'none'; // Sembunyikan tombol
            }
        }

        async function getMonitoringElement() {
            loadingPage(true);
            let getDataRest;

            try {
                getDataRest = await CallAPI(
                    'GET',
                    '/dummy/company/laporanTahunan/get-monitoring-element.json'
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
                const responseData = getDataRest.data;
                const monitoringElementID = responseData.data.id;
                const monitoringElement = responseData.data.monitoring_elements;
                const elementProperties = responseData.data.element_properties;
                const questionSchema = elementProperties.question_schema.properties;
                const uiSchema = elementProperties.ui_schema;

                let numbering = 1;

                // Clear wizard tabs and content containers
                $('#wizardTabs').empty();
                $('#wizardContent').empty();

                let tabNav = '';
                let tabContent = '';

                for (const [elementKey, elementValue] of Object.entries(uiSchema)) {
                    const tabId = `tab-${elementKey}`;
                    tabNav += `
                            <li class="nav-item">
                                <a href="#${tabId}" data-bs-toggle="pill" class="nav-link ${numbering === 1 ? 'active' : ''}" data-index="${numbering - 1}">
                                    <span class="fw-bold f-18"><i class="fa-solid fa-shield me-2"></i>${numbering}. ${questionSchema[elementKey].title}</span>
                                </a>
                            </li>
                            `;

                    let sortableSubElement = [];
                    for (let subElement in uiSchema[elementKey]) {
                        sortableSubElement.push([subElement, uiSchema[elementKey][subElement]]);
                    }
                    sortableSubElement.sort((a, b) => a[1]['ui:order'] - b[1]['ui:order']);

                    let rowIndex = 1;
                    // Replace or update your tab content generation to reflect improved styles
                    tabContent += `
                        <div class="tab-pane fade ${numbering === 1 ? 'show active' : ''}" id="${tabId}">
                            <form id="${tabId}" method="post">
                                <div class="text-center mb-4">
                                    <h3 class="mb-2">${questionSchema[elementKey].title}</h3>
                                    <small style="color: blue">Maksimal ukuran file yang diunggah 5 MB.</small>
                                </div>
                                <div class="table-responsive py-4">
                                    <table class="table table-hover table-bordered mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="text-center" style="width: 5%;">No</th>
                                                <th style="width: 35%; white-space: nowrap;">Uraian</th>
                                                <th style="width: 30%; white-space: nowrap;">Pertanyaan</th>
                                                <th style="width: 30%; white-space: nowrap;">Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>`;

                    sortableSubElement.forEach(function(subElement) {
                        let questionProperties = questionSchema[elementKey]['properties'][subElement[0]];

                        if (questionProperties['items']) {
                            for (let i in questionProperties['items']) {
                                let isAnyChangedButton = '',
                                    itemKey = Object.keys(questionProperties['items'][i])[0],
                                    isMandatory = monitoringElement[elementKey][subElement[0]][i][itemKey][
                                        'isMandatoryValue'
                                    ],
                                    isVisibility = monitoringElement[elementKey][subElement[0]][i][itemKey][
                                        'isVisibilityValue'
                                    ],
                                    reportQuestion = monitoringElement[elementKey][subElement[0]][i][itemKey][
                                        'questionValue'
                                    ] || '';

                                if (isVisibility && !isMandatory) {
                                    isAnyChangedButton = customRadioCheckHTML(
                                        `isAnyChanged-${itemKey}`, {
                                            yesOption: {
                                                label: 'Ya',
                                                id: `changed-${itemKey}`,
                                                value: 'yes'
                                            },
                                            noOption: {
                                                label: 'Tidak',
                                                id: `noChanged-${itemKey}`,
                                                value: 'no'
                                            },
                                        },
                                        'no'
                                    );
                                }

                                let inputProperties = {
                                    id: `${elementKey}_${itemKey}`,
                                    name: `${elementKey}_${itemKey}`,
                                    inputType: subElement[1]['ui:widget']
                                };

                                let answerForm = '';

                                if (isVisibility) {
                                    answerForm = `${generateFormInput(inputProperties, isMandatory)}`;
                                }

                                if (i == 0) {
                                    tabContent += `
                                        <tr>
                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;" rowspan="${questionProperties['items'].length}">${numbering}.${rowIndex}</td>
                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;" rowspan="${questionProperties['items'].length}">${questionSchema[elementKey]['properties'][subElement[0]]['title']}</td>
                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;"><p>${reportQuestion}</p>${isAnyChangedButton}</td>
                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${answerForm}</td>
                                        </tr>`;
                                } else {
                                    tabContent += `
                                        <tr>
                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;"><p>${reportQuestion}</p>${isAnyChangedButton}</td>
                                            <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${answerForm}</td>
                                        </tr>`;
                                }

                                $(document).on('change', `input:radio[name=isAnyChanged-${itemKey}]`,
                                    function() {
                                        let buttonValue = $(this).val();

                                        if (buttonValue === 'yes') {
                                            $(this).parent().parent().next().find(
                                                `#${elementKey}_${itemKey}File`).removeClass('d-none');
                                            $(this).parent().parent().next().find('.filepond--browser')
                                                .each(function() {
                                                    $(this).prop('required', true);
                                                });
                                        } else {
                                            $(this).parent().parent().next().find(
                                                `#${elementKey}_${itemKey}File`).addClass('d-none');
                                            $(this).parent().parent().next().find('.filepond--browser')
                                                .each(function() {
                                                    $(this).prop('required', false);
                                                });
                                        }
                                    });
                            }
                        } else {
                            let isAnyChangedButton = '',
                                isMandatory = monitoringElement[elementKey][subElement[0]]['isMandatoryValue'],
                                isVisibility = monitoringElement[elementKey][subElement[0]][
                                    'isVisibilityValue'
                                ],
                                reportQuestion = monitoringElement[elementKey][subElement[0]][
                                    'questionValue'
                                ] || '';


                            if (isVisibility && !isMandatory) {
                                isAnyChangedButton = customRadioCheckHTML(
                                    `isAnyChanged-${subElement[0]}`, {
                                        yesOption: {
                                            label: 'Ya',
                                            id: `changed-${subElement[0]}`,
                                            value: 'yes'
                                        },
                                        noOption: {
                                            label: 'Tidak',
                                            id: `noChanged-${subElement[0]}`,
                                            value: 'no'
                                        },
                                    },
                                    'no'
                                );
                            }

                            let inputProperties = {
                                id: `${elementKey}_${subElement[0]}`,
                                name: `${elementKey}_${subElement[0]}`,
                                inputType: subElement[1]['ui:widget']
                            };

                            let answerForm = '';

                            if (isVisibility) {
                                answerForm = `${generateFormInput(inputProperties, isMandatory)}`;
                            }

                            tabContent += `
                                <tr>
                                    <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${numbering}.${rowIndex}</td>
                                    <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${questionSchema[elementKey]['properties'][subElement[0]]['title']}</td>
                                    <td style="word-wrap: break-word; white-space: normal; max-width: 300px;"><p>${reportQuestion}</p>${isAnyChangedButton}</td>
                                    <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${answerForm}</td>
                                </tr>`;

                            $(document).on('change', `input:radio[name=isAnyChanged-${subElement[0]}]`,
                                function() {
                                    let buttonValue = $(this).val();

                                    if (buttonValue === 'yes') {
                                        $(this).parent().parent().next().find(
                                            `#${elementKey}_${subElement[0]}File`).removeClass('d-none');
                                        $(this).parent().parent().next().find('.filepond--browser').each(
                                            function() {
                                                $(this).prop('required', true);
                                            });
                                    } else {
                                        $(this).parent().parent().next().find(
                                            `#${elementKey}_${subElement[0]}File`).addClass('d-none');
                                        $(this).parent().parent().next().find('.filepond--browser').each(
                                            function() {
                                                $(this).prop('required', false);
                                            });
                                    }
                                });
                        }

                        rowIndex++;
                    });

                    tabContent += `
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>`;

                    numbering++;
                }

                $('#wizardTabs').html(tabNav);
                $('#wizardContent').html(tabContent);

                // Tab Navigation Logic
                let currentTab = 0;

                $('#wizardTabs .nav-link').click(function() {
                    const index = $(this).data('index');
                    currentTab = index;
                    updateTabContent();
                });

                // Update Tab Content Based on Current Tab
                function updateTabContent() {
                    $('#wizardTabs .nav-link').removeClass('active');
                    $('#wizardContent .tab-pane').removeClass('show active');

                    $(`#wizardTabs .nav-link[data-index="${currentTab}"]`).addClass('active');
                    $(`#wizardContent .tab-pane:eq(${currentTab})`).addClass('show active');

                    // Update Buttons for Last Tab
                    if (currentTab === $('#wizardTabs .nav-link').length - 1) {
                        $('#saveStep').show();
                        $('#nextStep').hide();
                    } else {
                        $('#saveStep').hide();
                        $('#nextStep').show();
                    }
                }

                // Previous and Next Buttons
                $('#previousStep').click(function() {
                    if (currentTab > 0) {
                        currentTab--;
                        updateTabContent();
                    }
                });

                $('#nextStep').click(function() {
                    if (currentTab < $('#wizardTabs .nav-link').length - 1) {
                        currentTab++;
                        updateTabContent();
                    }
                });

                // Save Draft Button
                $('#saveStep').click(function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Pemberitahuan',
                        text: 'Berhasil!',
                        confirmButtonText: 'OK'
                    });
                });

                updateTabContent();

            }
        }

        function sortableSubElementByUiOrder(uiSchema, elementKey) {
            let sortable = []

            for (let a in uiSchema[elementKey]) {
                sortable.push([a, uiSchema[elementKey][a]]);
            }

            sortable.sort(function(a, b) {
                return a[1]['ui:order'] - b[1]['ui:order'];
            });

            return sortable
        }

        function customRadioCheckHTML(inputName, properties, defaultValue = 'yes') {
            let $customRadioButton = `
                    <div class="d-flex gap-2">
                        <input
                            type="radio"
                            class="btn-check"
                            name="${inputName}"
                            value="${properties.yesOption.value}"
                            id="${properties.yesOption.id}"
                            ${defaultValue === 'yes' ? 'checked' : ''}>
                        <label class="btn btn-outline-primary"
                            for="${properties.yesOption.id}"
                            style="width: 100px; text-align: center; padding: 0.5rem 1rem; border-radius: 0.375rem; display: flex; align-items: center; justify-content: center;">
                            ${properties.yesOption.label}
                        </label>

                        <input
                            type="radio"
                            class="btn-check"
                            name="${inputName}"
                            value="${properties.noOption.value}"
                            id="${properties.noOption.id}"
                            ${defaultValue === 'no' ? 'checked' : ''}>
                        <label class="btn btn-outline-warning bg-opacity-50 bg-gradient"
                            for="${properties.noOption.id}"
                            style="width: 100px; text-align: center; padding: 0.5rem 1rem; border-radius: 0.375rem; display: flex; align-items: center; justify-content: center;">
                            ${properties.noOption.label}
                        </label>
                    </div>`;

            return $customRadioButton;
        }

        function generateFormInput(inputProperties, isVisibility = false) {
            let $htmlInput = ''

            switch (inputProperties.inputType) {
                case 'files':
                    $htmlInput += `
                <input type="file"
                    class="filepond form-control smk-element-file ${isVisibility ? '' : 'd-none'}"
                    id="${inputProperties.id}File"
                    accept="application/pdf">
                <input type="hidden"
                    class="answer-element"
                    name="${inputProperties.name}"
                    id="${inputProperties.id}"
                    ${isVisibility ? 'required' : ''}>
                `
                    break;
                case 'file':
                    $htmlInput += `
                <input type="file"
                    class="filepond form-control smk-element-file ${isVisibility ? '' : 'd-none'}"
                    id="${inputProperties.id}File"
                    accept="application/pdf">
                <input type="hidden"
                    class="answer-element"
                    name="${inputProperties.name}"
                    id="${inputProperties.id}"
                    ${isVisibility ? 'required' : ''}>
                `
                    break;
                case 'image':
                    $htmlInput = `
                    <input type="file"
                        class="filepond form-control smk-element-file ${isVisibility ? '' : 'd-none'}"
                        id="${inputProperties.id}File"
                        accept="image/png, image/jpeg"
                        required>
                    <input type="hidden"
                        class="answer-element"
                        name="${inputProperties.name}"
                        id="${inputProperties.id}"
                        required>
                `
                    break;
                default:
                    $htmlInput = `
                    <input type="text ${isVisibility ? '' : 'd-none'}"
                        class="form-control answer-element"
                        id="${inputProperties.id}"
                        name="${inputProperties.name}">
                `
                    break;
            }

            return $htmlInput

        }


        async function initPageLoad() {

            await Promise.all([
                getMonitoringElement(),
                updateTabContent(),
                setReportYear(),
            ])

            // Inisialisasi tombol submit
            $('#submitButton').on('click', async function() {
                await addData(); // Panggil addData saat tombol diklik
            });

            $('.filepond--credits').remove();
        }
    </script>
@endsection
