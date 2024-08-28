<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website-FoodSale</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('component/index.css') }}">
</head>

<body class="index-page">
    @yield('contents')
    <script src="{{ asset('component/index.js') }}"></script>
</body>

</html>
