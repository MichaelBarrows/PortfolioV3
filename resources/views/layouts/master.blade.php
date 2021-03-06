@if(isset($maintenance_mode))
@if($maintenance_mode->value == True)
    @include('layouts.maintenance_mode')
@else
<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>@yield('title')Michael Barrows | Web Developer in Colchester, Essex.</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html"/>
        <meta name="description" content="Michael Barrows is a full-stack/back-end web developer located in Colchester, Essex.">
        <meta name="keywords" content="michael barrows, colchester, essex, web developer, graduate, portfolio, full stack, back end">
        <meta name="author" content="Michael Barrows"/>
        @yield('canonical')
        <meta name="theme-color" content="#0099CC">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89047400-5"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-89047400-5');
        </script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://kit.fontawesome.com/b78699b149.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="hex-bg-container">
            <header>
                <div class="grid-container grid">
                    <div class="small-12 medium-12 large-6 xlarge-5">
                        <h1><a href="{{ route('index') }}">Michael Barrows</a></h1>
                    </div>
                    <nav class="small medium small-12 medium-12 large-hidden xlarge-hidden grid bars">
                        <a class="small-12 medium-12 hidden" href="{{ url('/') }}">Home</a>
                        <a class="small-12 medium-12 hidden" href="{{ url('/#about') }}">About</a>
                        <a class="small-12 medium-12 hidden" href="{{ url('/#projects') }}">Projects</a>
                        <a class="small-12 medium-12 hidden" href="{{ url('/#contact') }}">Contact</a>
                        <a class="small-12 medium-12 hidden" href="https://github.com/MichaelBarrows" target="_blank"><i class="fab fa-github"></i></a>
                        <a class="small-12 medium-12 hidden" href="https://www.linkedin.com/in/michaelpbarrows" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a class="small-12 medium-12 hidden" id="bars" href="#"><i class="fas fa-bars"></i></a>
                    </nav>
                    <div class="large-6 xlarge-7 small-hidden medium-hidden align-right">
                        <nav class="large xlarge align-right flex-container flex-right">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/#about') }}">About</a>
                            <a href="{{ url('/#projects') }}">Projects</a>
                            <a href="{{ url('/#contact') }}">Contact</a>
                            <a href="https://github.com/MichaelBarrows" target="_blank"><i class="fab fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/michaelpbarrows" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </nav>
                    </div>
                </div>
            </header>
            @yield('content')

            <footer>
                <div class="grid-container grid">
                    <div class="small-12 medium-12 large-6 xlarge-6 small-center medium-center large-left xlarge-left">
                        <p class="icons">
                            <a href="https://github.com/MichaelBarrows" target="_blank"><i class="fab fa-github"></i></a>
                            <a href="https://linkedin.com/in/michaelpbarrows" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="mailto:contact@michaelbarrows.com" target="_blank"><i class="fas fa-envelope"></i></a>
                        </p>
                    </div>
                    <div class="small-12 medium-12 large-6 xlarge-6 small-center medium-center large-right xlarge-right">
                        <p>&copy; Michael Barrows {{ date('Y') }}</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
    </html>
@endif
@endif
