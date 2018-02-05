<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>
        <div class="container" id="app">
            <task></task>
        </div>
        <footer class="footer">
            <div class="container">
                <span class="text-muted">
                    <a href="http://khandakerakash.me/">KHANDAKER AKASH </a> |
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script> All right reserved.
                </span>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
