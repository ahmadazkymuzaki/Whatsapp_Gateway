<!DOCTYPE html>
<html class="semi-dark " lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- 
    
Copyright By Ilman Sunanuddin, M pedia
Email : Ilmansunannudin2@gmail.com 
website : https://m-pedia.co.id
Whatsap : 6282298859671
------------------------------------------------------------------
You are not allowed to share or sell this source code without permission.
--}}
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="expires" content="-1">	
        <meta http-equiv="Access-Control-Allow-Origin" content="*">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="refresh" content="600">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="apple-mobile-web-app-status-bar-style" content="#db0000">
		<meta name="msapplication-navbutton-color" content="@Naufal.ID">
        <meta name="msapplication-TileColor" content="@Naufal.ID">
        <meta name="msapplication-TileImage" content="https://bill.onepay.my.id/assets/images/favicon.png">
        <meta name="csrf-token" content="b412882ff9724447c4a36bfcbb5abc80">
        <meta name="base_url" content="https://wifi.onepay.my.id/">
        <meta name="description" content="Menyediakan layanan internet termurah yang terdiri dari Internet Cepat on Fiber hingga 10Mbps, Camera CCTV dan TV Pintar yang dilengkapi fitur lengkap lainnya.">
        <meta name="author" content="Ahmad Zulkarnain Al Farisi">
        <meta name="keywords" content="internet cepat, Internet Broadband, Internet rumah,  internet keluarga, internet murah, internet stabil, internet unlimited, paket internet, speedtest indihome, tv kabel, tv kabel hd">
        <meta name="robots" content="index, follow">
		<meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#db0000">
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://wifi.onepay.my.id/">
        <meta property="og:description" content="Menyediakan layanan internet termurah yang terdiri dari Internet Cepat on Fiber hingga 10Mbps, Camera CCTV dan TV Pintar yang dilengkapi fitur lengkap lainnya.">
        <meta property="og:image" content="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="icon" type="image/x-icon" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="shortcut icon" type="image/png" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="icon" type="image/png" sizes="64x64" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="icon" type="image/png" sizes="128x128" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="icon" type="image/png" sizes="144x144" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="icon" type="image/png" sizes="160x160" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="icon" type="image/png" sizes="512x512" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="apple-touch-icon" type="image/png" sizes="32x32" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="apple-touch-icon" type="image/png" sizes="64x64" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="apple-touch-icon" type="image/png" sizes="96x96" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="apple-touch-icon" type="image/png" sizes="128x128" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="apple-touch-icon" type="image/png" sizes="160x160" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link rel="apple-touch-icon" type="image/png" sizes="512x512" href="https://bill.onepay.my.id/assets/images/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <style>
            ::-webkit-scrollbar {
                width: 10px;
                height: 10px;
            }
            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }
            ::-webkit-scrollbar-thumb {
                background: #db0000;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #db0000;
            }
        </style>
        {{-- csrf --}}
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>{{ $title }} || @Naufal.ID</title>
        <meta name="title" content="{{ $title }} || @Naufal.ID">
        <meta property="og:title" content="{{ $title }} || @Naufal.ID">
        <link rel="icon" href="https://bill.onepay.my.id/assets/images/favicon.png" type="image/png" />
        <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
        <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/dark-theme.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/light-theme.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/semi-dark.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/header-colors.css') }}" rel="stylesheet" />
    </head>
    <body>
        {{-- <x-sidebar></x-sidebar> --}}
        <div class="wrapper">
            <x-header></x-header>
            <x-aside></x-aside>
            <main class="page-content">
                {{ $slot }}
            </main>
        </div>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
        {{-- <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script> --}}
        <script src="{{ asset('assets/js/pace.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/index.js') }}"></script>
        <script src="{{ asset('assets/plugins/smart-wizard/js/jquery.smartWizard.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="{{ asset('assets/plugins/smart-wizard/css/smart_wizard_all.min.css') }}" rel="stylesheet"type="text/css" />
        {{-- <script>
            new PerfectScrollbar(".review-list")
            new PerfectScrollbar(".chat-talk")
        </script> --}}

        <script>
            toastr.options = {
                closeButton: false,
                debug: false,
                newestOnTop: false,
                progressBar: false,
                positionClass: "toast-top-right",
                preventDuplicates: false,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "5000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            };
        </script>
    </body>

</html>
        {{-- <script src="{{asset('plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('plugins/pace/pace.min.js')}}"></script>
        <script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
        <script src="{{asset('plugins/blockUI/jquery.blockUI.min.js')}}"></script>
        <script src="{{asset('js/main.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/pages/blockui.js')}}"></script>
    </body>

</html> --}}
