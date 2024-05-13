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
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    </head>
    <body class="bg-login">
        <div class="wrapper">
            {{ $slot }}
        </div>
    
    </body>
        <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    </body>
</html>
