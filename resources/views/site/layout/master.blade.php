<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('/') }}">

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="assets/site/img/logo2.png" rel="icon">
    <link href="assets/site/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="assets/site/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="assets/site/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/site/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="assets/site/css/style.css" rel="stylesheet">


    @yield('css')
    <style>

    </style>

</head>



<!-- JavaScript Libraries -->
<script src="assets/site/lib/jquery/jquery.min.js"></script>
<script src="assets/site/lib/jquery/jquery-migrate.min.js"></script>
<script src="assets/site/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/site/lib/easing/easing.min.js"></script>
<script src="assets/site/lib/wow/wow.min.js"></script>
<script src="assets/site/lib/waypoints/waypoints.min.js"></script>
<script src="assets/site/lib/counterup/counterup.min.js"></script>
<script src="assets/site/lib/superfish/hoverIntent.js"></script>
<script src="assets/site/lib/superfish/superfish.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="assets/site/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="assets/site/js/main.js"></script>
@yield('js')

<body>
</body>

<!-- end::Body -->
</html>
