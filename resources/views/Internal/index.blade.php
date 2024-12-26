<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>{{ $title }}</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
    <meta name="author" content="Phoenixcoded" />

    @yield('asset_css')

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    @include('Internal.layouts.sidebar')
    @include('Internal.layouts.header')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ Main Content ] start -->
            @yield('content')
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    
    @include('Internal.layouts.footer')

    <!-- [Page Specific JS] start -->
    @yield('scripts')
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{asset('assets')}}/js/plugins/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins/simplebar.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/fonts/custom-font.js"></script>
    <script src="{{asset('assets')}}/js/pcoded.js"></script>
    <script src="{{asset('assets')}}/js/plugins/feather.min.js"></script>

    <script>
        layout_change('light');
    </script>

    <script>
        change_box_container('false');
    </script>

    <script>
        layout_caption_change('true');
    </script>

    <script>
        layout_rtl_change('false');
    </script>

    <script>
        preset_change('preset-1');
    </script>

    <script>
        main_layout_change('vertical');
    </script>


</body>
<!-- [Body] end -->

</html>
