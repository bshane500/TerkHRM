<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TerkHRM | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    {{--Main CSS--}}

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <script src="{{asset('js/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('js/jQueryUi/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('vendor.AdminLTE.partials.header')
@include('vendor.AdminLTE.partials.aside')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @include('partials.errors')
            @include('partials.status')
            <h1>
                @yield('page-header')
                <small>@yield('sub-header')</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            TerkHRM
            <!-- To the right -->
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{date('Y')}} <a href="#">TerkTrendz Inc</a>.</strong> All rights
        reserved.
    </footer>

    @include('vendor.AdminLTE.partials.control_side_bar')
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>

</body>
</html>
