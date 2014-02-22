
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Beta - FCMC Clerk</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <style>
            .fcmcclerk {
                color: #fff;
                font-weight: bold;
            }
            /* Extra small devices (phones, less than 768px) */
            /* No media query since this is the default in Bootstrap */

            .page-header h1 {
                font-size: 20px;
                line-height: 24px;
            }
            .page-header h1 small {
                font-size: 15px;
                line-height: 20px;
            }

            /* Small devices (tablets, 768px and up) */
            @media (min-width: 768px) {
                .page-header h1 {
                    font-size: 25px;
                    line-height: 30px;
                }
                .page-header h1 small {
                    font-size: 20px;
                    line-height: 25px;
                }
            }

            /* Medium devices (desktops, 992px and up) */
            @media (min-width: 992px) {
                .page-header h1 {
                    font-size: 30px;
                    line-height: 35px;
                }
                .page-header h1 small {
                    font-size: 25px;
                    line-height: 30px;
                }
            }

            /* Large devices (large desktops, 1200px and up) */
            @media (min-width: 1200px) {
                .page-header h1 {
                    font-size: 35px;
                    line-height: 40px;
                }
                .page-header h1 small {
                    font-size: 30px;
                    line-height: 35px;
                }
            }

        </style>

        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

        <script>
            //alert( 'Your screen resolution is ' + screen.width + 'x' + screen.height );
        </script>
    </head>
    <body>

        @include('_partials._nav')

        @include('_partials._jumbotron')

        @include('_partials._featured')

        @yield('content')

        @include('_partials._footer')


    </body>
</html>
