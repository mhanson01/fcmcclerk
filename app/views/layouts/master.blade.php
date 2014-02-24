<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('meta_description', 'The Franklin County Municipal Court Clerk Web Site.')">

        <title>
            @yield('title', 'Home') -
            FCMC Clerk {{ Config::get('fcmc.clerk_full_name') }}

        </title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="/assets/css/master.css?v=1" rel="stylesheet">

        <style>
            @yield('style', '/* None Loaded */')

        </style>
    </head>
    <body>

        @include('_partials._nav')

        @yield('content')

        @include('_partials._footer')


        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script>
            @yield('script', '/* None Loaded */')

        </script>

    </body>
</html>
