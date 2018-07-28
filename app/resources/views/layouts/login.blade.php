<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME','') }}</title>
    @include("includes.head")
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        @yield('content')
    </div>
</body>
</html>