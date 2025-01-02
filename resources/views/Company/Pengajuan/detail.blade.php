@extends('...Company.index', ['title' => 'Detail Pengajuan'])
@section('asset_css')
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <script src="{{ asset('assets') }}/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <style>
        .table th.sticky-end,
        .table td.sticky-end {
            position: sticky;
            right: 0;
            background-color: #fff;
            /* Warna background agar cocok */
            z-index: 1;
            /* Prioritaskan di atas elemen lain */
            border-left: 1px solid #dee2e6;
            /* Tambahkan garis batas */
        }

        .accordion-button {
            color: white !important;
        }

        .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1);
        }

        #back-to-top {
            position: fixed;
            /* Agar melayang */
            bottom: 30px;
            /* Jarak dari bawah */
            right: 30px;
            /* Jarak dari kanan */
            display: none;
            /* Awalnya tersembunyi */
            z-index: 1000;
            /* Di atas elemen lainnya */
            width: 50px;
            /* Ukuran tombol */
            height: 50px;
            border-radius: 50%;
            /* Bentuk bulat */
            background: linear-gradient(45deg, #4154ff, #752bff);
            /* Gradien warna */
            color: white;
            /* Warna teks/ikon */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            /* Shadow lembut */
            border: none;
            /* Hilangkan border */
            outline: none;
            transition: transform 0.3s ease, opacity 0.3s ease;
            /* Animasi halus */
            opacity: 0;
            /* Awalnya transparan */
            cursor: pointer;
            /* Tampilkan ikon pointer */
            display: flex;
            /* Flexbox untuk mengatur posisi konten */
            justify-content: center;
            /* Posisi horizontal di tengah */
            align-items: center;
            /* Posisi vertikal di tengah */
        }

        #back-to-top.show {
            display: flex;
            /* Tetap gunakan flex */
            opacity: 1;
            /* Transparansi penuh */
            transform: scale(1);
            /* Ukuran normal */
        }

        #back-to-top:hover {
            transform: scale(1.1);
            /* Sedikit membesar saat hover */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.3);
            /* Pertegas bayangan */
        }

        #back-to-top i {
            font-size: 20px;
            /* Ukuran ikon */
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
                        <li class="breadcrumb-item" aria-current="page">Detail Pengajuan Sertifikat</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Detail Pengajuan Sertifikat</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-center align-items-center text-center">
                    <div>
                        <div class="avtar bg-light-primary mx-auto mb-3">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <p class="mb-1">Total Dokumen Penilaian</p>
                        <div class="d-flex align-items-start justify-content-center">
                            <h4 class="mb-0 me-2" id="total-document">10</h4>
                            <span class="fw-bold f-16">Dokumen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-center align-items-center text-center">
                    <div>
                        <div class="avtar bg-light-success mx-auto mb-3">
                            <i class="fa-solid fa-file-circle-check"></i>
                        </div>
                        <p class="mb-1">Lulus Penilaian</p>
                        <div class="d-flex align-items-start justify-content-center">
                            <h4 class="mb-0 me-2" id="passed-document">4</h4>
                            <span class="fw-bold f-16">Lulus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-center align-items-center text-center">
                    <div>
                        <div class="avtar bg-light-danger mx-auto mb-3">
                            <i class="fa-solid fa-file-circle-exclamation"></i>
                        </div>
                        <p class="mb-1">Tidak Lulus Penilaian</p>
                        <div class="d-flex align-items-start justify-content-center">
                            <h4 class="mb-0 me-2" id="not-passed-document">3</h4>
                            <span class="fw-bold f-16">Tidak Lulus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-center align-items-center text-center">
                    <div>
                        <div class="avtar bg-light-primary mx-auto mb-3">
                            <i class="fa-solid fa-percent"></i>
                        </div>
                        <p class="mb-1">Presentase Penilaian Lulus</p>
                        <div class="d-flex align-items-start justify-content-center">
                            <h4 class="mb-0 me-2" id="percentage-passed">12%</h4>
                            <span class="fw-bold f-16"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <!-- Kolom Surat Permohonan -->
        <div class="col-12 col-md-8">
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Surat Permohonan</h5>
                    <button class="btn btn-secondary btn-sm" title="Log Aktivitas" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter" onclick="loadHistoryModal()">
                        <i class="fa-solid fa-clock me-2"></i>Log
                    </button>
                </div>
                <div id="applicationLetterSection"></div>
            </div>
        </div>

        <!-- Kolom Detail Pengajuan Sertifikat -->
        <div class="col-12 col-md-4">
            <div class="card mt-4">
                <div class="card-header">
                    <h5>Detail Pengajuan Sertifikat</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2 fw-bold">Jenis Pelayanan :</label>
                            <div class="media-body" id="serviceTypes">

                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2 fw-bold">Jadwal Verifikasi <span id="tipe-verifikasi">-</span> :</label>
                            <div class="media-body">
                                <p class="mb-0"><i class="fa-solid fa-calendar-days me-2"></i><label class="mb-0"
                                        id="jadwal-verifikasi-lapangan"></label></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="templateTable" class="accordion"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="exampleModalCenter" class="modal fade" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Log Aktivitas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="task-card p-3" style="max-height: 300px; overflow-y: auto;">
                        <!-- Tempat menampilkan log -->
                        <ul class="list-unstyled task-list"></ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-danger btn-icon btnScrollToTop" id="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
