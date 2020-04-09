<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/estilos-master.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css">
</head>

<body>
    <a id="whatsapp" href="https://api.whatsapp.com/send?phone=+529612365046"><img src="img/iconos/whatsapp.png" alt=""></a>
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark  scrolling-navbar  fixed-top">
    <div class="contenedor">
        <a class="navbar-brand" href="#">Darinel Cigarroa</a>
    {{-- boton para movil --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#sobre-mi">Sobre mi
                <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#servicios">Servicios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#porque-trabajar">¿Por que trabajar conmigo?</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#publicaciones">Publicaciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-google-plus-g"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
        </ul>
    </div>
    </div>
    </nav>
    <div class="contenedor" id="contenedor-titulo-flex">
		<div class="contenido-titulo">
			<h1>Emprendiendo</h1>
			<h2>Darinel Cigarroa De Los Santos</h2>
			<a href="">VER MIS TRABAJOS</a>
		</div>
	</div>
</header>
	<main>
		<section id="sobre-mi">
            @yield('sobre-mi')
		</section>

		<section id="servicios">
			@yield('servicios')
		</section>

        <section id="porque-trabajar">
            @yield('porque-trabajar')
        </section>

        <section id="que-esperas">
            @yield('que-esperas')
        </section>

        <section id="publicaciones">
			@yield('publicaciones')
        </section>

		<section id="contacto">
            @yield('contacto')
        </section>

        <section id="email">
            @yield('email')
		</section>
	</main>

    <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">
<!-- Footer Elements -->
<div class="container">
<!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
            </a>
        </li>

        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
            </a>
        </li>

        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
            </a>
        </li>

        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
            </a>
        </li>

        <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
            </a>
        </li>
    </ul>
    <!-- Social buttons -->
        </div>
        <!-- Footer Elements -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#">Darinel Cigarroa De Los Santos</a>
    </div>
</footer>
    <!-- Footer -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
    </body>
</html>
