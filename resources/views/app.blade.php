<!DOCTYPE html>

<html>

<head>

    <title>@yield('title') &mdash; LeaveApp</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

<body>

@include('partials._nav')

<div class="container">

    <h4 class="header blue-text center teal-text">@yield('header')</h4>

    

    @if (session('status'))
        <div class="chip teal lighten-1 white-text center">
            {{ session('status') }}
            <i class="material-icons">close</i>
        </div>
    @endif

    @yield('page')

</div>

<script src="{{asset('js/app.js')}}"></script>

</body>


</html>