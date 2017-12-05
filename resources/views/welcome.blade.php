<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tournament') }}</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400i,500" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
    <body id="welcome">
        <div class="justified-div">
                            <p>HAGLER VS GOLOVKIN VS CANELO VS NAPOLES VS MAYWEATHER VS ROBINSON VS PACQUIAO VS LEONARD VS WHITAKER VS DURAN VS LOMACHENKO VS CHAVEZ VS PRYOR VS TSZYU VS COTTO VS MARQUEZ VS MOSLEY VS MORALES VS HAMED VS BARRERA VS BRONER VS HEARNS VS MAIDANA VS DE LA HOYA VS HOPKINS VS MONZON VS MARTINEZ VS PIROG VS BENVENUTI VS JONES JR VS WILDER VS ALI VS JOSHUA VS LEWIS VS KLISTCHKO VS TYSON VS LOUIS VS HAYE VS USYK VS BELLEW VS STEVENSON VS JACK VS KOVALEV VS FOSTER VS WARD VS CALZAGHE VS GIBBONS VS TONEY VS WILLIAMS VS ARMSTRONG VS TRINIDAD VS SPENCE VS GRIFFITH VS GREB</p>
                        </div>
            @include ('layout.nav')
            <div class="container">
                <div class="columns">
                    <div class="column col-2"></div>
                    <div class="column col-sm-12">
                        <div class="title-div">
                            <h2 class="title-text">Boxing Bud</h2>
                            {{-- <p>With an exhaustive database with accurate ratings, test our algorithm and see who comes out on top.</p> --}}
                            <button class="btn btn-alabama btn-lg">
                                <a href="/tournament">Start Now</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>