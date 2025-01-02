@extends('...Company.index', ['title' => 'Form Pengajuan Sertifikat | SMK-PAU'])
@section('asset_css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/style.css" />
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/flatpickr.min.js" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <script src="{{ asset('assets') }}/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />

    <style>
        .nav-wrapper {
            max-width: 100%;
            overflow-x: auto;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        .nav-wrapper::-webkit-scrollbar {
            height: 6px;
        }

        .nav-wrapper::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 10px;
        }

        .nav-wrapper::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/company/dashboard-company">Home</a></li>
                        <li class="breadcrumb-item"><a href="/company/pengajuan-sertifikat/list">Pengajuan Sertifikat</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Form Pengajuan Sertifikat</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Form Pengajuan Sertifikat</h2>
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
                    <div class="tab-content" id="tabContent">
                        <!-- Konten Dinamis Akan Dimasukkan di Sini -->
                    </div>
                </div>
                <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                    <button type="button" class="btn btn-secondary" id="previousStep"
                        style="margin-right: 10px;">Previous</button>
                    <button type="button" class="btn btn-primary" id="nextStep" style="margin-left: 10px;">Next</button>
                    <button type="button" class="btn btn-success" id="saveStep"
                        style="display: none; margin-left: 10px;">Simpan</button>
                    <button type="button" class="btn btn-warning" id="saveDraft" style="margin-left: 10px;">Simpan
                        Draft</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ asset('assets') }}/js/plugins/wizard.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/flatpickr.min.js"></script>
@endsection

