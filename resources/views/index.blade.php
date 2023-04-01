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
        <style>
            body
            {
                min-height: 100vh;
                background-color: #fff;
            }

            .navbar
            {
                width: 250px;
                height: 100vh;
                position: fixed;
                margin-left: -300px;
                transition: 0.4s;
            }

            .nav-link
            {
                font-size: 2em;
            }

            .nav-link:focus, .nav-link:active, .nav-link:hover
            {
                background-color: #0c63e4;
            }

            .dropdown-menu
            {
                background-color: #0c63d4;
            }

            .dropdown-item:active,.dropdown-item:hover,.dropdown-item:focus
            {
                background-color: #0d6efd;
            }

            .my-container
            {
                transition: 0.4s;
            }

            .active-nav
            {
                margin-left: 0;
            }

            .active-cont
            {
                margin-left: 250px;
            }

            #menu-btn:focus
            {
                box-shadow: 0 0 0 0.25rem #7952b344;
            }
            .listItem
            {
                border: 2px solid #0d6efd;
                border-radius: 25px;
                height:150px;
            }
        </style>

    </head>
    <body>
    <header>
            <nav class="navbar navbar-dark bg-primary navbar-expand-lg  d-flex flex-column align-items-start" id="sidebar">
                <a href="#" class="navbar-brand text-light mt-5">
                    <div class="display-5"><img src="{{URL::asset('images/logo.png')}}" alt="logo.png" height="64px" width="64px" class="mb-2">ToDo</div>
                    <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                        <li class="nav-item w-100">
                            <a href="#" class="nav-link text-light pl-4">Start</a>
                        </li>
                        <li class="nav-item w-100 dropdown">
                            <a href="#" class="nav-link text-light pl-4 dropdown-toggle" id="listToggler" role="button" data-bs-toggle="dropdown" aria-expanded="false">Zarzadzaj</a>
                            <ul class="dropdown-menu w-100" aria-labelledby="listToggler">
                                <li class="dropdown-item text-light pl-4 p-2">Dodaj</li>
                                <li class="dropdown-item text-light pl-4 p-2">Usun</li>
                            </ul>
                        </li>
                        <li class="nav-item w-100">
                            <a href="/kontakt" class="nav-link text-light pl-4">Kontakt</a>
                        </li>
                    </ul>
                </a>
            </nav>
        </header>
        <section class="p-4 my-container">
            <button type="button" id="menu-btn" class="btn my-4 bg-primary text-light">MENU</button>
            <h1>Zadania:</h1>
            @foreach($data as $got)
                <div class="listItem m-auto p-2 mt-3">
                    <div class="h2">
                        {{$data}}
                    </div>
                </div>
            @endforeach
        </section>
    <script>
        let menu_btn = document.querySelector("#menu-btn");
        let sidebar = document.querySelector("#sidebar");
        let container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        })
    </script>
    </body>
</html>
