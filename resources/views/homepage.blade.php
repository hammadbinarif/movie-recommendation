<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1">
        <meta name="csrf-token"             content="{{ csrf_token() }}">

        <title>Movie Recommendations</title>

        <!-- Styles -->
        <link rel="stylesheet"              href="{{ mix('css/app.css') }}" crossorigin="anonymous">

        <!-- Endpoints for JS -->
        <script>
            var appConfig = {
                appEndpoint:            '{{URL::to('/')}}',
                apiEndpoint:            '{{URL::to('/')}}/api',
            };
        </script>
    </head>
    <body>
        <div id="root"></div>
        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>