@section('page_js')
    <script>
        let menu = 'Pengajuan Sertifikat';
        let smkElements;
        let answerElement;
        async function getListData(limit = 10, page = 1, ascending = 0, search = '') {
            loadingPage(true);
            const getDataRest = await CallAPI(
                    'GET',
                    '/dummy/company/sertifikatSMK/create.json'
                )
                .then(function(response) {
                    return response;
                })
                .catch(function(error) {
                    loadingPage(false);
                    let resp = error.response;
                    notificationAlert('info', 'Pemberitahuan', resp.data.message);
                    return resp;
                });

            loadingPage(false);

            if (getDataRest.status == 200) {
                smkElements = getDataRest.data.data.element_properties;
                const answerElement = getDataRest.data.data.answers;
                const questionSchema = smkElements.question_schema.properties;
                const uiSchema = smkElements.ui_schema;

                let tabContent = '';
                let tabNav = '';
                let numbering = 1;

                // Hardcoded Tab and Content
                tabNav += `
            <li class="nav-item">
                <a href="#hardcodeTab" data-bs-toggle="pill" class="nav-link active" data-index="0">
                    <span class="fw-bold f-18"><i class="fa-solid fa-file-alt me-2"></i>DOKUMEN PERMOHONAN</span>
                </a>
            </li>`;
                tabContent += `
            <div class="tab-pane show active" id="hardcodeTab">
               <form id="formDocuments" method="get">
                                <div class="text-center">
                                    <h3 class="mb-4">Dokumen/Form Yang Harus Dilengkapi</h3>
                                </div>
                                <div class="row mt-5">
                                    <!-- Jenis Pelayanan -->
                                    <div class="col-12 mb-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example" disabled>
                                                <option selected>AJAP</option>
                                                <option value="1">AJAP</option>
                                            </select>
                                            <label for="floatingSelect">Jenis Pelayanan</label>
                                        </div>
                                    </div>
                                    <!-- Nomor Surat -->
                                    <div class="col-lg-6 col-12 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nomorSurat" placeholder="" />
                                            <label for="nomorSurat">Nomor Surat</label>
                                        </div>
                                    </div>
                                    <!-- Tanggal Surat -->
                                    <div class="col-lg-6 col-12 mb-4">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="tanggalSurat" />
                                            <label for="tanggalSurat">Tanggal Surat</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-4">
                                        <label class="mb-2">Upload Surat Permohonan Penilaian</label>
                                        <div class="mb-3">
                                            <input class="form-control" type="file" />
                                            <small class="text-muted">Maksimal ukuran file 5 MB.</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-4 d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avtar avtar-xs btn-light-primary">
                                                    <a href="path/to/template-surat.pdf"
                                                        download="Template_Surat_Permohonan_Penilaian.pdf"
                                                        title="Download Template">
                                                        <i class="f-16 fa-solid fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0">Unduh Template Surat Permohonan Penilaian</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
            </div>`;

                // Dynamic Tabs and Content
                let currentTabIndex = 1;
                for (const [elementKey, elementValue] of Object.entries(uiSchema)) {
                    let sortableSubElement = sortableSubElementByUiOrder(uiSchema, elementKey);
                    const numberedElementKey = `${numbering}.${elementKey}`;
                    let rowIndex = 1;

                    // Tab Navigation
                    tabNav += `
                <li class="nav-item">
                    <a href="#${numberedElementKey}" data-bs-toggle="pill" class="nav-link" data-index="${currentTabIndex}">
                        <span class="fw-bold f-18"><i class="fa-solid fa-shield me-2"></i>${numbering}. ${questionSchema[elementKey].title}</span>
                    </a>
                </li>`;

                    // Tab Content
                    tabContent += `
                <div class="tab-pane" id="${numberedElementKey}">
                    <form id="${numberedElementKey}" method="post" action="#">
                        <div class="text-center">
                            <h3 class="mb-2">${questionSchema[elementKey].title}</h3>
                            <small style="color: blue">Maksimal ukuran file yang diunggah 5 MB.</small>
                        </div>
                        <div class="table-responsive py-5">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Uraian</th>
                                        <th>Dokumen / Bukti Dukungan Jawaban</th>
                                        <th>Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>`;
                    sortableSubElement.forEach(function(subElement) {
                        let questionProperties = questionSchema[elementKey]['properties'][subElement[0]];
                        let formInputHtml = generateFormInput(
                            subElement[1]['ui:widget'],
                            `${elementKey}`,
                            `${subElement[0]}`
                        );

                        tabContent += `
                    <tr>
                        <td>${numbering}.${rowIndex}</td>
                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${questionProperties['title']}</td>
                        <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${questionProperties['description']}</td>
                        <td>${formInputHtml}</td>
                    </tr>`;
                        rowIndex++;
                    });

                    tabContent += `
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>`;
                    numbering++;
                    currentTabIndex++;
                }

                // Append Tabs and Content to the DOM
                $('#wizardTabs').html(tabNav);
                $('#tabContent').html(tabContent);

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
                    $('#tabContent .tab-pane').removeClass('show active');

                    $(`#wizardTabs .nav-link[data-index="${currentTab}"]`).addClass('active');
                    $(`#tabContent .tab-pane:eq(${currentTab})`).addClass('show active');

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
                

                // Initialize Content
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

        function generateFormInput(inputType, elementName, subElementName) {
            let $htmlInput = '';
            let questionProperties = smkElements['question_schema']['properties'][elementName]['properties'][
                subElementName
            ];
            let previousFiles = answerElement?.[elementName]?.[subElementName] ?? [];
            // Handle 'files' type input (array of files)
            if (inputType === 'files') {
                let items = questionProperties['items'];

                for (let i in items) {
                    let fileKey = Object.keys(items[i])[0];
                    let fileName = items[i][fileKey]['name'];

                    $htmlInput += `
                        <label class="form-label">File ${fileName}</label>
                        ${Array.isArray(previousFiles) ?
                            previousFiles.map(file => `<a href="${file.url || file}" target="_blank">${file.name || 'Download File'}</a><br>`).join('') :
                            ''
                        }
                        <input type="file"
                            class="filepond form-control smk-element-file"
                            id="${fileKey}File"
                            accept="application/pdf">
                        <input type="hidden" class="answer-element" name="${elementName}_${fileKey}" id="${elementName}_${fileKey}" required>
                    `;
                }
            }
            // Handle single 'file' type input
            else if (inputType === 'file') {
                $htmlInput = `
                    <label class="form-label">File ${questionProperties['attachmentName']}</label>
                    ${Array.isArray(previousFiles) ?
                        previousFiles.map(file => `<a href="${file.url || file}" target="_blank">${file.name || 'Download File'}</a><br>`).join('') :
                        `<a href="${previousFiles}" target="_blank">Download File</a>`
                    }
                    <input type="file"
                        class="filepond form-control smk-element-file"
                        id="${subElementName}File"
                        accept="application/pdf">
                    <input type="hidden"
                        class="answer-element"
                        name="${elementName}_${subElementName}"
                        id="${elementName}_${subElementName}"
                        required>
                `;
            }
            // Handle image input type
            else if (inputType === 'image') {
                $htmlInput = `
                    <label class="form-label">File</label>
                    ${Array.isArray(previousFiles) ?
                        previousFiles.map(file => `<img src="${file.url || file}" alt="${file.name || 'Image'}" style="max-width: 100px;"><br>`).join('') :
                        `<img src="${previousFiles}" alt="Image" style="max-width: 100px;"><br>`
                    }
                    <input type="file"
                        class="filepond form-control smk-element-file"
                        id="${subElementName}File"
                        accept="image/png, image/jpeg">
                    <input type="hidden"
                        class="answer-element"
                        name="${elementName}_${subElementName}"
                        id="${elementName}_${subElementName}"
                        required>
                `;
            }
            // Handle text inputs
            else {
                let previousValue = Array.isArray(previousFiles) && previousFiles.length > 0 ? previousFiles[0].name :
                    ''; // default to the first file name if available

                $htmlInput = `
                    <label class="form-label">Inputan</label>
                    <input type="text"
                        class="form-control answer-element"
                        id="${elementName}_${subElementName}Text"
                        name="${elementName}_${subElementName}Text"
                        value="${previousValue}">
                `;
            }

            return $htmlInput;
        }

        function inputDate() {
            flatpickr("#date_of_application_letter", {
                altInput: true,
                dateFormat: "YYYY-MM-DD",
                altFormat: 'DD MMMM YYYY',
                parseDate: (datestr, format) => {
                    return moment(datestr, format, true).toDate();
                },
                formatDate: (date, format, locale) => {
                    return moment(date).format(format);
                },
            });

            //uploadFile('application_letter_show', 'application_letter')
        }


        async function addData() {
            // const form = document.getElementById('fCreate');
            // form.addEventListener("submit", (e) => {
            //     e.preventDefault(); // Mencegah submit default

            //     const formParsley = $('#fCreate').parsley(); // Validasi menggunakan Parsley
            //     formParsley.validate();

            //     if (!formParsley.isValid()) return false; // Berhenti jika validasi gagal

            //     // Ambil data dari form sebagai array dan konversi menjadi objek manual
            //     let dataArray = $("#fCreate").serializeArray(),
            //         formObject = {}; // Gantikan AjaxHelper dengan konversi manual

            //     // Loop melalui dataArray untuk mengubahnya menjadi objek
            //     dataArray.forEach((field) => {
            //         formObject[field.name] = field.value;
            //     });


            //     // Cek apakah field wajib kosong
            //     if (!formObject.number_of_application_letter) {
            //         loadingPage(false);
            //         notificationAlert('info', 'Pemberitahuan', 'Nomor surat permohonan wajib diisi')
            //         return;
            //     }

            //     if (!formObject.date_of_application_letter) {
            //         loadingPage(false);
            //         notificationAlert('info', 'Pemberitahuan', 'Tanggal surat permohonan wajib diisi')
            //         return;
            //     }

            //     if (!formObject.file_of_application_letter) {
            //         loadingPage(false);
            //         notificationAlert('info', 'Pemberitahuan', 'File surat permohonan wajib diisi')
            //         return;
            //     }

            //     // Membangun skema jawaban
            //     let answerSchema = buildAnswerSchema();

            //     // Mengumpulkan semua data form
            //     let formData = {
            //         element_properties: smkElements, // Asumsikan smkElements sudah didefinisikan
            //         answers: answerSchema,
            //         status: 'request',
            //         number_of_application_letter: formObject.number_of_application_letter,
            //         date_of_application_letter: formObject.date_of_application_letter,
            //         file_of_application_letter: formObject.file_of_application_letter,
            //     };

            //     // Kirim data ke server
            //     submitData(formData, 'Berhasil mengirim pengajuan');
            // });
        }
        async function initPageLoad() {
            // FilePond.registerPlugin(
            //     FilePondPluginFileEncode,
            //     FilePondPluginImagePreview,
            //     FilePondPluginPdfPreview,
            //     FilePondPluginFileValidateSize,
            //     FilePondPluginFileValidateType
            // )
            await Promise.all([
                getListData(),
                inputDate(),
                addData(),
            ])
            $('.filepond--credits').remove()
        }
    </script>
@endsection
