<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="This is a site which contains to do list for a job application">
        <meta name="author" content="Bartosz Muzolf">
        <title>ToDo</title>
        @vite(['resources/js/app.js'])
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
    <header>
        <nav class="navbar navbar-dark bg-primary navbar-expand-lg  d-flex flex-column align-items-start" id="sidebar">
            <a href="#" class="navbar-brand text-light mt-5">
                <div class="display-5"><img src="{{URL::asset('images/logo.png')}}" alt="logo.png" height="64px" width="64px" class="mb-2">ToDo</div>
                <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                    <li class="nav-item w-100">
                        <a href="/" class="nav-link text-light pl-4">Start</a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="kontakt" class="nav-link text-light pl-4">Kontakt</a>
                    </li>
                    <li class="nav-item w-100 dropdown">
                        <a href="#" class="nav-link text-light pl-4 dropdown-toggle" id="listToggler" role="button" data-bs-toggle="dropdown" aria-expanded="false">Zarzadzaj</a>
                        <ul class="dropdown-menu w-100" aria-labelledby="listToggler">
                            <a href="dodawanie"><li class="dropdown-item text-light pl-4 p-2">Dodaj</li></a>
                            <a href="usuwanie"><li class="dropdown-item text-light pl-4 p-2">Usun</li></a>
                        </ul>
                    </li>

                </ul>
            </a>
        </nav>
    </header>
    @if(Route::currentRouteName()!=null)
        @include('subviews.'.Route::currentRouteName())
    @else
        @include('subviews.error')
    @endif
    <script src="js/scripts.js"></script>
    </body>
</html>
