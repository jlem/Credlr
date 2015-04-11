<html>
    <head>
        <title>@yield('title', 'Passgun')</title>
        <script src="/js/jsencrypt.js"></script>
        <link rel="stylesheet" href="/css/app.css" type="text/css">
    </head>
    <body>
        @include('partials.header')
        @yield('content')
    </body>
</html>
