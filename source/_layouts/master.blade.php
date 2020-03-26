<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Congo Tech <https://github.com/max13/corona-cg>">
    <meta name="description" content="Site non officiel d'information sur le Coronavirus et son évolution en République du Congo. L'idée est née d'une initiative citoyenne d'un groupe de jeunes congolais amoureux de la tech.">
    <meta name="language" content="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico"> --}}

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ mix('css/vendor.css', 'assets/build') }}">

    <!-- Modernizr css -->
    <script src="{{ mix('js/modernizr-2.8.3.min.js', 'assets/build') }}"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <title>Coronavirus (Covid19) | Congo Tech</title>
</head>
<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="preloader"></div>

    @include('_layouts.header')

    @yield('body')

    @include('_layouts.footer')

    <!-- Vendor JS -->
    <script src="{{ mix('js/vendor.js', 'assets/build') }}"></script>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

</body>
</html>
