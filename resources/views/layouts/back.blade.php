<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

    <title>Document</title>
</head>
<body>
    <div class="flex">
            @include('components.navdashboard')
        <div class="w-screen">
            @yield('content')
        </div>
    </div>
<script src={{'js/app.js'}}></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>
