<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url("assetsAdmin/img/favicon.png") }}" rel="icon">
  <link href="{{ url("assetsAdmin/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url("assetsAdmin/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ url("assetsAdmin/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ url("assetsAdmin/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ url("assetsAdmin/vendor/quill/quill.snow.css") }}" rel="stylesheet">
  <link href="{{ url("assetsAdmin/vendor/quill/quill.bubble.css") }}" rel="stylesheet">
  <link href="{{ url("assetsAdmin/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
  <link href="{{ url("assetsAdmin/vendor/simple-datatables/style.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url("assetsAdmin/css/style.css") }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

     @include("adminNew.templates.navbar")
     @include("adminNew.templates.sidebar")
     @yield("container")
     @include("adminNew.templates.footer")

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url("assetsAdmin/vendor/apexcharts/apexcharts.min.js") }}"></script>
    <script src="{{ url("assetsAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ url("assetsAdmin/vendor/chart.js/chart.umd.js") }}"></script>
    <script src="{{ url("assetsAdmin/vendor/echarts/echarts.min.js") }}"></script>
    <script src="{{ url("assetsAdmin/vendor/quill/quill.min.js") }}"></script>
    <script src="{{ url("assetsAdmin/vendor/simple-datatables/simple-datatables.js") }}"></script>
    <script src="{{ url("assetsAdmin/vendor/tinymce/tinymce.min.js") }}"></script>
    <script src="{{ url("assetsAdmin/vendor/php-email-form/validate.js") }}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{ url("assetsAdmin/js/main.js") }}"></script>
  
  </body>
  
  </html>