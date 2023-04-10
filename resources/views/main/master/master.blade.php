<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$user->title}}</title>
    <link rel="stylesheet" href="theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="theme/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="theme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="theme/css/magnific-popup.min.css">
    <link rel="stylesheet" href="theme/css/animate.min.css">
    <link rel="stylesheet" href="theme/css/boxicons.min.css">
    <link rel="stylesheet" href="theme/css/flaticon.css">
    <link rel="stylesheet" href="theme/css/meanmenu.min.css">
    <link rel="stylesheet" href="theme/css/nice-select.min.css">
    <link rel="stylesheet" href="theme/css/odometer.min.css">
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="theme/css/responsive.css">
    <link rel="stylesheet" href="theme/css/datepicker.css">


</head>

<body>
   @include('main.header')
   @include('main.whatsaap')
@yield('content')
   @include('main.footer')
   @include('main.script')
</body>

</html>
