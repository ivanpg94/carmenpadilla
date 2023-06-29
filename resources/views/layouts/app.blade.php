<!DOCTYPE html>
<html>
<head>
    <title>Carmen Padilla - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/518cb6af80.js" crossorigin="anonymous"></script>

</head>
<body>
<header class="header">
    <a href="/" class="logo black">Carmen Padilla</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a href="#experiencia">Experiencia</a></li>
        <li><a href="#formacion">Formación</a></li>
        <li><a href="#habilidades">Habilidades</a></li>
        <li><a href="#contacto">Contacto</a></li>
    </ul>
</header>

<main>
    @yield('content')
</main>

<footer>
    <!-- Contenido del pie de página -->
</footer>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="../owl-carousel/owl.carousel.js"></script>
<!-- Scroll reveal https://scrollrevealjs.org/guide/hello-world.html -->
<script src="https://unpkg.com/scrollreveal"></script>

</body>
</html>
