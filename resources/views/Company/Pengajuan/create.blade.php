@extends('...Company.index', ['title' => 'Form Pengajuan Sertifikat | SMK-PAU'])
@section('asset_css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <script src="{{ asset('assets') }}/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/js/libs/filepond/filepond.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/js/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/js/libs/filepond-plugin-pdf-preview/filepond-plugin-pdf-preview.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-8 col-12">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="col-sm-auto mb-3 mb-sm-0 me-3">
                                            <div class="d-sm-inline-block d-flex align-items-center">
                                                <div
                                                    class="wid-60 hei-60 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-building text-white fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex flex-column flex-sm-row align-items-start">
                                                <h4 class="d-inline-block mb-0 me-2" id="c_name"></h4>
                                                <p class="mb-0"><b> NIB : <span id="c_nib"></span></b></p>
                                            </div>
                                            <div class="help-sm-hidden">
                                                <ul class="list-unstyled mt-0 mb-0 text-muted">
                                                    <li class="d-sm-inline-block d-block mt-1 me-3">
                                                        <i class="fa-solid fa-phone me-1" id="company_phone"></i>
                                                        <span id="c_phone"></span>
                                                    </li>
                                                    <li class="d-sm-inline-block d-block mt-1 me-3">
                                                        <i class="fa-regular fa-envelope me-1" id="company_email"></i>
                                                        <span id="c_email"></span>
                                                    </li>
                                                    <li class="d-sm-inline-block d-block mt-1 me-3">
                                                        <i class="fa-solid fa-location-dot me-1" id="company_address"></i>
                                                        <span id="c_address"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 d-flex">
                            <div class="border rounded p-3 w-100">
                                <h5>Jenis Pelayanan</h5>
                                <div style="max-height: 80px; overflow-y: scroll;">
                                    <ol id="c_serviceType">

                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 d-flex">
                            <div class="border rounded p-3 w-100">
                                <h5>Penanggung Jawab</h5>
                                <p class="mb-0"><i class="fa-solid fa-user me-2"></i><span id="pic_name"></span></p>
                                <p class="mb-0"><i class="fa-solid fa-phone me-2"></i><span id="pic_phone"></span></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 d-flex">
                            <div class="border rounded p-3 w-100">
                                <h5>Informasi Pengguna</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><i class="fa-solid fa-circle-user me-2"></i><span
                                                id="u_name"></span></p>
                                        <p class="mb-0"><i class="fa-solid fa-phone me-2"></i><span id="u_phone"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><i class="fa-solid fa-envelope me-2"></i><span
                                                id="u_email"></span>
                                        </p>
                                        <p class="mb-0"><i class="fa-solid fa-calendar-day me-2"></i><span
                                                id="establish_date"></span></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <form id="fCreate">
                <div class="card">
                    <div class="card-header" style="background-color: #1267b1; margin-bottom: 10px;">
                        <h6 class="card-title mb-0 text-white">Dokumen/Form Yang Harus Dilengkapi</h6>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary btn-primary-download"
                            href="{{ asset('assets/doc/SURAT_PERMOHONAN_PENILAIAN.docx') }}" download>
                            <i class="fas fa-download me-1"></i> Template Surat Permohonan Penilaian
                        </a>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="number_of_application_letter" class="form-label">Nomor
                                        Surat</label>
                                    <input class="form-control" type="text" id="number_of_application_letter"
                                        name="number_of_application_letter" placeholder="Nomor Surat" required />
                                </div>
                                <div class="mb-3">
                                    <label for="date_of_letter" class="form-label">Tanggal Surat</label>
                                    <input type="text" class="form-control flatpickr-input"
                                        placeholder="Tanggal surat" id="date_of_application_letter"
                                        name="date_of_application_letter" required />
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <label class="application_letter_show" for="des-info-description-input">Surat
                                        Permohonan Penilaian</label>
                                    <input type="file" class="filepond filepond-input application_letter mb-0"
                                        id="application_letter_show" accept="application/pdf" required />
                                    <p class="text-muted mb-0">
                                        <small>Maksimal ukuran file 5 MB.</small>
                                    </p>
                                    <input type="hidden" class="filepond application_letter_hide"
                                        name="file_of_application_letter" id="application_letter" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel"
                                aria-labelledby="analytics-tab-1" tabindex="0">
                                <div class="accordion accordion-flush" id="accordionFlushExample">

                                </div>
                                <div class="row justify-content-md-center pe-4 ps-4">
                                    <div class="col-lg-6 col-sm-12 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-gradient my-1"
                                            style="width:100%;" id="submitRequestBtn"><i
                                                class="fas fa-paper-plane me-1"></i>
                                            Kirim pengajuan <i class="ri-arrow-right-s-line align-middle lh-1"></i>
                                        </button>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-xs-12">
                                        <button type="button" onClick="saveAsDraft()" class="btn btn-light my-1"
                                            style=" width:100%;" id="submitDraftRequestBtn"><i
                                                class="fas fa-save me-1"></i>
                                            Simpan sebagai draft <i class="ri-save-3-fill align-middle lh-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets') }}/js/plugins/moment.js"></script>
    <script src="{{ asset('assets') }}/js/libs/filepond/filepond.min.js"></script>
    <script src="{{ asset('assets') }}/js/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js">
    </script>
    <script src="{{ asset('assets') }}/js/libs/filepond-plugin-pdf-preview/filepond-plugin-pdf-preview.min.js"></script>
    <script
        src="{{ asset('assets') }}/js/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js">
    </script>
    <script
        src="{{ asset('assets') }}/js/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js">
    </script>
    <script src="{{ asset('assets') }}/js/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script
        src="{{ asset('assets') }}/js/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js">
    </script>
    <!-- [Page Specific JS] start -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.min.js"></script>
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
                `/dummy/company/sertifikatSMK/create.json`
            ).then(function(response) {
                return response;
            }).catch(function(error) {
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

                let accordionHtml = ``;
                let numbering = 1;

                // Loop through each elementKey in uiSchema
                for (const [elementKey, elementValue] of Object.entries(uiSchema)) {
                    const panelId = `panel-${elementKey}`;
                    accordionHtml += `
                        <div class="accordion-item shadow-sm border-0 mb-4">
                            <h2 class="accordion-header" id="heading-${elementKey}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#${panelId}" aria-expanded="true" aria-controls="${panelId}" style="background: linear-gradient(90deg, #043c84 0%, #4572b8 100%); color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                                    ${numbering}. ${questionSchema[elementKey].title}
                                </button>
                            </h2>
                            <div id="${panelId}" class="accordion-collapse collapse show" aria-labelledby="heading-${elementKey}">
                                <div class="accordion-body">
                                    <div class="table-responsive py-4">
                                        <table class="table table-hover table-bordered mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="text-center" style="width: 5%;">No</th>
                                                    <th style="width: 35%; white-space: nowrap;">Uraian</th>
                                                    <th style="width: 30%; white-space: nowrap;">Dokumen</th>
                                                    <th style="width: 30%; white-space: nowrap;">Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                    `;


                    let sortableSubElement = Object.entries(uiSchema[elementKey])
                        .map(([key, value]) => [key, value])
                        .sort((a, b) => a[1]['ui:order'] - b[1]['ui:order']);

                    let rowIndex = 1;

                    sortableSubElement.forEach(([subKey, subValue]) => {
                        const questionProperties = questionSchema[elementKey]['properties'][subKey];
                        const formInputHtml = generateFormInput(subValue['ui:widget'], elementKey, subKey);

                        accordionHtml += `
                            <tr>
                                <td class="text-center">${numbering}.${rowIndex}</td>
                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${questionProperties['title']}</td>
                                <td style="word-wrap: break-word; white-space: normal; max-width: 180px;">${questionProperties['description'] || 'N/A'}</td>
                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${formInputHtml}</td>
                            </tr>
                        `;
                        rowIndex++;
                    });

                    accordionHtml += `
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    numbering++;
                }


                // Render accordion content to the DOM
                $('#accordionFlushExample').html(accordionHtml);

                mappingCompanyInformation(getDataRest.data.data);
                // Initialize PDF previews
                $('.pdf-preview').each(function() {
                    PDFObject.embed(`${$(this).attr('location')}`, `#${$(this).attr('id')}`, {
                        height: '20em'
                    });
                });

                // Initialize file uploads
                $('.smk-element-file').each(function() {
                    uploadFile($(this).attr('id'), $(this).next().attr('id'));
                });
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

            uploadFile('application_letter_show', 'application_letter')
        }

        function uploadFile(sourceElement, inputTarget, sourceFile = null) {
            const csrfToken = $('meta[name="csrf-token"]').attr('content')
            const initialFile = []

            if (sourceFile) {
                initialFile.push({
                    source: sourceFile
                })
            }

            FilePond.create(
                document.querySelector(`#${sourceElement}`), {
                    files: [],
                    server: {
                        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                            $('#submitRequestBtn').prop('disabled', true)
                            $('#submitDraftRequestBtn').prop('disabled', true)

                            const formData = new FormData()
                            formData.append('file', file, file.name)

                            const request = new XMLHttpRequest()
                            request.open('POST',
                                '{{ env('ESMK_SERVICE_BASE_URL') }}/company/documents/upload-file')
                            request.setRequestHeader('X-CSRF-TOKEN', csrfToken)
                            request.setRequestHeader('Accept', 'application/json')
                            request.setRequestHeader('Authorization', `Bearer ${Cookies.get('auth_token')}`);
                            request.responseType = 'json';

                            request.onload = function() {
                                if (request.status >= 200 && request.status < 300) {
                                    const resp = request.response
                                    load(request.response);

                                    $(`#${inputTarget}`).val(resp.file_url)
                                } else {
                                    error('oh no, Internal Server Error');
                                }

                                $('#submitRequestBtn').prop('disabled', false)
                                $('#submitDraftRequestBtn').prop('disabled', false)
                            };

                            request.send(formData);

                            return {
                                abort: () => {
                                    request.abort();

                                    abort();
                                }
                            }
                        },
                        revert: (uniqueFileId, load, error) => {
                            $(`#${inputTarget}`).val('')

                            error('oh my goodness');

                            load();
                        }
                    },

                    labelIdle: '<span class="filepond--label-action"> Pilih File </span>',
                    maxFiles: 1,
                    required: true,
                    checkValidity: true,
                    maxFileSize: '5MB',
                    labelMaxFileSizeExceeded: 'Ukuran file terlalu besar',
                    labelMaxFileSize: 'Maksimal ukuran file 5MB'
                }
            );
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


        function mappingCompanyInformation(data) {

            let serviceTypes = '';
            data.company.service_types.forEach((serviceType) => {
                serviceTypes += `<li>${serviceType.name}</li>`;
            });

            const fileUrl = data.company.nib_file
            const splitFileURL = fileUrl.split('/')
            const fileName = splitFileURL[splitFileURL.length - 1]
            const fileExtension = fileUrl.substring(fileUrl.lastIndexOf("."))

            let nibPreview = ''
            let imageType = ['.jpeg', '.jpg', '.png']
            if (imageType.includes(fileExtension)) {
                nibPreview = `
                    <img class="img-fluid" src="${fileUrl}"/>
                `
            }

            $('#c_name').text(`${data.company.name} |`)
            $('#c_nib').text(data.company.nib)
            // $('#c_nib_file').append(nibPreview)
            $('#c_address').text(
                `${data.company.address} ${data.company.city.name} ${data.company.province.name}`)
            $('#c_phone').text(data.company.company_phone_number)
            $('#c_email').text(data.company.email)
            $('#c_serviceType').append(serviceTypes)
            $('#pic_name').text(data.company.pic_name)
            $('#pic_phone').text(data.company.pic_phone)
            $('#u_name').text(data.company.username)
            $('#u_email').text(data.company.name)
            $('#u_phone').text(data.company.phone_number)
            $('#current_preview').text(data.company.id)
            $('#establish_date').text(data.company.establish ? moment(data.data.company.establish).format(
                'D/MM/YYYY') : '-')
            $('#request_date').text(moment(data.company.request_date).format('D/MM/YYYY'))
        }


        async function initPageLoad() {
            FilePond.registerPlugin(
                FilePondPluginFileEncode,
                FilePondPluginImagePreview,
                FilePondPluginPdfPreview,
                FilePondPluginFileValidateSize,
                FilePondPluginFileValidateType
            )
            await Promise.all([
                getListData(),
                inputDate(),
                addData(),
            ])
            $('.filepond--credits').remove()
        }
    </script>
@endsection
