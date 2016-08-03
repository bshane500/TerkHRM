<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') &mdash; LeaveApp</title>

    <!-- Fonts -->
    <link href="{{asset('css/vendor/font-awesome.min.css')}}" rel='stylesheet'>


    <!-- Styles -->
    <link href="{{asset('css/vendor/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{asset('js/vendor/jquery-2.1.4.js')}}"></script>
    <script src="{{asset('js/tablejs/datatables.js')}}"></script>


</head>
<body>
<div class="wrapper">
@include('partials._nav')
   <div id="page-wrapper" style="margin-top: 5px;">

        @include('partials.errors')
        @include('partials.status')
       <div class="col-lg-12">
           <div class="row">
               <h3 class="text-center">@yield('header')<span class="pull-right">
                    <p>@yield('days')</p></span>
               </h3>
           </div>
       </div><!-- /v.col-lg-12 -->
        @yield('content')
    </div>



    <!-- JavaScripts -->
    
    <script src="{{ asset('js/flat.js') }}"></script>
    <script src="{{asset('js/vendor/bootbox.js')}}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</div>
</body>
</html>
