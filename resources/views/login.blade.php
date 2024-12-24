<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Login | SMK</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
    <meta name="author" content="Phoenixcoded" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.svg" type="image/x-icon" />
    <!-- [Font] Family -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/phosphor/duotone/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <script src="{{ asset('assets') }}/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
</head>
<style>
.welcome-banner::after {
    opacity: 0.1;
    background-position: bottom;
    background-size: 600%;
    
}
</style>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
        <div class="auth-wrapper v2">
            <div class="auth-sidecontent welcome-banner"
                style="width: 580px; height: 100vh; background: linear-gradient(90deg, rgb(4 60 132) 0%, rgb(69 114 184) 100%); display: flex; justify-content: center; align-items: center; position: relative;">
                <img src="{{ asset('assets') }}/images/logoapp.png" alt="images" style="width: 150px;" />
            </div>

            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="#"><img src="{{ asset('assets') }}/images/logoapp.png" alt="img"
                                    style="width: 60px;" /></a>
                        </div>
                        <h4 class="text-center mt-4">PERIZINAN SMK-PAU</h4>
                        <div class="saprator mb-5">
                            <span>Dinas Perhubungan</span>
                        </div>

                        <div class="mb-3">
                            <div class="form-floating mb-0">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="Email address" />
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password" />
                                <label for="floatingPassword">Kata Sandi</label>
                            </div>
                        </div>
                        <div class="d-flex mt-1 justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input input-primary" type="checkbox" id="customCheckc1"/>
                                <label class="form-check-label text-muted" for="customCheckc1">Ingatkan saya?</label>
                            </div>
                            <h6 class="text-secondary f-w-400 mb-0">
                                <a href="/forgot-password"> Lupa Kata Sandi? </a>
                            </h6>
                        </div>
                        <div class="d-grid mt-5">
                            <a href="/dashboard" type="button" class="btn btn-primary">Masuk</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-end mt-3">
                            <h6 class="f-w-500 mb-0 me-2">Belum punya akun?</h6>
                            <a href="/register" class="link-primary">Daftar Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="{{ asset('assets') }}/js/plugins/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/fonts/custom-font.js"></script>
    <script src="{{ asset('assets') }}/js/pcoded.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/feather.min.js"></script>
</body>

</html>
