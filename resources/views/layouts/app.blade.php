<html>

<head>
    <title>App Name - @yield('title')</title>
</head>

<body>

    no parent layout text <br>
    @section('sidebar')
        master sidebar MMMM <br>
    @show

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
