<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('header')
    {{-- <title>Tampilan Index</title> --}}
</head>
<body>
    <div class="container">
        @yield('isi')
    </div>
    @include('footer')


</body>
</html>
