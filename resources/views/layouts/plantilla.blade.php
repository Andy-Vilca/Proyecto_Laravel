<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <!---favicon-->
    <!-- estilos -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- header -->
    @include('layouts.partials.header')
    <!-- nav -->
    <h1>@yield('content')</h1>

    <!-- footer
    script -->
    @include('layouts.partials.footer')
</body>
</html>