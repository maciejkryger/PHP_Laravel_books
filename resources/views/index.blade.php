<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>javarun.pl</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
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

            .links > a {
                text-align:left;
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .header{
                align-items: left;
                text-align:center;
                display:block;
                width:100%;
                overflow-x:auto;
                color:#fff!important;
                background-color:#000!important;
                padding-top:24px!important;
                padding-bottom:24px!important;
                position:absolute;
                top:0;
                left:0;
            }
            .footer{
                text-align:center;
                display:block;
                width:100%;
                overflow-x:auto;
                color:#fff!important;
                background-color:#000!important;
                padding-top:24px!important;
                padding-bottom:24px!important;
                position:absolute;
                bottom:0;
                left:0;
            }
        </style>
    </head>
    <body>
        <div class="header"></div>
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

            <div class="content" >
                <div class="title m-b-md ">
                    My Projects
                </div>
                
                <div class="links">
                    <a href="/books">Books in PHP</a>
                    <a href="https://github.com/maciejkryger/PHP_Laravel_books">Books on GitHub</a>
                    <a href="http://80.211.242.50:8080/qunsztowna/">QUNSZTOWNA in Java Spring</a>
                    <a href="https://github.com/maciejkryger/myWebShop">Qunsztowna on GitHub (private)</a>
                    <a href="https://car-rent-4team.herokuapp.com/">CarRent in Java Spring (herokuapp)</a>
                    <a href="https://github.com/JacobTheLiar/sda-4team-carrent">CarRent on GitHub</a>
                    <a href="https://github.com/maciejkryger">my GitHub Account</a>
                </div>
            </div>
        </div>
        <div class="footer">
            Maciej Kryger 2020
        </div>      
    </body>
</html>
