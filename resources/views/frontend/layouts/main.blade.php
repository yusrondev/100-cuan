<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>100 - Cuan</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
</head>
<body>
    <h1>Navbar</h1>
    
    @yield('content')

    <h1>Footer</h1>
</body>
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    @stack('js')
</html>