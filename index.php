<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Alejandro Losa - Desarrollador Full Stack</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
    <link rel="icon" href="resources/favicon.ico" type="image/x-icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1JYKZ8NF86"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-1JYKZ8NF86');
    </script>
</head>

<body>
    <!-- Alertas -->
    <div class="alert alert-success fade" role="alert">
        <strong>Correcto!</strong> Tu correo se ha enviado con éxito.
    </div>

    <!-- Header -->
    <header class="header">
        <a id="logo" class="iso-link ch-left" href="#top"><img id="lgo" src="resources/logoblack.svg" alt="Isotipo"></a>

        <div class="container-header ch-mid">
            <a href="#servicios-smooth" class="link-main">Servicios</a>
            <a href="#skill-smooth" class="link-main">Habilidades</a>
            <a href="#work-smooth" class="link-main">Proyectos</a>
            <a href="#form" class="link-main">Contacto</a>
        </div>

        <div class="container-header ch-right">
            <!--<a class="link-socials" href="https://wa.me/+34" target="_blank"><i class="fab fa-whatsapp"></i></a>-->
            <!--<a class="link-socials" href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>-->
            <a class="link-socials" href="https://www.linkedin.com/in/alejandrolosagarc%C3%ADa/" target="_blank"><i class="fab fa-linkedin-in .text-dark"></i></a>
            <a class="link-socials" href="https://github.com/Losina24" target="_blank"><i class="fab fa-github"></i></a>
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
            <a href="#servicios-smooth" class="link-menu">Servicios</a>
            <a href="#skill-smooth" class="link-menu">Habilidades</a>
            <a href="#work-smooth" class="link-menu">Proyectos</a>
            <a href="#form" class="link-menu">Contacto</a>

            <div>
                <!--<a class="link-menu" href="https://wa.me/+34" target="_blank"><i class="fab fa-whatsapp"></i></a>-->
                <!--<a class="link-menu" href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>-->
                <a class="link-menu" href="https://www.linkedin.com/in/alejandrolosagarc%C3%ADa/" target="_blank"><i class="fab fa-linkedin-in .text-dark"></i></a>
                <a class="link-menu" href="https://github.com/Losina24" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <main>
        <article id="top" class="section-main">
            <!-- &#128760 -->
            <h1 class="titulo-mobile">Hola! Soy <span class="color-especial">Alejandro</span>.<br>Desarrollador <span class="color-especial">Full</span> stack.</h1>
            <h1 class="titulo">Hola!<br> Soy <span class="color-especial">Alejandro</span>.<br>Desarrollador<br><span class="color-especial">Full</span> stack.</h1>
            <h2 class="subtitulo">¿Todavía no estás en Internet?<br>Actualízate al siglo XXI.</h2>
            <button id="cta" class="btn-grad">Contáctame</button>
        </article>

        <img class="imagen-main-2" src="resources/coding_ (1).svg" alt="Ilustración">
        
        <div class="scroll"> <!-- Scroll down --> 
            <a href="#">
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
            </a>
        </div>
    </main>

    <!-- Servicios -->
    <h2 id="servicios-smooth" class="titulo-h2" data-aos="fade-right">¿Qué hago?</h2>
    <p class="texto-servicio" data-aos="fade-right">Desde el diseño de la interfaz, hasta el mantenimiento y gestión del servidor y la base de datos,  pasando por todo el proceso de desarrollo de la aplicación (web o móvil).</p>
    <section class="section-servicios">
        <article data-aos="fade-up">
            <img class="imagen-icono" src="resources/designer_.svg" alt="Diseño UX/UI">
            <div>
                <h3>Diseño UX/UI</h3>
                <p>Diseño de interfaz y experiencia de usuario de la aplicación.</p>
            </div>
        </article>

        <article data-aos="fade-up">
            <img class="imagen-icono" src="resources/coding_ (2).svg" alt="Diseño UX/UI">
            <div>
                <h3>Desarrollo Web y App</h3>
                <p>Ya sean aplicaciones móviles o web. Completamente optimizadas para tu negocio.</p>
            </div>
        </article>

        <article data-aos="fade-up">
            <img class="imagen-icono" src="resources/data_and_settings (1).svg" alt="Diseño UX/UI">
            <div>
                <h3>Gestión de servidores</h3>
                <p>¡Enfócate en tu negocio y olvida el mantenimiento! Explota tus recursos y obtén el máximo rendimiento.</p>
            </div>
        </article>
    </section>

    <!-- Habilidades -->
    <h2 id="skill-smooth" class="titulo-h2 titulo-habilidades" data-aos="fade-right">Habilidades</h2>
    <p class="texto-servicio" data-aos="fade-right">Mis aptitudes y conocimientos sobre el sector.</p>
    <section class="section-habilidades">
        <article id="skill1" class="round-skill" data-aos="fade-up">
            <h3>PHP</h3>
            <h4>100%</h4>
            <img src="resources/skill1.svg" alt="Skill 1" class="skill-grafica">
        </article>
        <article id="skill2" class="round-skill" data-aos="fade-up">
            <h3>Angular</h3>
            <h4>100%</h4>
            <img src="resources/skill1.svg" alt="Skill 2" class="skill-grafica">
        </article>
        <article id="skill3" class="round-skill" data-aos="fade-up">
            <h3>Node.js</h3>
            <h4>88%</h4>
            <img src="resources/skill2.svg" alt="Skill 3" class="skill-grafica">
        </article>
        <article id="skill4" class="round-skill" data-aos="fade-up">
            <h3>React</h3>
            <h4>80%</h4>
            <img src="resources/skill3.svg" alt="Skill 4" class="skill-grafica">
        </article>
        <article id="skill5" class="round-skill" data-aos="fade-up">
            <h3>Laravel</h3>
            <h4>70%</h4>
            <img src="resources/skill4.svg" alt="Skill 5" class="skill-grafica">
        </article>
    </section>

    <!-- Proyectos -->
    <h2 id="work-smooth" class="titulo-h2 titulo-habilidades" data-aos="fade-right">Proyectos</h2>
    <p class="texto-servicio" data-aos="fade-right">Algunos de los proyectos que he realizado últimamente.</p>
    <section class="section-work">
        <a href="http://platges.vinaros.es" target="_blank" id="work1" class="work" data-aos="fade-up">
            <img src="resources/6.png" alt="Skill 1" class="skill-grafica">
            <div>
                <h3>Platges Vinaros</h3>
                <p>Desarrollo de aplicación web y Gestión del servidor</p>
            </div>
        </a>

        <a href="#" target="_blank" id="work2" class="work" data-aos="fade-up">
            <img src="resources/7.png" alt="Skill 2" class="skill-grafica">
            <div>
                <h3>Sudle</h3>
                <p>Diseño UX/UI, Desarrollo de aplicación web y Gestión del servidor</p>
            </div>
        </a>

        <a href="https://www.behance.net/gallery/105478605/EasyField-Web-Application" target="_blank" id="work1" class="work" data-aos="fade-up">
            <img src="resources/2.png" alt="Skill 1" class="skill-grafica">
            <div>
                <h3>EasyField</h3>
                <p>Diseño UX/UI y Desarrollo de aplicación web</p>
            </div>
        </a>

        <a href="https://www.behance.net/gallery/101300163/4Real-Clothing-Website" target="_blank" id="work2" class="work" data-aos="fade-up">
            <img src="resources/3.png" alt="Skill 2" class="skill-grafica">
            <div>
                <h3>4Real Clothing</h3>
                <p>Diseño UX/UI, Desarrollo de aplicación web y Gestión del servidor</p>
            </div>
        </a>

        <a href="https://www.behance.net/gallery/92052491/Anxiety-Media-Creative-Corporation" target="_blank" id="work1" class="work" data-aos="fade-up">
            <img src="resources/4.png" alt="Skill 3" class="skill-grafica">
            <div>
                <h3>Anxiety Media</h3>
                <p>Diseño UX/UI y Desarrollo de aplicación web y Gestión del servidor</p>
            </div>
        </a>

        <a href="https://hatsukimanga.com" target="_blank" id="work2" class="work" data-aos="fade-up">
            <img src="resources/5.png" alt="Skill 4" class="skill-grafica">
            <div>
                <h3>Hatsuki</h3>
                <p>Diseño UX/UI, Desarrollo de aplicación web y Gestión del servidor</p>
            </div>
        </a>
    </section>

    <!-- Contacto -->
    <h2 id="form" class="titulo-h2 titulo-habilidades titulo-last" data-aos="fade-right">Contacto</h2>
    <p class="texto-servicio" data-aos="fade-right">¡Contáctame para lo que necesites!</p>
    <section class="section-form" data-aos="fade-up">
        <form method="post">
            <label for="nombre">Nombre</label>
            <input class="css-input" name="nombre" id="nombre" type="text" placeholder="Escribe tu nombre" required>
            <label for="email">Email</label>
            <input class="css-input" name="email" id="email" type="email" placeholder="Escribe tu email" required>
            <label for="email">Mensaje</label>
            <textarea class="css-input" name="mensaje" id="mensaje" cols="30" rows="4" placeholder="Escribe tu mensaje" required></textarea>
            <p class="info">Al hacer click en Enviar, aceptas que alejandrolosa.es guarde y haga uso de esta información personal.
            </p>
            <button id="submit" class="btn-grad" type="submit">Enviar</button>
          </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>Copyright © 2020 alejandrolosa.es | <a href="terminos">Términos y condiciones</a> | <a href="cookies">Política de cookies</a></p>
    </footer>

    <!-- Cookies -->
    <?php
        if(!isset($_COOKIE["aceptar-cookies-alejandro"])){ ?>
        <section class="cookies">
            <div class="div-uno">
                <h3>Cookies</h3>
                <p>Este sitio utiliza cookies para mejorar el servicio. Si continúa, se considera que acepta el uso. <a class="a-fu" href="cookies">Más info.</a></p>
            </div>
            <div class="div-dos">
                <a class="aceptar-cookies">Aceptar</a>
            </div>
        </section>
	<?php
	}
	?>
    
