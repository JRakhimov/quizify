<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title')</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">
</head>
<body>
    @yield('content')
    <script src="{{ URL::to('js/app.js') }}"></script>
</body>
</html>
