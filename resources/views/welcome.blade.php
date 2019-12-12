<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>aerolinea</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #ffff;

               font-family: 'Lobster', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url(../imagen/aq.jpg);
                 background-repeat: no-repeat;
                 background-size: 100% 100%;
    background-position: center top;
    background-attachment: fixed;


            
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

           

            .m-b-md {

                 margin-bottom: 50px;
                font-size:120px; 
                text-shadow: -4px 3px 0 #852B61, -14px 7px 0 #0a0e27;
                 position: relative;
  bottom: 128px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    BIENVENIDO
                </div>

                
            </div>
        </div>
    </body>
</html>
