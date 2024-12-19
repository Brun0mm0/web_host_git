<?php
    include('./components/top.html');
    ?>
<body>
<?php
    include('./components/header.html');
    ?>
    <section class="hero ">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-item" id="swip-credencial">
                        <div class="swiper-slide-text">
                            <h2>Registrate y descarga tu credencial.</h2>
                            <a href="http://credencialweb.osssb.com.ar">Ingresa aquí</a>
                        </div>
                        <div class="swiper-slide-imagen">
                            <img src="./imagenes/Cartilla.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-item">
                        <div class="swiper-slide-text">
                            <h2>Conoce tu plan y tus beneficios.</h2>
                            <a href="./pages/planes.php">Ingresa aquí</a>
                        </div>
                        <div class="swiper-slide-imagen">
                            <img src="./imagenes/planes-web-02.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-item">
                        <div class="swiper-slide-text">
                            <h2>Desde tu credencial podes acceder a tu cartilla y encontrar tus lugares de atención, farmacias y ópticas.</h2>
                            <a href="http://credencialweb.osssb.com.ar">Ingresa aquí</a>
                        </div>
                        <div class="swiper-slide-imagen">
                            <img src="./imagenes/cartilla-web.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-item">
                        <div class="swiper-slide-text">
                            <h2>Servicios sociales bancarios, cuida tu salud</h2>
                        </div>
                        <div class="swiper-slide-imagen">
                            <img src="./imagenes/logoBancarios-slider.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="nav" id="nav-header">
            <div class="nav__btn nav__btn__verde"><a href="/pages/quiero-afiliarme.php"><p>Quiero Afiliarme</p></a></div>
            <div class="nav__btn nav__btn__azul-oscuro"><a href="/pages/planes.php"><p>Planes</p></a></div>
            <div class="nav__btn nav__btn__azul"><a href="http://credencialweb.osssb.com.ar"><p>Portal Web</p></a></div>
            <div class="nav__btn nav__btn__celeste"><a href="/pages/coseguros.php"><p>Coseguros</p></a></div>
    </section>
    <!-- ##### -->
    <!-- cards -->
    <!-- ##### -->
    <section class="cards">
        
        <div class="cards__card">
            <img src="./imagenes/ImagenVacuna.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">campaña vacunación antigripal 2024</h3>
                <p>Ingresa al link para descargar el instructivo y ver las sedes donde vacunarte</p>
                <br>
                <a href="/pages/vacunacion.php" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>Saber mas ...</p></a>
            </div>
        </div>
        <div class="cards__card">
            <img src="./imagenes/traslados.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">traslados</h3>
                <p>Traslados y derivaciones</p>
                <br>
                <p><b>0800-222-3462<br>
                <em>opción 4</em></b></p>
                <div class="cards__card__body-bd">
                    <p>Normativa Traslados Programados</p>
                    <a href="./imagenes/anexo1normativo.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>Anexo I</p></a>
                    <p>Formulario Solicitud de Servicios de Traslados</p>
                    <a href="./imagenes/anexo2formulario.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>Anexo II</p></a>
                </div>
            </div>
        </div>
        <div class="cards__card">
            <img src="./imagenes/icono_discapacidad.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">manual instructivo de prestaciones para personas con discapacidad</h3>
                <p>Instructivo para beneficiarios 2025</p>
                <a href="./imagenes/instructivo-discapacidad-2025.pdf" class="cards__card__body-item" target="_blank"><i class="fa-solid fa-download fa-2xl"></i><p>Descargue aquí el  manual de procedimiento</p></a>
                <a href="./imagenes/instructivo-facturacion.pdf" class="cards__card__body-item" target="_blank"><i class="fa-solid fa-download fa-2xl"></i><p>instructivo de facturación</p></a>
                <a href="./imagenes/formularios-2025.pdf" class="cards__card__body-item" id="formularios-discapacidad" target="_blank"><i class="fa-solid fa-download fa-2xl"></i><p>Descargue aquí los  formularios</p></a>
            </div>
        </div>
    </section>
    <div class="modal" id="homeModal">
        <div class="modal__contenedor">
            <div class="modal__contenido">

                <div class="modal__header">
                    <div>
                        <button class="modal__button">x</button>
                    </div>
                    <h2>recetas electrónicas, ley 27.553</h2>
                </div>
                    <br>
                    <div class="modal__body">
                    <p>Dada la implementación de la <b>ley 27.553</b> de recetas electrónicas y las normas complementarias dictadas recientemente para su implementación,
                         se pone en su conocimiento que <b>a partir del 1° de Enero de 2025, será obligatoria la prescripción de medicación y  practicas médicas diagnósticas o terapéuticas en formato electrónico.</b></p>
                
            </div>
        </div>
        </div>
    </div>
    <!-- ###### -->
    <!-- footer -->
    <!-- ###### -->
    
    <?php
    include('./components/footer.html');
    ?>
    <?php 
    include('./components/emergencias.html');
    ?>

    <!-- <script src="./components/formularios-discapacidad.js"></script> -->
    <script src="./components/script.js?1"></script>
    <script type="text/javascript">var s=document.createElement("script");s.src="https://api.wcx.cloud/widget/?id=c6f4c0a3e0cc456b9e75c2031ae68fb3";document.head.appendChild(s);</script>
</body>
</html>