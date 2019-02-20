<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Chris Wainwright</title>

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

            .links > a {
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
                        Projects
                </div>
                <div class="links">
                    <a href="/#">View Github Repository For This Page.</a>
                </div>
            </div>
        </div>

        <div class="container row">
            <?php foreach ($projects as $project){?>
                <div class="card col-md-6">
                    <div class="content-inner">
                        <div class="icon"><?php echo $project->icon ?></div>
                        <div class="title"><h2><?php echo $project->title ?></h2></div>
                        <div class="desc"><?php echo $project->description ?></div>
                        <div class="git button"><a href="<?php echo $project->git_url ?>"><button class="btn">View on Git</button></a></div>
                        <div class="link button"><a href="<?php echo $project->url ?>"><button class="btn btn-primary">View Project</button></a></div>
                        <div class="language" style="<?php echo $project->language == 'Javascript' ? "background-image: linear-gradient(0deg,#f19a1a,#ffc73c)" : "background-image: linear-gradient(180deg,#f44881,#ec454f)"?>">
                        <span style="color:white; font-weight:900;display:flex; justify-content:center;"><?php echo $project->language ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>



    </body>
</html>
