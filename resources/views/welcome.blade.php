<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QCMcreator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }
        body {
            /*background-color: #fff;*/
            background-image: url('kenny-lescano-1578799-unsplash.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            padding: 1em;
        }

        .title {

            font-size: 4em;
            margin-bottom: 1em;

        }

        .links>a {
            color: white;
            padding: 1em;
            font-size: 1em;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .footer {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            margin-left: auto;
            margin-right: auto;
        }
        .footer a {
            color: white;
            font-size: 1em;
            font-weight: 600;
            text-decoration: none;
        }
        @media (max-width:720px){
            .links>a {
            color: white;
            padding: 0.8em;
            font-size: 0.8em;
            font-weight: 600;
            letter-spacing: .1rem;
        }
    </style>
</head>

<body>
    <div class="flex-center  full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Se connecter</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">S'inscrire</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title">
                QCMcreator
            </div>
            <p>
                QCMcreator est une application Web responsive qui vous permet de créer, répondre et consulter vos questionnaires
                avec toute simplicité.
            </p>
            <div class="footer">Copyright 2019 ©
                <a href="http://www.ouissem-ouerdiane.fr/" target="_blanck">ouissem ouerdiane </a>
            </div>
        </div>

    </div>

</body>


</html>