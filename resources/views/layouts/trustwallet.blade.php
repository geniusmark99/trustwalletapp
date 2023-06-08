<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>
@yield('page-title',config('app.name', 'Trustwallet'))
</title>
</title>
<link rel="icon" href="{{ asset('assets/img/favicon.png')}}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
@yield('page-style')
</head>
<body>
@yield('page-content')
<script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/amcharts-core.min.js')}}"></script>
<script src="{{ asset('assets/js/amcharts.min.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>
@yield('page-script')
</body>
</html>