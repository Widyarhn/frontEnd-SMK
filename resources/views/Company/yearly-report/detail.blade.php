@extends('...Company.index', ['title' => 'Detail | Data Perusahaan'])
@section('asset_css')
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
        .custom-icon {
            font-size: 30px !important;
        }

        .custom-text {
            text-align: -webkit-left;
        }

        .number-box {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 40px;
            background-color: #6c757d;
            color: white;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            margin-right: 10px;
        }

        .nav-link .fw-bold {
            font-size: 16px;
            font-weight: bold;
        }

        .nav-link.active .number-box {
            background: none;
            font-size: 1.5rem;
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
    </style>
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/company/dashboard-company">Home</a></li>
                        <li class="breadcrumb-item"><a href="/company/yearly-report/list">Laporan Tahunan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail Laporan Tahunan</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Detail Laporan Tahunan</h2>
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
                                                <h4 class="d-inline-block mb-0 me-2">PT TRISTAR JAVA TRANSINDO |</h4>
                                                <p class="mb-0"><b> NIB : 9120109831421</b></p>
                                            </div>
                                            <div class="help-sm-hidden">
                                                <ul class="list-unstyled mt-0 mb-0 text-muted">
                                                    <li class="d-sm-inline-block d-block mt-1 me-3">
                                                        <i class="fa-solid fa-phone me-1"></i>
                                                        +6289 4562 8963
                                                    </li>
                                                    <li class="d-sm-inline-block d-block mt-1 me-3">
                                                        <i class="fa-regular fa-envelope me-1"></i>
                                                        tristarjava@mail.com
                                                    </li>
                                                    <li class="d-sm-inline-block d-block mt-1 me-3">
                                                        <i class="fa-solid fa-location-dot me-1"></i>
                                                        Street 110-B Kalians Bag, Dewan, M.P. New York
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
                                <ol>
                                    <li>AJAP</li>
                                    <li>Angkutan barang umum</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 d-flex">
                            <div class="border rounded p-3 w-100">
                                <h5>Penanggung Jawab</h5>
                                <p class="mb-0"><i class="fa-solid fa-user me-2"></i>Ang Hoey Tiong</p>
                                <p class="mb-0"><i class="fa-solid fa-phone me-2"></i>(970) 982-3353</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 d-flex">
                            <div class="border rounded p-3 w-100">
                                <h5>Sertifikat SMK</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0">No. Sertifikat</p>
                                        <p class="mb-0"><i class="fa-solid fa-file me-2"></i>SK/90012/12/1299/XVI</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0">Tahun Laporan
                                        </p>
                                        <p class="mb-0"><i class="fa-solid fa-calendar-day me-2"></i>2023</p>
                                    </div>
                                </div>

                            </div>
                        </div>
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
                                <div class="accordion accordion-flush" id="accordionFlushExample">

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
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simple-datatables.js"></script>
    <script src="{{ asset('assets') }}/js/pages/invoice-list.js"></script>
    <script src="../assets/js/plugins/datepicker-full.min.js"></script>
    <script src="../assets/js/pages/ac-datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('page_js')
    <script>
        let queryString = window.location.search;
        let urlParams = new URLSearchParams(queryString);
        let referenceId = urlParams.get('id');
        let companyID = urlParams.get('company_id');

        function generateRowOfElementTitle(colSpanTitle, numbering, title) {
            let $templateRow = `
                    <div class="accordion-item shadow-sm border-0 mb-4">
                        <h2 class="accordion-header" id="flush-heading-${numbering}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse-${numbering}" aria-expanded="false" aria-controls="flush-collapse-${numbering}"
                                style="background: linear-gradient(90deg, rgb(4, 60, 132) 0%, rgb(69, 114, 184) 100%);
                                color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px;
                                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                                <i class="fa-regular fa-file-lines me-2"></i>
                                <span class="fw-bold me-2 me-lg-0">${numbering}. ${title}</span>
                            </button>
                        </h2>
                        <div id="flush-collapse-${numbering}" class="accordion-collapse collapse" aria-labelledby="flush-heading-${numbering}">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Uraian</th>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-${numbering}">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>`

            return $templateRow;
        }

        function mappingColumnOfRow(subElementSchema, status, numberColumn) {
            let $rowTable = ''
            if (subElementSchema.inputType === 'files') {
                for (let i in subElementSchema.monitoringProperties) {
                    let itemKey = Object.keys(subElementSchema.monitoringProperties[i])[0]

                    let newAssessment

                    if (typeof subElementSchema.assessments !== 'undefined') {

                        if (subElementSchema.assessments === null) {
                            newAssessment = null
                        } else {
                            newAssessment = subElementSchema.assessments[i][itemKey]
                        }
                    }



                    let newAnswer
                    if (typeof subElementSchema.answers[i][itemKey] !== 'undefined') {
                        newAnswer = subElementSchema.answers[i][itemKey]
                    }

                    let itemSubElementSchema = {
                        elementKey: subElementSchema.elementKey,
                        subElementKey: itemKey,
                        questionProperties: subElementSchema.questionProperties,
                        monitoringProperties: subElementSchema.monitoringProperties[i][itemKey],
                        answers: newAnswer,
                        assessments: newAssessment,
                        inputType: subElementSchema.inputType,
                        lengthOfItems: subElementSchema.monitoringProperties.length
                    }

                    let newNumber = numberColumn

                    if (i != 0) {
                        newNumber = ''
                    }
                    $rowTable += generateRowsTable(
                        itemSubElementSchema,
                        status,
                        newNumber
                    )

                }
            } else {
                $rowTable += generateRowsTable(
                    subElementSchema,
                    status,
                    numberColumn
                )
            }

            return $rowTable

        }

        async function getMonitoringElement() {
            loadingPage(true);
            let getDataRest;

            try {

                const baseUrl = `{{ env('SERVICE_BASE_URL') }}/company/laporan-tahunan/detail`;
                getDataRest = await CallAPI('GET', baseUrl, {
                    id: referenceId,
                    companyID: companyID
                });
            } catch (error) {
                loadingPage(false);
                const errorMessage = error.response?.data?.message || 'Terjadi kesalahan';
                console.error('Error response:', error);
                notificationAlert('info', 'Pemberitahuan', errorMessage);
                return;
            }

            loadingPage(false);

            if (getDataRest?.status === 200) {
                const responseData = getDataRest.data;
                const {
                    monitoring_elements: monitoringElements,
                    element_properties: elementProps,
                    answers,
                    assessments,
                    status
                } = responseData.data;
                const {
                    question_schema: questionSchema,
                    ui_schema: uiSchema
                } = elementProps;


                const mappingStatus = mappingYearlyReportStatus[status]?.status || 'Unknown';
                const spanStatus = `
                    <span class="badge ${mappingYearlyReportStatus[status]?.bgColor || ''} ${mappingYearlyReportStatus[status]?.textColor || ''}">
                        ${mappingStatus}
                    </span>`;

                $('#iReportYear').text(responseData.data.year || '-');
                $('#reportStatus').append(spanStatus);

                let accordionHTML = '';
                let numbering = 1;

                for (const [elementKey, elementValue] of Object.entries(uiSchema || {})) {
                    const sortableSubElement = sortableSubElementByUiOrder(uiSchema, elementKey);
                    const panelId = `panel-${elementKey}`;
                    accordionHTML += `
                        <div class="accordion-item shadow-sm border-0 mb-4">
                            <h2 class="accordion-header" id="heading-${elementKey}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#${panelId}" aria-expanded="true" aria-controls="${panelId}" style="background: linear-gradient(90deg, rgb(4, 60, 132) 0%, rgb(69, 114, 184) 100%); color: white; border-radius: 8px; font-weight: bold; padding: 12px 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                                    ${numbering}. ${questionSchema.properties[elementKey]?.title || 'No Title'}
                                </button>
                            </h2>
                            <div id="${panelId}" class="accordion-collapse show" data-bs-parent="#accordionMonitoring">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Uraian Element</th>
                                                    <th>Pertanyaan</th>
                                                    <th>Jawaban</th>
                                                    ${status === 'not_passed' ? '<th>Status Verifikasi</th><th>Revisi Jawaban</th>' : ''}
                                                </tr>
                                            </thead>
                                            <tbody>`;


                    let rowIndex = 1;
                    (sortableSubElement || []).forEach(subElement => {
                        const subElementSchema = {
                            elementKey,
                            subElementKey: subElement[0],
                            questionProperties: questionSchema.properties[elementKey]?.properties?.[
                                subElement[0]
                            ],
                            monitoringProperties: monitoringElements[elementKey]?.[subElement[0]],
                            answers: answers[elementKey]?.[subElement[0]],
                            assessments: assessments?.[elementKey]?.[subElement[0]] || null,
                            inputType: subElement[1]['ui:widget']
                        };

                        accordionHTML += mappingColumnOfRow(subElementSchema, status,
                            `${numbering}.${rowIndex}`);
                        rowIndex++;
                    });

                    accordionHTML += `</tbody></table></div></div></div>`;
                    numbering++;
                }

                $('#accordionFlushExample').html(accordionHTML);

                $('.pdf-preview').each(function() {
                    PDFObject.embed(`${$(this).attr('location')}`, `#${$(this).attr('id')}`, {
                        height: '20em'
                    });
                });

                $('.smk-element-file').each(function() {
                    uploadFile($(this).attr('id'), $(this).next().attr('id'), $(this).next().prop('required'));
                });
            }
        }


        const mappingRequestStatus = {
            'new_request': {
                status: 'Pengajuan',
                message: 'Pengajuan anda sedang diproses',
                bgColor: 'bg-dark-subtle',
                textColor: 'text-body'
            },
            'need_revision': {
                status: 'Penilaian Belum Sesuai',
                message: 'Pengajuan anda membutuhkan perbaikan data',
                bgColor: 'bg-warning-subtle',
                textColor: 'text-warning'
            },
            'revision': {
                status: 'Pengajuan Revisi',
                message: 'Pengajuan revisi anda sedang diproses',
                bgColor: 'bg-secondary-subtle',
                textColor: 'text-secondary'
            },
            'need_validation': {
                status: 'Verifikasi Penilaian',
                message: 'Pengajuan anda sedang diverifikasi oleh ketua tim',
                bgColor: 'bg-info-subtle',
                textColor: 'text-info'
            },
            'need_recheck_assessment': {
                status: 'Tinjau ulang penilaian',
                message: 'Pengajuan anda sedang ditinjau ulang oleh penilai',
                bgColor: 'bg-info-subtle',
                textColor: 'text-warning'
            },
            'need_interview': {
                status: 'Penjadwalan interview',
                message: 'Selamat! pengajuan anda lulus uji dan akan dijadwalkan untuk wawancara',
                bgColor: 'bg-info-subtle',
                textColor: 'text-info'
            },
            'scheduled_interview': {
                status: 'Interview Terjadwal',
                message: 'Interview sudah terjadwal',
                bgColor: 'bg-info',
                textColor: 'text-white'
            },
            'not_pass_interview': {
                status: 'Tidak Lulus interview',
                message: 'Interview anda tidak lulus',
                bgColor: 'bg-danger-subtle',
                textColor: 'text-danger'
            },
            'need_director_verification': {
                status: 'Butuh verifikasi direktur',
                message: 'Interview anda tidak lulus',
                bgColor: 'bg-info',
                textColor: 'text-white'
            },
            'need_signature': {
                status: 'Butuh tanda tangan',
                message: 'Interview anda tidak lulus',
                bgColor: 'bg-info',
                textColor: 'text-white'
            },
            'completed': {
                status: 'Lulus penilaian',
                message: 'Selamat! pengajuan anda lulus uji dan akan dijadwalkan untuk wawancara',
                bgColor: 'bg-success',
                textColor: 'text-white'
            },
            'rejected': {
                status: 'Pengajuan ditolak',
                message: 'Pengajuan anda ditolak!',
                bgColor: 'bg-danger',
                textColor: 'text-white'
            }
        }

        const mappingRequestStatusV2 = {
            'request': {
                status: 'Pengajuan',
                message: 'Berhasil melakukan pengajuan',
                bgColor: 'bg-dark-subtle',
                textColor: 'text-body'
            },
            'disposition': {
                status: 'Disposisi',
                message: 'Pengajuan sudah di disposisi dan akan segera dilakukan penilaian',
                bgColor: 'bg-warning-subtle',
                textColor: 'text-warning'
            },
            'not_passed_assessment': {
                status: 'Tidak lulus penilaian',
                message: 'Pengajuan tidak lulus penilaian dan dibutuhkan perbaikan dokumen',
                bgColor: 'bg-danger-subtle',
                textColor: 'text-danger'
            },
            'submission_revision': {
                status: 'Revisi pengajuan',
                message: 'Perbaikan dokumen pengajuan',
                bgColor: 'bg-dark-subtle',
                textColor: 'text-body'
            },
            'passed_assessment': {
                status: 'Lulus penilaian',
                message: 'Dokumen pengajuan sudah dinilai dan diteruskan untuk verifikasi penilaian',
                bgColor: 'bg-info-subtle',
                textColor: 'text-info'
            },
            'not_passed_assessment_verification': {
                status: 'Penilaian tidak lulus verifikasi',
                message: 'Penilaian tidak valid dan akan akan dilakukan penilaian ulang',
                bgColor: 'bg-danger-subtle',
                textColor: 'text-danger'
            },
            'assessment_revision': {
                status: 'Revisi penilaian',
                message: 'Penilaian ulang oleh penilai',
                bgColor: 'bg-info-subtle',
                textColor: 'text-info'
            },
            'passed_assessment_verification': {
                status: 'Penilaian terverifikasi',
                message: 'Selamat! pengajuan telah terverifikasi dan akan dijadwalkan untuk wawancara',
                bgColor: 'bg-info',
                textColor: 'text-white'
            },
            'scheduling_interview': {
                status: 'Penjadwalan wawancara',
                message: 'Selamat! pengajuan anda lulus uji dan akan dijadwalkan untuk wawancara',
                bgColor: 'bg-info-subtle',
                textColor: 'text-info'
            },
            'scheduled_interview': {
                status: 'Wawancara Terjadwal',
                message: 'Wawancara sudah terjadwal',
                bgColor: 'bg-info',
                textColor: 'text-white'
            },
            'not_passed_interview': {
                status: 'Tidak lulus wawancara',
                message: 'Tidak lulus wawancara',
                bgColor: 'bg-danger-subtle',
                textColor: 'text-danger'
            },
            'completed_interview': {
                status: 'Wawancara selesai',
                message: 'Wawancara telah berhasil',
                bgColor: 'bg-success-subtle',
                textColor: 'text-success'
            },
            'verification_director': {
                status: 'Validasi direktur',
                message: 'Pengajuan telah diverifikasi oleh direktur',
                bgColor: 'bg-success',
                textColor: 'text-white'
            },
            'certificate_validation': {
                status: 'Pengesahan sertifikat',
                message: 'Selamat! sertikat sudah diterbitkan',
                bgColor: 'bg-success',
                textColor: 'text-white'
            },
            'rejected': {
                status: 'Pengajuan ditolak',
                message: 'Pengajuan ditolak!',
                bgColor: 'bg-danger',
                textColor: 'text-white'
            },
            'cancelled': {
                status: 'Pengajuan dibatalkan',
                message: 'Pengajuan dibatalkan!',
                bgColor: 'bg-danger',
                textColor: 'text-white'
            },
            'expired': {
                status: 'Pengajuan Kedaluwarsa',
                message: 'Pengajuan Kedaluwarsa!',
                bgColor: 'bg-danger',
                textColor: 'text-white'
            },
            'draft': {
                status: 'Draft',
                message: 'Draft!',
                bgColor: 'bg-dark-subtle',
                textColor: 'text-body'
            }
        }

        const mappingAssessmentStatus = {
            'new_request': 'Pengajuan baru',
            'not_pass': 'Belum Sesuai',
            'revision': 'Revisi',
            'passed': 'Lulus penilaian',
            'need_validation': 'Verifikasi penilaian',
            'need_recheck_assessment': 'Assessment tidak valid'
        }

        const mappingAssessmentStatusV2 = {
            'draft': 'Draft',
            'request': 'Pengajuan',
            'not_passed_assessment': 'Tidak Lulus Penilaian',
            'submission_revision': 'Perbaikan Dokumen Pengajuan',
            'passed_assessment': 'Lulus Penilaian',
            'not_passed_assessment_verification': 'Tidak Lulus verifikasi Penilaian',
            'assessment_revision': 'Revisi Penilaian',
            'passed_assessment_verification': 'Lulus verifikasi Penilaian',
            'rejected': 'Ditolak',
            'cancelled': 'Dibatalkan',
            'expired': 'Kedaluwarsa'
        }


        const mappingYearlyReportStatus = {
            request: {
                status: 'Pengajuan',
                description: 'Perusahaan melakukan pengajuan laporan tahunan',
                bgColor: 'bg-dark-subtle',
                textColor: 'text-body'
            },
            disposition: {
                status: 'Disposisi',
                description: "Pengajuan sudah di disposisi ke penilai",
                bgColor: 'bg-dark-subtle',
                textColor: 'text-body'
            },
            not_passed: {
                status: 'Laporan belum sesuai',
                description: "Laporan dinilai belum sesuai",
                bgColor: 'bg-warning-subtle',
                textColor: 'text-warning'
            },
            revision: {
                status: 'Revisi laporan',
                description: "Laporan telah dilakukan perbaikan",
                bgColor: 'bg-dark-subtle',
                textColor: 'text-body'
            },
            verified: {
                status: 'Laporan terverifikasi',
                description: "Laporan telah terverifikasi oleh penilai",
                bgColor: 'bg-success',
                textColor: 'text-white'
            },
            cancelled: {
                status: 'Pengajuan dibatalkan',
                message: 'Pengajuan dibatalkan oleh perusahaan',
                bgColor: 'bg-danger',
                textColor: 'text-white'
            }
        }

        const mappingProcessBy = (status, dispositionBy) => {
            let prosessBy = '-'

            if (['request',
                    'revision',
                    'need_recheck_assessment'
                ].includes(status)) {

                if (dispositionBy) {
                    prosessBy = 'Penilai'
                } else {
                    prosessBy = 'Ketua Tim'
                }
            }

            if (['need_revision'].includes(status)) {
                prosessBy = 'Perusahaan'
            }

            if (['need_validation', 'need_interview'].includes(status)) {
                prosessBy = 'Ketua Tim'
            }

            return `<span>${prosessBy}</span>`
        }

        const mappingProcessByV2 = (status, dispositionBy) => {
            let prosessBy = '-'

            let processByCompany = ['not_passed_assessment'],
                processByAssessorHead = [
                    'request',
                    'passed_assessment',
                    'assessment_revision',
                    'passed_assessment_verification',
                    'scheduling_interview',
                    'scheduled_interview'
                ],
                processByAssessor = [
                    'disposition',
                    'submission_revision',
                    'not_passed_assessment_verification'
                ],
                processByDirector = ['completed_interview'],
                processByDirjen = ['verification_director']

            if (processByCompany.includes(status)) {
                prosessBy = 'Perusahaan'
            }

            if (processByAssessorHead.includes(status)) {
                prosessBy = 'Ketua tim'
            }

            if (processByAssessor.includes(status)) {
                prosessBy = 'Penilai'
            }

            if (processByDirector.includes(status)) {
                prosessBy = 'Direktur'
            }

            if (processByDirjen.includes(status)) {
                prosessBy = 'Dirjen'
            }

            if (status === 'certificate_validation') {
                prosessBy = 'Selesai'
            }

            return `<span>${prosessBy}</span>`
        }

        function generateRowsTable(subElementSchema, status, numberOfColumn) {
            let numberColumn = '',
                titleColumn = '',
                questionColumn = subElementSchema.monitoringProperties.questionValue ?
                `<td style="word-wrap: break-word; white-space: normal; max-width: 300px;">${subElementSchema.monitoringProperties.questionValue}</td>` :
                '<td></td>',
                answerColumn, assessmentColumn, formInputColumn

            if (numberOfColumn) {
                numberColumn =
                    `<td ${subElementSchema.lengthOfItems ?  `rowspan=${subElementSchema.lengthOfItems}` : ''}>${numberOfColumn}</td>`
                titleColumn =
                    `<td style="word-wrap: break-word; white-space: normal; max-width: 300px;" ${subElementSchema.lengthOfItems ?  `rowspan=${subElementSchema.lengthOfItems}` : ''}>${subElementSchema.questionProperties['title']}</td>`
            }

            if (subElementSchema.monitoringProperties.isVisibilityValue) {
                answerColumn = subElementSchema.answers !== null ?
                    `<td><button type="button" onClick="showViewDocument('${subElementSchema.answers}')" class="btn btn-light btn-sm">lihat dokumen</button></td>` :
                    '<td>Tidak ada perubahan</td>'

                if (status === 'not_passed') {
                    assessmentColumn = generateAssessmentColumn(subElementSchema.assessments)
                    formInputColumn = generateInputColumn(subElementSchema.assessments, subElementSchema)

                    $(document).on('change', `input:radio[name=isAnyChanged-${subElementSchema.subElementKey}]`,
                        function() {
                            let buttonValue = $(this).val()

                            if (buttonValue === 'yes') {
                                $(this).parent().next().removeClass('d-none')
                                $(this).parent().next().find('.filepond--browser ').each(function() {
                                    $(this).prop('required', true)
                                })
                            } else {
                                $(this).parent().next().addClass('d-none')
                                $(this).parent().next().find('.filepond--browser ').each(function() {
                                    $(this).prop('required', false)
                                })
                            }
                        })
                }
            } else {
                answerColumn = '<td></td>'

                if (status === 'not_passed') {
                    assessmentColumn = '<td></td>'
                    formInputColumn = '<td></td>'
                }
            }

            let $templateRow = `
                <tr>
                    ${numberColumn}
                    ${titleColumn}
                    ${questionColumn}
                    ${answerColumn}
                    ${assessmentColumn ? assessmentColumn : ""}
                    ${formInputColumn ? formInputColumn : ""}
                </tr>
            `

            return $templateRow
        }

        function buildSubmitButton(isNeedSubmitButton) {
            if (isNeedSubmitButton) {
                $('.action-button').empty().append(`
                 <button type="submit" class="btn btn-primary"
                                style="padding: 0.5rem; font-size: 1rem; border-radius: 0.375rem; border: 1px solid #ced4da; width: 100%; text-align: center; line-height: 1.5; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem;">
                                <em class="icon ni ni-save" style="margin-right: 2px;"></em>Simpan
                            </button>
        `)
            }
        }

        function customRadioCheckHTML(inputName, properties, defaultValue = 'yes') {
            let $customRadioButton =
                `<div class="d-flex w-100 align-items-center">
                    <input
                        type="radio"
                        class="btn-check"
                        name="${inputName}"
                        value="${properties.yesOption.value}"
                        id="${properties.yesOption.id}"
                        ${defaultValue === 'yes' ? 'checked' : ''}>
                    <label class="btn btn-outline-primary d-flex justify-content-center align-items-center"
                        for="${properties.yesOption.id}"
                        style="flex: 1; padding: 8px; text-align: center; border-radius: 5px;">${properties.yesOption.label}</label>

                    <input type="radio"
                        class="btn-check"
                        name="${inputName}"
                        value="${properties.noOption.value}"
                        id="${properties.noOption.id}"
                        ${defaultValue === 'no' ? 'checked' : ''}>
                    <label class="btn btn-outline-warning d-flex justify-content-center align-items-center"
                        for="${properties.noOption.id}"
                        style="flex: 1; padding: 8px; text-align: center; border-radius: 5px;">${properties.noOption.label}</label>
                </div>`;

            return $customRadioButton;
        }

        function generateFormInput(propertiesName, inputType, isMandatory = false) {

            let $htmlInput = ''

            switch (inputType) {
                case 'files':
                    $htmlInput += `
            <input type="file"
                class="mt-1 filepond form-control smk-element-file ${isMandatory ? '' : 'd-none'}"
                id="${propertiesName}File"
                accept="application/pdf">
            <input type="hidden"
                class="answer-element"
                name="${propertiesName}"
                id="${propertiesName}"
                ${isMandatory ? 'required' : ''}>
            `
                    break;
                case 'file':
                    $htmlInput += `
            <input type="file"
                class="filepond form-control smk-element-file ${isMandatory ? '' : 'd-none'}"
                id="${propertiesName}File"
                accept="application/pdf">
            <input type="hidden"
                class="answer-element"
                name="${propertiesName}"
                id="${propertiesName}"
                ${isMandatory ? 'required' : ''}>
            `
                    break;
                case 'image':
                    $htmlInput = `
                <input type="file"
                    class="filepond form-control smk-element-file ${isMandatory ? '' : 'd-none'}"
                    id="${propertiesName}File"
                    accept="image/png, image/jpeg"
                    required>
                <input type="hidden"
                    class="answer-element"
                    name="${propertiesName}"
                    id="${propertiesName}"
                    required>
            `
                    break;
                default:
                    $htmlInput = `
                <input type="text ${isMandatory ? '' : 'd-none'}"
                    class="form-control answer-element"
                    id="${propertiesName}"
                    name="${propertiesName}">
            `
                    break;
            }

            return $htmlInput

        }

        function generateAssessmentColumn(assessmentProperties) {

            let assessmentColumn

            if (typeof assessmentProperties === undefined) {
                return
            }

            if (assessmentProperties.assessmentValue === null) {
                assessmentColumn = '<td></td>'

                return assessmentColumn
            }

            if (assessmentProperties.assessmentValue) {
                assessmentColumn = `<td><span class="badge bg-success">Sesuai</span></td>`
            } else {
                assessmentColumn = `<td><span>${nl2br(assessmentProperties.assessmentReason)}</span></td>`
            }

            return assessmentColumn
        }

        function nl2br(str) {
            return str.replace(/(?:\r\n|\r|\n)/g, '<br>');
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

        async function initPageLoad() {
            await getMonitoringElement();
            $('.filepond--credits').remove();
        }
    </script>
    @include('Company.partial-js')
@endsection
