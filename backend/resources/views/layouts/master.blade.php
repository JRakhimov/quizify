<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">
</head>
<body>
    @yield('content')
</body>
</html>
