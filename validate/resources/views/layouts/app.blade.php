
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{----------------------------------       Unicos  ---------------------------}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
{{-- ----------------------------------   Css--------------------------------}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>News</title>
</head>
<body>

{{--  ----------------------------  Navbar ---------------------------------}}

<nav>
    <div class="nav_logo">
        <a href="/">Yangiliklar</a>
    </div>
    <ul class="nav_list flex">
        <li class="nav_item">
            <a href="">Uzbekiston</a>
        <li class="nav_item">
            <a href="/dunyo">Dunyo</a>
        </li>
        <li class="nav_item">
            <a href="">Auto</a>
        </li>
        <li class="nav_item">
            <a href="/sport">Sport</a>
        </li>
    </ul>
    <ul class="nav_list">
        <li class="nav_item button">
            <a class="nav_a" href="">Telegram<i class="uil uil-telegram-alt icon_r"></i></a>
        </li>
        <li class="nav_item">
            <a href="#"><i class="uil uil-search icon_r"></i></a>
        </li>
    </ul>

</nav>
<p class="p"></p>
@yield('content')
</body>
</html>