</body>

    <!-- Scripts -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8d96a2d252.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>

    <!-- Kursor.js -->
    <script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
    <script>
        AOS.init();

        new kursor({
            type: 2,
            removeDefaultCursor: true,
            color: "#02edac"
        });
        
        $('#logo').on('mouseenter', () => {
            if($(window).scrollTop() > 50){
                $('#lgo').attr('src', 'resources/l2.svg');
            } else {
                $('#lgo').attr('src', 'resources/logoanimadp.svg');
            }
            
        })
        .on('mouseout', () => {
            if($(window).scrollTop() > 50){
                $('#lgo').attr('src', 'resources/l1.svg');
            } else {
                $('#lgo').attr('src', 'resources/logoblack.svg');
            }
        });

        $('#cta').on('click', () => {
			window.location.href = "#form";
        })
        
        var activeMenu = 0;
        
        $(document).ready(function(){
            $(".hamburger").click(function(){

                $('.hamburger').toggleClass("is-active");
                $('.hamburger').children().toggleClass("burger-click");

                $("nav").stop().slideToggle();
                if(activeMenu == 0){
                    $('html').css({
                        overflow: 'hidden'
                    });
                    $("#lgo").stop().animate({opacity: '0%'});
                    activeMenu = 1;
                } else {
                    $('html').css({
                        overflow: 'auto'
                    });
                    $("#lgo").stop().animate({opacity: '100%'});
                    activeMenu = 0;
                }
            });
        });

        $('.link-menu').on('click', () => {
            $('.hamburger').removeClass("is-active");
            $('.hamburger').children().removeClass("burger-click");
            $("nav").stop().slideToggle();
            $('html').css({ overflow: 'auto' });
            $("#lgo").stop().animate({opacity: '100%'});
            activeMenu = 0;
        })

        $(window).on("scroll", function() {
            if($(window).scrollTop() > 50) {
                $(".header").addClass("headeroff");
                $("#lgo").attr('src', 'resources/l1.svg');
                $(".link-main").addClass('blanco');
                $(".link-socials").addClass('blanco-social');
                $(".line").css('background-color', '#fafafa');
                $(".scroll").stop().animate({opacity: '0%'}, 250);
            } else {
                $(".header").removeClass("headeroff");
                $("#lgo").attr('src', 'resources/logoblack.svg');
                $(".link-main").removeClass('blanco');
                $(".link-socials").removeClass('blanco-social');
                $(".line").css('background-color', '#171717');
                $(".scroll").stop().animate({opacity: '100%'}, 250);
            }
        });

        // Smooth scrolling
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
            ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                scrollTop: target.offset().top
                }, 100, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                };
                });
            }
            }
        });
        
        $('#submit').on('click', (event) => {
            event.preventDefault();
            var formData = $('form').serialize();

            $.ajax({
				type: "post",
				url: "mail.php",
				data: formData
			})
			.done(function(res){
                $('.alert').show();
                $('input').val('');
                $('textarea').val('');
                setTimeout(() => {
                    $('.alert').hide();
                }, 2000)
            })
        })

        $('.aceptar-cookies').on('click', function(){
			var d = new Date();
            d.setTime(d.getTime() + (365*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
			document.cookie = "aceptar-cookies-alejandro=true; expires="+expires+";";
			$('.cookies').css('display', 'none');
		})

        (function() {
            if (document.location.hash) {
                setTimeout(function() {
                    window.scrollTo(window.scrollX, window.scrollY - 100);
                }, 10);
            }
        })();
    </script>
</html>