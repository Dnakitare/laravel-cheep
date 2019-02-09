<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
    </head>
    <body>

        <img src="{{asset('/images/cheep.png')}}" alt="Cheep logo">

        <h1>Daniel Nakitare's<br>Bankrupt Twitter Clone</h1>

        @yield('content')

    </body>
</html>