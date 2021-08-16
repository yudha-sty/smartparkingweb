<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To Parking</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ url ('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">

    <!-- Waves Effect Css -->
    <link href="{{ url ('assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ url ('assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ url ('assets/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

      <!-- JQuery DataTable Css -->
      <link href="{{ url ('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- Sweet Alert Css -->
    <link href="{{ url ('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ url ('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ url ('assets/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
     <nav class="navbar">
         @include('layouts/main-header')
     </nav>

     <section>
     <!-- left side bar -->
     <asside id="leftsidebar" class="sidebar">
        @include('layouts/main-sidebar')
     </asside>

     </section>

    <section class="content">
        <div class="container-fluid">
        @yield ('content')
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ url ('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ url ('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ url ('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ url ('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ url ('assets/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ url ('assets/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ url ('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ url ('assets/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ url ('assets/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ url ('assets/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ url ('assets/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ url ('assets/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ url ('assets/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ url ('assets/plugins/flot-charts/jquery.flot.time.js') }}"></script>

      <!-- Jquery DataTable Plugin Js -->
    <script src="{{ url ('assets/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ url ('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url ('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url ('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ url ('assets/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ url ('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ url ('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ url ('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ url ('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ url ('assets/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ url ('assets/js/admin.js') }}"></script>
    <script src="{{ url ('assets/js/pages/index.js') }}"></script>
    <script src="{{ url ('assets/js/pages/forms/form-validation.js') }}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ url ('assets/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ url ('assets/plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ url ('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ url ('assets/js/demo.js') }}"></script>

    <script>
	$(document).ready(function(){
		$('#datatable').DataTable();
	});
</script>
</body>