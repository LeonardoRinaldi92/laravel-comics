<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titolo')</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        @include('partials.header')
    </header>
    <main>
        <section>
            @include('partials.jumbotron')
        </section>
        <section>
            @include('partials.thumbBox')
        </section>
        <section>
            @include('partials.bluenav')
        </section>
    </main>
</body>
</html>