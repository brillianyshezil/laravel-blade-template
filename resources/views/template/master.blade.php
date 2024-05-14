<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Employee Dashboard </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('dmin/dist/assets/css/my-task.style.min.css') }}">
</head>
<body>

<div id="mytask-layout" class="theme-indigo">
    
    <!-- sidebar -->
    @include('template.components.sidebar')

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        @include('template.components.navbar')

        <!-- Body: Body -->
        @yield('content')

        
        
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{ asset('dmin/dist/assets/bundles/libscripts.bundle.js') }}"></script>

<!-- Plugin Js-->
<script src="{{ asset('dmin/dist/assets/bundles/apexcharts.bundle.js') }}"></script>

<!-- Jquery Page Js -->
<script src="../js/template.js"></script>
<script src="../js/page/hr.js"></script>
</body>
</html> 