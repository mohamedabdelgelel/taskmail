<!DOCTYPE html>
@if(app()->getLocale() == "en")
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" direction="rtl" style="direction: rtl;">

@endif

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if(View::hasSection('title'))
            @yield('title') - Task
        @else
         {{--   {{ config('app.name', 'Khdamat Dashboard') }}  ---}}
            Task System

        @endif

    </title>
    <meta name="description" content="Updates and statistics"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--begin::Global Theme Styles(used by all pages)-->
    @if(app()->getLocale() == "en")
        <link href="{{asset('plugins/global/plugins.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/style.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/header/base/light.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/header/menu/light.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/brand/dark.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/aside/dark.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    @else
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet">
        <link href="{{asset('plugins/global/plugins.bundle.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/style.bundle.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/header/base/light.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/header/menu/light.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/brand/dark.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/aside/dark.rtl.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
    @endif

    <!--end::Global Theme Styles-->

    <link rel="shortcut icon" href="/media/logos/biglogofnrco2.png"/>
    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body id="kt_body"
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<div id="app">
    @yield('content')
</div>

<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#6993FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1E9FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
</script>
<script src="{{asset('plugins/global/plugins.bundle.js?v=7.0.6')}}"></script>
<script src="{{asset('plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6')}}"></script>
<script src="{{asset('js/scripts.bundle.js?v=7.0.6')}}"></script>
<script>
    console.log('{{ app()->getLocale() }}')
    window._locale = '{{ app()->getLocale() }}';
    window.trans = <?php
    // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
    $lang_files = File::files(resource_path() . '/lang/' . app()->getLocale());
    $trans = [];
    foreach ($lang_files as $f) {
        $filename = pathinfo($f)['filename'];
        $trans[$filename] = trans($filename);
    }
    echo json_encode($trans);
    ?>;
</script>
<!--begin::Page Vendors(used by this page)-->
<!--end::Page Vendors-->

<!--begin::Page Scripts(used by this page)-->
<!--end::Page Scripts-->
</body>
</html>
