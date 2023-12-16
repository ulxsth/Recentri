<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#000000">
        <!-- <link rel="stylesheet" href="/app.css" /> -->
        <link rel="stylesheet" href="{{ stylesheets('css/app.css') }}">
        <!--googlefont londrinascketch-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Sketch&display=swap" rel="stylesheet">
        <!--googlefont londrinascketch-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@600&display=swap" rel="stylesheet">
        <title>Recentri</title>
        @yield('head')
    </head>
    <body>
        <div class="logo">
            <h1>Recentri <span>for Spotify</span></h1>
        </div>
        <img src="\gear.png">
        @yield('content')
    </body>
</html>