@endsection
@section('scripts')
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simple-datatables.js"></script>
    <script src="../assets/js/plugins/datepicker-full.min.js"></script>
    <script src="../assets/js/pages/ac-datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('page_js')
    <script>
        async function getListData() {
            loadingPage(true);
            let getDataRest;
            try {
                getDataRest = await CallAPI(
                    'GET',
                    '/dummy/company/sertifikatSMK/detail.json'
                    // `{{ env('ESMK_SERVICE_BASE_URL') }}/company/documents/submission/detail`, {
                    //     id: referenceId
                    // }
                );
            } catch (error) {
                loadingPage(false);
                let resp = error.response;
                errorMessage = resp.data.message;
                notificationAlert('info', 'Pemberitahuan', errorMessage);
                getDataRest = resp;
            }

            loadingPage(false);
            if (getDataRest.status == 200) {
                let response = getDataRest.data;
                smkElements = response.data.element_properties;
                assessmentSchema = response.data.assessments;
                prevAnswerSchema = response.data.answers;
                currentStatus = response.data.request_status;

                let colSpanTitle = 3;
                let isNeedSubmitButton = false;
                let isNeedDraftButton = false;

                let applicationLetterData = {
                    'numberOfApplicationLetter': response.data.number_of_application_letter,
                    'dateOfApplicationLetter': response.data.date_of_application_letter,
                    'fileOfApplicationLetter': response.data.file_of_application_letter
                };

                buildApplicationLetterSection(response.data.request_status, applicationLetterData);

                if (['draft', 'rejected'].includes(response.data.request_status)) {
                    let isRequiredApplicationLetter = response.data.file_of_application_letter === null;
                    uploadFile('application_letter_show', 'application_letter', isRequiredApplicationLetter);
                    $('#table-acceptance').find('.column-upload').show();

                    new flatpickr("#date_of_application_letter", {
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
                }

                let numbering = 1;
                for (const [elementKey, elementValue] of Object.entries(response.data.element_properties.ui_schema)) {
                    let sortableSubElement = sortableSubElementByUiOrder(response.data.element_properties.ui_schema,
                        elementKey);
                    let rowIndex = 1;
                    let elementId = `element-${numbering}`;
                    let rowsHtml = '';

                    let accordionHeader = generateRowOfElementTitle(
                        colSpanTitle,
                        response.data.element_properties.question_schema.properties[elementKey]['title'],
                        elementId,
                        rowsHtml,
                    );

                    sortableSubElement.forEach(function(subElement) {
                        let answerColumn = '',
                            assessmentColumn = '',
                            formInputColumn = '';
                        let rowClassName = '',
                            styleName = '';
                        let questionProperties = response.data.element_properties.question_schema.properties[
                            elementKey]['properties'][subElement[0]];
                        let questionPropertiesItems = questionProperties['items'];
                        let isNoAnswer = false; // Flag untuk mendeteksi jawaban kosong

                        if (response.data.answers) {
                            if (questionPropertiesItems) {
                                answerColumn +=
                                    `<td class="text-start align-top" style="word-wrap: break-word; white-space: normal; max-width: 300px;">`;
                                for (let i in questionPropertiesItems) {
                                    if (response.data.answers[elementKey][subElement[0]][i][Object.keys(
                                            questionPropertiesItems[i])] === null) {
                                        isNoAnswer = true; // Tandai tidak ada jawaban
                                        answerColumn += `
                                            <div class="mb-5">
                                                    <span class="form-label">File ${Object.values(questionPropertiesItems[i])[0]['name']}</span>
                                                    <span class="badge badge-dim bg-outline-warning text-dark">Belum ada jawaban</span>
                                                </div>
                                                `;
                                    } else {
                                        answerColumn += `
                                            <div class="mb-5">
                                                <span class="form-label">File ${Object.values(questionPropertiesItems[i])[0]['name']}</span>
                                                <p><a class="link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover" href="javascript:;" onClick="showViewDocument('${response.data.answers[elementKey][subElement[0]][i][Object.keys(questionPropertiesItems[i])]}')">
                                                    Lihat Dokumen
                                                </a></p>
                                            </div>`;
                                    }
                                }
                                answerColumn += '</td>';
                            } else {
                                if (response.data.answers[elementKey][subElement[0]] === null) {
                                    isNoAnswer = true; // Tandai tidak ada jawaban
                                    answerColumn += `
                                        <td class=" text-start align-top" style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                            <span class="form-label">File ${questionProperties['attachmentName']}</span>
                                            <span class="badge badge-dim bg-outline-warning text-dark">Belum ada jawaban</span>
                                        </td>`;
                                } else {
                                    answerColumn += `
                                        <td class="text-start align-top" style="word-wrap: break-word; white-space: normal; max-width: 300px;">
                                            <span class="form-label">File ${questionProperties['attachmentName']}</span>
                                            <p><a class="link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover" href="javascript:;" onClick="showViewDocument('${response.data.answers[elementKey][subElement[0]]}')">Lihat Dokumen</a></p>
                                        </td>`;
                                }
                            }
                        }

                        if (response.data.assessments) {
                            rowClassName = response.data.assessments[elementKey][subElement[0]]['reason'] !=
                                null ? "text-dark" : "text-dark";
                            styleName = response.data.assessments[elementKey][subElement[0]]['reason'] != null ?
                                "background: #FFFFB8;" : "";
                            assessmentColumn += `
                                <td style="word-wrap: break-word; white-space: normal; max-width: 300px;"">
                                    <div class="d-flex"><span class="me-5">Point:</span> <h4 class="text-center"> ${assessmentSchema[elementKey][subElement[0]]['value']}</h4></div>
                                    <p class="text-danger">${response.data.assessments[elementKey][subElement[0]]['reason'] ? nl2br(response.data.assessments[elementKey][subElement[0]]['reason']) :  '<span class="text-success">Sesuai</span>'}</p>
                                </td>`;
                        }
                        if (response.data.request_status === '') {
                            formInputHtml = generateFormInput(subElement[1]['ui:widget'], `${elementKey}`,
                                `${subElement[0]}`);
                            formInputColumn =
                                `<td>${formInputHtml}</td>`;
                        }

                        if (['draft', 'rejected'].includes(response.data.request_status)) {
                            let newAnswers = response.data.answers[elementKey][subElement[0]] || null;
                            formInputHtml = generateFormInput(subElement[1]['ui:widget'], `${elementKey}`,
                                `${subElement[0]}`, newAnswers);
                            formInputColumn =
                                `<td>${formInputHtml}</td>`;
                            isNeedDraftButton = true;
                            isNeedSubmitButton = true;
                        }

                        if (response.data.request_status === 'not_passed_assessment') {
                            if (response.data.assessments[elementKey][subElement[0]]['reason']) {
                                formInputHtml = generateFormInput(subElement[1]['ui:widget'], `${elementKey}`,
                                    `${subElement[0]}`);
                                formInputColumn =
                                    `<td>${formInputHtml}</td>`;
                            }
                            isNeedSubmitButton = true;
                        }

                        // Ubah warna baris menjadi merah jika tidak ada jawaban
                        if (isNoAnswer) {
                            rowClassName = 'text-dark'; // Pastikan teks tetap berwarna hitam
                            styleName =
                                'background-color: rgba(255, 107, 107, 0.2);'; // Warna merah dengan transparansi rendah
                        }


                        rowsHtml += `
                            <tr class="${rowClassName}" style="${styleName}; color: black;">
                                    <td class="text-center" style="word-wrap: break-word; white-space: normal; max-width: 300px;">${numbering}.${rowIndex}</td>
                                    <td class="" style="word-wrap: break-word; white-space: normal; max-width: 300px;">${questionProperties['title']}</td>
                                    <td class="" style="word-wrap: break-word; white-space: normal; max-width: 300px;">${questionProperties['description']}</td>
                                    ${answerColumn}
                                    ${assessmentColumn}
                                    ${formInputColumn}
                                </tr>
                                `;
                        rowIndex++;
                    });



                    accordionHeader = generateRowOfElementTitle(
                        colSpanTitle,
                        `${numbering}. ${response.data.element_properties.question_schema.properties[elementKey]['title']}`,
                        elementId,
                        rowsHtml
                    );

                    $('#templateTable').append(accordionHeader);
                    numbering++;
                }

                if (response.data.rejected_note) {
                    let notes = nl2br(response.data.rejected_note)
                    let $templateRejectedNote =
                        `<div class="alert alert-warning alert-label-icon rounded-label fade show" role="alert">
                            <i class="ri-alert-line label-icon"></i>
                            <strong>Pengajuan ditolak</strong> - ${notes}
                        </div>`;

                    $('#rejectedNote').empty().append($templateRejectedNote);
                }

                if (response.data.answers) {
                    $('#datatable thead tr').append(
                        '<th style="width: 15%;"><h6>Jawaban Sebelumnya</h6></th>'
                    );
                    colSpanTitle++;
                }

                if (response.data.assessments) {
                    $('#datatable thead tr').append(
                        '<th style="width: 15%;"><h6>Penilaian</h6></th'
                    );
                    colSpanTitle++;
                }

                if (['draft', 'rejected', 'not_passed_assessment'].includes(response.data.request_status)) {
                    $('#datatable thead tr').append(
                        '<th style="width: 35%;"><h6>Jawaban</h6></th>'
                    );
                    colSpanTitle++;
                }

                if (isNeedDraftButton) {
                    $('#draftButton').show();
                } else {
                    $('#draftButton').hide();
                }

                if (isNeedSubmitButton) {
                    $('#submitButton').show();
                } else {
                    $('#submitButton').hide();
                }

                $('.pdf-preview').each(function() {
                    PDFObject.embed(`${$(this).attr('location')}`, `#${$(this).attr('id')}`, {
                        height: '20em'
                    });
                })

                $('.smk-element-file').each(function() {
                    uploadFile($(this).attr('id'), $(this).next().attr('id'), $(this).next().val() === null)
                })

                buildSubmitButton(isNeedSubmitButton, isNeedDraftButton)

                countAssessment(response.data.answers, response.data.assessments)

                let serviceTypes = response.data.company_info.service_types;
                // Elemen container untuk daftar
                let serviceTypesContainer = document.getElementById("serviceTypes");

                // Loop untuk membuat elemen
                serviceTypes.forEach((service) => {
                    // Buat elemen card
                    let cardDiv = document.createElement("div");
                    cardDiv.className = "col-12 col-md-4";

                    cardDiv.innerHTML = `
                       <ul class="list">
                            <li class="mb-2">
                                <strong>
                                    <a href="#" class="link-secondary">${service.name}</a>
                                </strong>
                                | <span class="badge bg-light text-black">${service.name}</span>
                            </li>
                        </ul>
                    `;

                    // Tambahkan card ke dalam kontainer
                    serviceTypesContainer.appendChild(cardDiv);
                });



                if ([
                        'scheduled_interview',
                        'completed_interview',
                        'verification_director',
                        'certificate_validation'

                    ].includes(currentStatus)) {

                    $('#summary-schedule-interview').removeClass('d-none')

                    let displayType = '-'; // Default jika tidak ada tipe
                    if (response.data?.assessment_interviews?.interview_type === 'offline') {
                        displayType = 'Lapangan';
                    } else if (response.data?.assessment_interviews?.interview_type === 'online') {
                        displayType = 'Daring';
                    }
                    $('#tipe-verifikasi').html(displayType)
                    $('#jadwal-verifikasi-lapangan').html(response.data.assessment_interviews.schedule ?
                        formatTanggalIndo(response.data.assessment_interviews.schedule) : '-')
                }

            }
        }

        async function getRequestHistory() {
            loadingPage(true);
            let response;

            try {
                response = await CallAPI('GET', '/dummy/company/sertifikatSMK/history.json');
            } catch (error) {
                const errorMessage = error?.response?.data?.message || 'Terjadi kesalahan. Mohon coba lagi.';
                Swal.fire({
                        icon: 'info',
                        title: 'Pemberitahuan',
                        text: errorMessage,
                        confirmButtonColor: '#28a745',
                    });
                return null;
            } finally {
                loadingPage(false); // Matikan loading
            }

            // Jika status code 200, kembalikan datanya
            if (response?.data?.status_code === 200) {
                return response.data;
            } else {
                const errorMessage = response?.data?.message || 'Data tidak ditemukan.';
                Swal.fire({
                        icon: 'info',
                        title: 'Pemberitahuan',
                        text: errorMessage,
                        confirmButtonColor: '#28a745',
                    });
                return null;
            }
        }

        // Fungsi untuk menampilkan data ke modal
        async function loadHistoryModal() {
            const historyData = await getRequestHistory(); // Ambil data dari API

            if (!historyData || !historyData.data) return;

            const logContainer = document.querySelector('.task-list');
            logContainer.innerHTML = '';

            historyData.data.forEach((item) => {
                // Format waktu ke format Indonesia
                const formattedDate = new Date(item.created_at).toLocaleString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                });

                // Tentukan warna ikon berdasarkan status
                let iconClass = 'bg-primary'; // Default ikon
                switch (item.status) {
                    case 'passed_assessment_verification':
                        iconClass = 'bg-success';
                        text = 'Lulus Verifikasi Penilaian'
                        break;
                    case 'passed_assessment':
                        iconClass = 'bg-success';
                        text = 'Lulus Pengajuan'
                        break;
                    case 'submission_revision':
                        iconClass = 'bg-warning';
                        text = 'Revisi Pengajuan'
                        break;
                    case 'not_passed_assessment':
                        iconClass = 'bg-danger';
                        text = 'Tidak Lulus Penilaian'
                        break;
                    case 'request':
                        iconClass = 'bg-info';
                        text = 'Pengajuan Baru'
                        break;
                    case 'rejected':
                        iconClass = 'bg-danger';
                        text = 'Ditolak'
                        break;
                }

                logContainer.innerHTML += `
                    <li>
                        <i class="task-icon ${iconClass}"></i>
                        <p class="m-b-5">${formattedDate}</p>
                        <h5 class="text-muted">${text} oleh <span class="text-primary">${item.updated_by}</span></h5>
                    </li>
                `;
            });
        }



        function generateRowOfElementTitle(colSpanTitle, title, elementId, rowsHtml) {
            const html = `
                <div class="accordion-item shadow-sm border-0 mb-4">
                    <h2 class="accordion-header" id="flush-heading${elementId}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse${elementId}" aria-expanded="true" aria-controls="flush-collapse${elementId}"
                            style="background: linear-gradient(90deg, rgb(4, 60, 132) 0%, rgb(69, 114, 184) 100%);
                            color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px;
                            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                            <i class="fa-regular fa-file-lines me-2"></i>
                            <span class="fw-bold me-2 me-lg-0">${title}</span>
                        </button>
                    </h2>
                    <div id="flush-collapse${elementId}" class="accordion-collapse collapse show" aria-labelledby="flush-heading${elementId}">
                        <div class="accordion-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 5%;">No</th>
                                            <th>Uraian Element</th>
                                            <th>Dokumen / Bukti Dukung Jawaban</th>
                                            <th>File Yang Dilampirkan</th>
                                            <th>Penilaian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ${rowsHtml}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            return html;
        }


        function buildApplicationLetterSection(status, applicationLetter = {}) {
            let applicationLetterHtml = `

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2">Nomor Surat :</label>
                            <div class="media-body">
                                <p class="mb-0"><i class="fa-solid fa-file me-1"></i><label
                                        class="mb-0">${applicationLetter?.numberOfApplicationLetter || "-"}</label></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <label class="mb-2">Tanggal Surat :</label>
                            <div class="media-body">
                                <p class="mb-0"><i class="fa-solid fa-calendar me-1"></i><label class="mb-0">
                                     ${applicationLetter.dateOfApplicationLetter ? formatTanggalIndo(applicationLetter.dateOfApplicationLetter) : "-"}
                                </label></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <a href="${applicationLetter?.fileOfApplicationLetter}">
                                    <p class="mb-0"><i class="fa-regular fa-file-pdf me-1"></i><label
                                            class="mb-0">Lihat Dokumen</label></p>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            `;

            if (status === "draft" || status === "rejected") {
                applicationLetterHtml = `
                    <div class="card" id="applicationLetter">
                        <div class="card-header" style="background-color: #f3f6f9">
                            <h6 class="card-title mb-0">Dokumen/Form Yang Harus Dilengkapi</h6>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-primary btn-primary-download" href="{{ asset('assets/doc/SURAT_PERMOHONAN_PENILAIAN.docx') }}" download>
                                <i class="fas fa-download me-1"></i> Template Surat Permohonan Penilaian
                            </a>
                            <hr />
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="number_of_application_letter" class="form-label">Nomor Surat</label>
                                        <input class="form-control" type="text" id="number_of_application_letter" name="number_of_application_letter" placeholder="Nomor Surat" value="${applicationLetter?.numberOfApplicationLetter || ""}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="date_of_application_letter" class="form-label">Tanggal Surat</label>
                                        <input type="text" class="form-control flatpickr-input" placeholder="Tanggal surat" id="date_of_application_letter" name="date_of_application_letter" value="${applicationLetter?.dateOfApplicationLetter || ""}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div>
                                        <label>Surat Permohonan Penilaian</label>
                                        <br>
                                        ${
                                            applicationLetter.fileOfApplicationLetter
                                                ? `<a href="${applicationLetter?.fileOfApplicationLetter}" class="link-secondary text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover d-block mb-3" target="_blank" rel="noopener noreferrer">
                                                                            Lihat dokumen yang dikirim
                                                                        </a>`
                                                : ""
                                        }
                                        <input type="file" class="filepond filepond-input application_letter mb-0" id="application_letter_show" accept="application/pdf" ${applicationLetter.fileOfApplicationLetter ? "" : "required"} />
                                        <p class="text-muted mb-0">
                                            <small>Maksimal ukuran file 5 MB.</small>
                                        </p>
                                        <input type="hidden" class="filepond application_letter_hide" name="file_of_application_letter" id="application_letter" value="${applicationLetter?.fileOfApplicationLetter || ""}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }

            $('#applicationLetterSection').html(applicationLetterHtml);
        }



        function buildSubmitButton(isNeedSubmitButton, isNeedDraftButton) {
            $templateButton = ''

            if (isNeedSubmitButton && isNeedDraftButton) {
                $templateButton = `
                <div class="row justify-content-md-center">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <button type="submit" id="submitRequestBtn" class="btn btn-primary btn-gradient my-1 draft-pengajuan" style="width: 100%;">
                            <i class="fas fa-paper-plane align-middle lh-1 me-1"></i>Kirim Pengajuan
                        </button>
                    </div>
                      <div class="col-lg-6 col-sm-12 col-xs-12">
                        <button type="button"
                            onClick="saveAsDraft()"
                            class="btn btn-light my-1"
                            style="width:100%;">
                                <i class="fas fa-save align-middle lh-1 me-1"></i>Simpan Draft
                        </button>
                    </div>
                </div>`
            }

            if (isNeedSubmitButton && !isNeedDraftButton) {
                $templateButton = `
                <div class="row justify-content-md-center">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <button type="submit" id="submitRequestBtn" class="btn btn-primary btn-gradient my-1 draft-pengajuan" style="width: 100%;">
                            <i class="fas fa-paper-plane align-middle lh-1 me-1"></i>Kirim Pengajuan
                        </button>
                    </div>
                </div>

                `
            }
            $('.actionButton').append($templateButton)
        }

        function countAssessment(answerData, assessmentData) {
            let totalDocument = 0,
                passedDocument = 0,
                notPassedDocument = 0,
                percentagePassed = '0%';

            // Hitung total dokumen
            Object.values(answerData).forEach(elementAnswers => {
                Object.values(elementAnswers).forEach(answers => {
                    totalDocument++;
                });
            });

            // Hitung lulus dan tidak lulus jika ada assessmentData
            if (assessmentData) {
                Object.values(assessmentData).forEach(elementAssessments => {
                    Object.values(elementAssessments).forEach(assessment => {
                        if (assessment.reason) {
                            notPassedDocument++;
                        } else {
                            passedDocument++;
                        }
                    });
                });
            }

            // Hitung persentase lulus
            if (totalDocument > 0) {
                percentagePassed = Math.round((passedDocument / totalDocument) * 100) + '%';
            }

            console.log(document.getElementById('total-document')); // Cek apakah elemen ada

            // Perbarui elemen HTML
            document.getElementById('total-document').textContent = totalDocument;
            document.getElementById('passed-document').textContent = passedDocument;
            document.getElementById('not-passed-document').textContent = notPassedDocument;
            document.getElementById('percentage-passed').textContent = percentagePassed;
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

        async function showViewDocument(loc) {
            // $('.view-document-print').attr(loc);
            // await $('#view-document').modal('show')
            window.open(loc)
        }

        async function showViewDocumentAppLetter() {
            window.open(applicationLetter)
        }

        document.addEventListener("DOMContentLoaded", function() {
            const backToTopButton = document.getElementById("back-to-top");

            window.addEventListener("scroll", function() {
                // Tampilkan tombol jika pengguna menggulir ke bawah lebih dari 100px
                if (window.scrollY > 100) {
                    backToTopButton.classList.add("show");
                } else {
                    backToTopButton.classList.remove("show");
                }
            });

            // Scroll ke atas saat tombol diklik
            backToTopButton.addEventListener("click", function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            });
        });

        // async function addData() {
        //     const $form = document.getElementById('fCreate');
        //     $form.addEventListener("submit", (e) => {

        //         e.preventDefault();

        //         // Check if the current status is "draft" or "rejected"
        //         if (currentStatus === "draft" || currentStatus === "rejected") {
        //             if ($('#application_letter').val() !== '') {
        //                 $('#application_letter').removeAttr('required');
        //             } else {
        //                 $('#application_letter').attr('required', 'required');
        //             }
        //         }

        //         const formParsley = $('#fCreate').parsley();
        //         formParsley.validate();

        //         if (!formParsley.isValid()) return false;

        //         loadingPage(true);

        //         let dataArray = $("#fCreate").serializeArray(),
        //             formObject = {};

        //         // Convert form data array to an object
        //         dataArray.forEach((field) => {
        //             formObject[field.name] = field.value;
        //         });

        //         let answerSchema = buildAnswerSchema();

        //         // Determine next status based on the current status
        //         let nextStatus = 'submission_revision';
        //         if (currentStatus === 'draft' || currentStatus === 'rejected') {
        //             nextStatus = 'request';
        //         }

        //         console.log(nextStatus);

        //         let formData = {
        //             element_properties: smkElements,
        //             answers: answerSchema,
        //             assessments: assessmentSchema,
        //             status: nextStatus,
        //             number_of_application_letter: formObject.number_of_application_letter,
        //             date_of_application_letter: formObject.date_of_application_letter,
        //             file_of_application_letter: formObject.file_of_application_letter,
        //         };

        //         // Submit form data
        //         submitData(formData, 'Berhasil kirim pengajuan');
        //     });
        // }

        async function initPageLoad() {

            document.addEventListener('click', (event) => {
                const target = event.target.closest('.accordion-btn');
                if (target) {
                    const icon = target.querySelector('.accordion-icon');
                    const collapseId = target.getAttribute('href');
                    const collapseElement = document.querySelector(collapseId);

                    if (collapseElement.classList.contains('show')) {
                        // Jika sedang terbuka, ubah ke ikon maximize (fa-plus)
                        icon.classList.remove('fa-minus');
                        icon.classList.add('fa-plus');
                    } else {
                        // Jika sedang tertutup, ubah ke ikon minimize (fa-minus)
                        icon.classList.remove('fa-plus');
                        icon.classList.add('fa-minus');
                    }
                }
            });


            // FilePond.registerPlugin(
            //     FilePondPluginFileEncode,
            //     FilePondPluginImagePreview,
            //     FilePondPluginPdfPreview,
            //     FilePondPluginFileValidateSize,
            //     FilePondPluginFileValidateType
            // )
            await Promise.all([
                getListData(),
                //addData(),
            ])
            $('.filepond--credits').remove()
        }
    </script>
@endsection
