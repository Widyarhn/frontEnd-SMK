@extends('.......index', ['title' => 'Tambah Element SMK | Master Data Element'])
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
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/element-smk/list">Master Data Elemen</a></li>
                        <li class="breadcrumb-item" aria-current="page">Tambah Data Element SMK</li>
                    </ul>
                </div>
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h2 class="mb-0">Tambah Data Element SMK</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h5>Element 1</h5>
                    <a class="avtar avtar-s btn-link-secondary remove-element" href="#" data-target="element-1">
                        <i class="fa fa-xmark f-20"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="form-floating mb-0">
                            <input type="kota" class="form-control" id="floatingKota" placeholder="kota" />
                            <label for="floatingInput">Nama Elemen</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating mb-4">
                            <input type="kota" class="form-control" id="floatingKota" placeholder="kota" />
                            <label for="floatingInput">Deskripsi Elemen</label>
                        </div>
                    </div>
                    <div class="card shadow-none border">
                        <div class="card-header p-0 m-0" style="background-color:rgba(109, 109, 109, 0.094)">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 mx-3">
                                    <h6 class="mb-0">Sub Elemen 1</h6>
                                </div>
                                <div class="flex-shrink-0">
                                    <a class="avtar avtar-s btn-link-secondary remove-sub-element" href="#">
                                        <i class="fa fa-xmark f-20"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label">Nama Sub Elemen:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter full name" />
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label">Tipe Sub Elemen:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter email" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label">Deskripsi:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter full name" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label">Bobot Maksimal</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Enter Passing Year" />
                                    </div>
                                </div>

                                <div class="text-end mt-5">
                                    <button type="button" class="btn btn-sm btn-outline-primary btn-add"
                                        id="add-sub-element">Tambah Sub Element</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <form id="form-data" class="mt-3">
        <div class="card-body">
            <button type="button" class="btn btn-primary btn-add" id="add-element">Tambah Element</button>
            <button type="submit" class="btn btn-success" id="submit-button">Submit</button>
        </div>
    </form>
@endsection
@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="https://ableproadmin.com/assets/js/plugins/apexcharts.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>
    <script src="https://ableproadmin.com/assets/js/pages/invoice-list.js"></script>
    <script>
        let elementCounter = 1;
        let subElementCounter = {};
    
        // Add main element
        document.getElementById("add-element").addEventListener("click", () => {
            const elementId = `element-${elementCounter}`;
            subElementCounter[elementId] = 1;
    
            const elementTemplate = `
            <div class="row mb-3" id="${elementId}">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Element ${elementCounter}</h5>
                            <a class="avtar avtar-s btn-link-secondary remove-element" href="#" data-target="${elementId}">
                                <i class="fa fa-xmark f-20"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-floating mb-0">
                                    <input type="text" class="form-control element-input" placeholder="Nama Elemen" />
                                    <label>Nama Elemen</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control element-input" placeholder="Deskripsi Elemen" />
                                    <label>Deskripsi Elemen</label>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-add-sub" data-target="${elementId}">
                                Tambah Sub Element
                            </button>
                        </div>
                    </div>
                </div>
            </div>`;
    
            const newElement = document.createElement("div");
            newElement.innerHTML = elementTemplate;
            document.getElementById("form-data").insertBefore(newElement, document.getElementById("add-element").parentElement);
    
            elementCounter++;
            checkSubmitButtonStatus();
        });
    
        // Add or remove elements and sub-elements dynamically
        document.addEventListener("click", (e) => {
            // Remove main element
            if (e.target.closest(".remove-element")) {
                const targetId = e.target.closest(".remove-element").getAttribute("data-target");
                document.getElementById(targetId).remove();
                checkSubmitButtonStatus();
            }
    
            // Add sub-element
            if (e.target.closest(".btn-add-sub")) {
                const elementId = e.target.getAttribute("data-target");
                const subCounter = subElementCounter[elementId] || 1;
    
                const subElementTemplate = `
                <div class="card shadow-none border mb-3" id="${elementId}-sub-${subCounter}">
                    <div class="card-header p-0 m-0" style="background-color:rgba(109, 109, 109, 0.094)">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 mx-3">
                                <h6 class="mb-0">Sub Element ${subCounter}</h6>
                            </div>
                            <div class="flex-shrink-0">
                                <a class="avtar avtar-s btn-link-secondary remove-sub-element" href="#" data-target="${elementId}-sub-${subCounter}">
                                    <i class="fa fa-xmark f-20"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Nama Sub Elemen:</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control sub-element-input" placeholder="Masukkan Nama Sub Elemen" />
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Tipe Sub Elemen:</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control sub-element-input" placeholder="Masukkan Tipe Sub Elemen" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Deskripsi:</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control sub-element-input" placeholder="Masukkan Deskripsi" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Bobot Maksimal</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control sub-element-input" placeholder="Masukkan Bobot Maksimal" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>`;
                
    
                const subElementContainer = document.createElement("div");
                subElementContainer.innerHTML = subElementTemplate;
    
                const parentCardBody = e.target.closest(".card-body");
    
                // Append sub-element template to the card body
                parentCardBody.appendChild(subElementContainer);
    
                // Move the "Tambah Sub Element" button to the bottom
                parentCardBody.appendChild(e.target);
    
                subElementCounter[elementId]++;
                checkSubmitButtonStatus();
            }
    
            // Remove sub-element
            if (e.target.closest(".remove-sub-element")) {
                const targetId = e.target.closest(".remove-sub-element").getAttribute("data-target");
                document.getElementById(targetId).remove();
                checkSubmitButtonStatus();
            }
        });
    
        // Check if all inputs are filled
        function checkSubmitButtonStatus() {
            const allInputs = document.querySelectorAll(".element-input, .sub-element-input");
            const allFilled = Array.from(allInputs).every(input => input.value.trim() !== "");
            document.getElementById("submit-button").style.display = allFilled ? "inline-block" : "none";
        }
    
        // Add event listener to check inputs on input change
        document.addEventListener("input", (e) => {
            if (e.target.matches(".element-input, .sub-element-input")) {
                checkSubmitButtonStatus();
            }
        });
    
        // Hide submit button initially
        document.getElementById("submit-button").style.display = "none";
    </script>
    
