<html>
    <head>
        <title>@yield('title', 'Credlr')</title>
        <script src="/js/jsencrypt.js"></script>
        <link rel="stylesheet" href="/css/app.css" type="text/css">
    </head>
    <body>
        @include('partials.header')
        @yield('content')
    </body>
</html>
