<nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{url('/#page-top')}}">
            <img src="{{@asset('assets/images/logo_leilao.png')}}" alt="">
           <!-- <i class="fa-solid fa-shuttle-space"></i> --> {{env('APP_NAME')}}

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <svg class="svg-inline--fa fa-bars ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path></svg><!-- <i class="fas fa-bars ms-1"></i> Font Awesome fontawesome.com -->
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <!-- Authentication Links -->
                @includeIf('componentes.menu.item.login')
            </ul>
        </div>
    </div>
</nav>
