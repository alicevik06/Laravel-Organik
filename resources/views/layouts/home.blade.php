<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @yield('css')
    @yield('js')
</head>
<body>
<!-- Üstmenü Alanı alanı  -->

<div style="background-color:coral;margin-top: 0px;height: 150px;" class="jumbotron text-center">
    <h2>Header</h2>
    <p>Sayfa Üst Kısım Bilgisi</p>
    @yield('header')
</div>

<!-- Menü ve Sidebar alanı  -->

<div class="container">
    <div class="row">
        @yield('sidebar')
        @yield('slider')
    </div>
</div>

<!-- İçerik alanı  -->
<div class="container">
    <div class="row text-center">
        @yield('content')
    </div>
</div>

<!-- AltMenü alanı  -->

<div style="height: 150px;background-color: darkkhaki" class="jumbotron text-center">
    <h2>Footer</h2>
    <p>Sayfa Alt Kısım</p>
    @yield('footer')
</div>

</body>
</html>