@endsection

{{-- <script>
        // Menambahkan elemen utama
        const addElementButton = document.getElementById("add-element");
        const formContainer = document.getElementById("form-data");

        let elementCounter = 1;
        let subElementCounter = {};

        addElementButton.addEventListener("click", () => {
            const elementId = `element-${elementCounter}`;
            subElementCounter[elementId] = 1;

            const elementTemplate = `
            <div class="row mb-3" id="${elementId}">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Element ${elementCounter}</h5>
                            <a class="avtar avtar-s btn-link-secondary remove-element" href="#" data-target="${elementId}">
                                <i class="fa fa-xmark f-20"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-floating mb-0">
                                    <input type="text" class="form-control" placeholder="Nama Elemen" />
                                    <label for="floatingInput">Nama Elemen</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" placeholder="Deskripsi Elemen" />
                                    <label for="floatingInput">Deskripsi Elemen</label>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-add-sub" data-target="${elementId}">Tambah Sub Element</button>
                        </div>
                    </div>
                </div>
            </div>`;

            const newElement = document.createElement("div");
            newElement.innerHTML = elementTemplate;
            formContainer.insertBefore(newElement, addElementButton.parentElement);

            elementCounter++;
        });

        // Menghapus elemen utama atau sub-elemen
        document.addEventListener("click", (e) => {
            if (e.target.closest(".remove-element")) {
                const targetId = e.target.closest(".remove-element").getAttribute("data-target");
                document.getElementById(targetId).remove();
            }

            if (e.target.closest(".btn-add-sub")) {
                const elementId = e.target.getAttribute("data-target");
                const subCounter = subElementCounter[elementId] || 1;

                const subElementTemplate = `
                <div class="card shadow-none border mb-3" id="${elementId}-sub-${subCounter}">
                    <div class="card-header p-0 m-0" style="background-color:rgba(109, 109, 109, 0.094)">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 mx-3">
                                <h6 class="mb-0">Sub Elemen ${subCounter}</h6>
                            </div>
                            <div class="flex-shrink-0">
                                <a class="avtar avtar-s btn-link-secondary remove-sub-element" href="#" data-target="${elementId}-sub-${subCounter}">
                                    <i class="fa fa-xmark f-20"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Nama Sub Elemen:</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Nama Sub Elemen" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Tipe Sub Elemen:</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Tipe Sub Elemen" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-4 col-form-label">Deskripsi:</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Deskripsi Sub Elemen" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>`;

                const subElementContainer = document.createElement("div");
                subElementContainer.innerHTML = subElementTemplate;
                e.target.closest(".card-body").appendChild(subElementContainer);

                subElementCounter[elementId]++;
            }
            document.addEventListener("click", (e) => {
                // Menghapus elemen utama
                if (e.target.closest(".remove-element")) {
                    const targetId = e.target.closest(".remove-element").getAttribute("data-target");
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.remove();
                    }
                }

                // Menghapus sub-elemen
                if (e.target.closest(".remove-sub-element")) {
                    const targetId = e.target.closest(".remove-sub-element").getAttribute("data-target");
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.remove();
                    }
                }
            });
        });
    </script> --}}
{{-- @endsection --}}
