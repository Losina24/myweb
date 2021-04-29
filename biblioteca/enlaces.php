<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>¡Haz click para ver el capitulo!</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="../estilos.css" rel="stylesheet">
    <link href="../enlaces.css" rel="stylesheet">

    <link rel="shortcut icon" href="../resources/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../resources/favicon.ico" type="image/x-icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1JYKZ8NF86"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-1JYKZ8NF86');
    </script>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <a id="logo" class="iso-link ch-left" href="#top"><img id="lgo" src="../resources/logoblack.svg" alt="Isotipo"></a>

        <div class="container-header ch-mid">
            <!--<a href="#servicios-smooth" class="link-main">Servicios</a>
            <a href="#skill-smooth" class="link-main">Habilidades</a>
            <a href="#work-smooth" class="link-main">Proyectos</a>
            <a href="#form" class="link-main">Contacto</a>-->
        </div>

        <div class="container-header ch-right">
            <!--<a class="link-socials" href="https://wa.me/+34" target="_blank"><i class="fab fa-whatsapp"></i></a>-->
            <!--<a class="link-socials" href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>-->
            <a class="link-socials" href="#" target="_blank"><i
                    class="fab fa-linkedin-in .text-dark"></i></a>
            <a class="link-socials" href="#" target="_blank"><i class="fab fa-github"></i></a>
            <div class="hamburger" id="hamburger-1">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </header>

    <!-- Menu -->
    <nav class="menu-lateral">
        <div class="d-flex flex-column">
            <!--<a href="#servicios-smooth" class="link-menu">Servicios</a>
            <a href="#skill-smooth" class="link-menu">Habilidades</a>
            <a href="#work-smooth" class="link-menu">Proyectos</a>
            <a href="#form" class="link-menu">Contacto</a>-->

            <div>
                <!--<a class="link-menu" href="https://wa.me/+34" target="_blank"><i class="fab fa-whatsapp"></i></a>-->
                <!--<a class="link-menu" href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>-->
                <a class="link-menu" href="#" target="_blank"><i
                        class="fab fa-linkedin-in .text-dark"></i></a>
                <a class="link-menu" href="#" target="_blank"><i
                        class="fab fa-github"></i></a>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <section class="mainContent">
        <h2 id="servicios-smooth" class="titulo-h2 h2-parrafo">Typescript VS Javascript</h2>
        <p class="parrafo" data-aos="fade-right">TypeScript es un lenguaje de programación que deriva de JavaScript.
            Este lenguaje añade varias funcionalidades y características nuevas a JS, que hacen que escribir código sea
            mucho más fácil y rápido, además de coherente. TS ha sido creado por Microsoft, y su crecimiento no ha
            parado de aumentar año tras año. <br><span> TS tiene un tipado estático, además,existen tipos genéricos al
            contrario que en JS. También existe tipado estructural, tipos enumerados, tuplas, modularización,
            interfaces... Es decir, TS cumple todas las funciones de JS, pero además, le añade otras nuevas que lo hacen
            un lenguaje muy práctico y robusto.</span></p>

        <h3>El link!📖:</h3>
        <a href="https://hatsukimanga.com/biblioteca/viewer?id_capitulo=<?php echo $id; ?>" class="enlace-hatsuki">Cap <? echo $id; ?></a>
    </section>


    <!-- Footer -->
    <footer>
        <p>Copyright © 2020 alejandrolosa.es | <a href="../terminos">Términos y condiciones</a> | <a
                href="cookies">Política de cookies</a></p>
    </footer>

</body>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8d96a2d252.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
    integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
    crossorigin="anonymous"></script>

<!-- Kursor.js -->
<script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
<script>
    $('#logo').on('mouseenter', () => {
        if ($(window).scrollTop() > 50) {
            $('#lgo').attr('src', 'resources/l2.svg');
        } else {
            $('#lgo').attr('src', 'resources/logoanimadp.svg');
        }

    })
        .on('mouseout', () => {
            if ($(window).scrollTop() > 50) {
                $('#lgo').attr('src', 'resources/l1.svg');
            } else {
                $('#lgo').attr('src', 'resources/logoblack.svg');
            }
        });

    $('#cta').on('click', () => {
        window.location.href = "#form";
    })

    var activeMenu = 0;

    $(document).ready(function () {
        $(".hamburger").click(function () {

            $('.hamburger').toggleClass("is-active");
            $('.hamburger').children().toggleClass("burger-click");

            $("nav").stop().slideToggle();
            if (activeMenu == 0) {
                $('html').css({
                    overflow: 'hidden'
                });
                $("#lgo").stop().animate({ opacity: '0%' });
                activeMenu = 1;
            } else {
                $('html').css({
                    overflow: 'auto'
                });
                $("#lgo").stop().animate({ opacity: '100%' });
                activeMenu = 0;
            }
        });
    });

    $('.link-menu').on('click', () => {
        $('.hamburger').removeClass("is-active");
        $('.hamburger').children().removeClass("burger-click");
        $("nav").stop().slideToggle();
        $('html').css({ overflow: 'auto' });
        $("#lgo").stop().animate({ opacity: '100%' });
        activeMenu = 0;
    })

    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 50) {
            $(".header").addClass("headeroff");
            $("#lgo").attr('src', 'resources/l1.svg');
            $(".link-main").addClass('blanco');
            $(".link-socials").addClass('blanco-social');
            $(".line").css('background-color', '#fafafa');
            $(".scroll").stop().animate({ opacity: '0%' }, 250);
        } else {
            $(".header").removeClass("headeroff");
            $("#lgo").attr('src', 'resources/logoblack.svg');
            $(".link-main").removeClass('blanco');
            $(".link-socials").removeClass('blanco-social');
            $(".line").css('background-color', '#171717');
            $(".scroll").stop().animate({ opacity: '100%' }, 250);
        }
    });

    $('.aceptar-cookies').on('click', function () {
        var d = new Date();
        d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = "aceptar-cookies-alejandro=true; expires=" + expires + ";";
        $('.cookies').css('display', 'none');
    })
        (function () {
            if (document.location.hash) {
                setTimeout(function () {
                    window.scrollTo(window.scrollX, window.scrollY - 100);
                }, 10);
            }
        })();
</script>

</html>