<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'gotoroho' }}</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="layout">
    <header class="layout__header">
        @include('components.header')
    </header>

    <main class="layout__main">
        @yield('content')
    </main>

    <footer class="layout__footer">
        @include('components.footer')
    </footer>
</div>

<script src="/js/app.js"></script>

</body>
</html>
