<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @if(config('env') == 'local')
    <link rel="stylesheet" href="{{ secure_asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/app.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @endif
    @yield('assets')
</head>

<body id="page-top" class="d-flex flex-column vh-100">

    @section('menu')
        @includeIF('componentes.menu.publico')
    @show

    <main class="flex-grow-1">
        @yield('conteudo')
    </main>
    @section('secao')
        <section class="page-section">
            @yield('page-section')
        </section>
    @endsection
    @section('rodape')

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright © {{ env('APP_NAME') }}</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.figma.com/file/KhlongugXGkdEh2jWUBJGV/TCC_Leil%C3%A3o_De_Materiais?type=whiteboard&node-id=0-1&t=bSjFN6YJGXGzkla2-0" aria-label="Figma">
                            <i class="fab fa-figma"></i>
                        </a>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/eluaar/projeto-leilao-materiais" target="_blank" aria-label="Github">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Política de privacidade</a>
                        <a class="link-dark text-decoration-none" href="#!">Termos de uso</a>
                    </div>
                </div>
            </div>
        </footer>
    @show
    @if(config('env') == 'local')
    <script src="{{ secure_asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/app.js') }}></script>
    @else
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}></script>
    @endif
</body>

</html>
