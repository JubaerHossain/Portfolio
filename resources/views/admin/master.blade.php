<!DOCTYPE html>

<head lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
@include('admin.Include.head')
    @yield('css')
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
@include('admin.Include.header')
<div class="clearfix"> </div>
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
@include('admin.Include.sidebar')
@yield('content')
@include('admin.Include.quicksidebar')
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('admin.Include.footer')

<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="{{ asset('/back') }}/assets/global/plugins/respond.min.js"></script>
<script src="{{ asset('/back') }}/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
@include('admin.Include.Script')
<!-- END THEME LAYOUT SCRIPTS -->
@yield('js')
</body>

</html>
