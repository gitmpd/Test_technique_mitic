<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GestTasks</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        {{-- <script src="{{ asset('js/tri_ventes.js') }}"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- Core theme CSS (includes Bootstrap)-->
        {{-- <link href="{{ url('/css/style.css') }}" rel="stylesheet" /> --}}
    </head>
    <body id="page-top" class="bg-light">
        <!-- Header-->
        <header class="bg-success bg-gradient text-white pb-2 mb-3">
            <div class="container px-5 text-center"> <!-- Increase padding to px-5 for wider effect -->
                <h1>Bienvenue sur la page d'accueil des taches</h1>
                <p class="lead">Pour mieux gerer vos taches</p>
            </div>
        </header>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @elseif (session('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
        @elseif (session('primary'))
        <div class="alert alert-primary" role="alert">
            {{ session('primary') }}
        </div>
        @endif
        @yield('content')
        <!-- Footer-->

        <footer class="bg-white mt-2">
                        <!-- Footer Start -->
            <div class="container-fluid bg-success text-secondary">
                <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
                    <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy Mohamed papa Diarra 2024</p></div>
                </div>
            </div>
            <!-- Footer End -->
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>
</html>
