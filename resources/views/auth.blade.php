<!DOCTYPE html>
<html>
<head>
    <title>Leave Application App</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
     <!-- Fonts -->
    <link href="{{asset('new/css/vendor/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('new/app.css')}}" rel="stylesheet">
    <script src="{{asset('new/js/vendor/jquery-2.1.4.js')}}"></script>
</head>
<body class="login-body">

<div class="container login-container">
    @yield('content')
</div>

 <script src="{{ asset('new/js/flat.js') }}"></script>

</body>
</html>