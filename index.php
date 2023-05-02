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
            <div class="nav__btn nav__btn__celeste"><a href="/pages/afiliado-adherente.php"><p>Afiliado Adherente</p></a></div>
    </section>
    <!-- ##### -->
    <!-- cards -->
    <!-- ##### -->
    <section class="cards">
        
        <div class="cards__card">
            <img src="./imagenes/ImagenVacuna.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">campaña vacunación antigripal 2023</h3>
                <p>Ingresa al link que corresponda para descargar el instructivo y ver las sedes donde vacunarte</p>
                <br>
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>CABA - GBA</p></a>
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>INTERIOR</p></a>
            </div>
        </div>
        <!-- <div class="cards__card">
            <img src="./imagenes/pmo.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">programa médico obligatorio</h3>
                <p>La Obra Social realiza su oferta prestacional en los tres niveles de atención a través de efectores individuales, redes de efectores contratados y con sus efectores propios. La red de prestadores abarca toda la geografía nacional.
                    Conce mas del programa ingresando en el link.
                </p>
                <br>
                <a href="./pages/pmo.php" class="cards__card__body-item"><i class="fa-solid fa-caret-right fa-2xl"></i><p>conocer más...</p></a>
            </div>
        </div> -->
        <div class="cards__card">
            <img src="./imagenes/traslados.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">traslados</h3>
                <p>Traslados y derivaciones</p>
                <br>
                <p><b>0800-222-3462</b></p>
                <br>
                <p><b>Opción 4</b></p>
                <div class="cards__card__body-bd">
                    <p>Normativa Traslados Programados</p>
                    <a href="./imagenes/anexo1normativo.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>Anexo I</p></a>
                    <p>Formulario Solicitud de Servicios de Traslados</p>
                    <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>Anexo II</p></a>
                </div>
            </div>
        </div>
        <div class="cards__card">
            <img src="./imagenes/familia.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">Medicación</h3>
                <p>Medicación</p>
                <br>
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-caret-right fa-2xl"></i></i><p>Ver más...</p></a>
            </div>
        </div>
        <div class="cards__card cards__card-big">
            <img src="./imagenes/icono_discapacidad.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">manual instructivo de discapacidad</h3>
                <p>Instructivo para beneficiarios 2023</p>
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>Descargue aquí el  manual de procedimiento</p></a>
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>Descargue aquí los  formularios</p></a>
                <br>
                <p>Otros Links de Interés</p>
                <!-- <div class="cards__card__body-item"> -->
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>guía de prestaciones</p></a>
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>resumen de historia clínica</p></a>
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>instructivo de facturación</p></a>
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>anexo II</p></a>
                <a href="" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>anexo III</p></a>
            <!-- </div> -->
            </div>
        </div>
    </section>
    <!-- ###### -->
    <!-- footer -->
    <!-- ###### -->
    <?php
        include('./components/footer.html');
        ?>
    <script src="./components/script.js?1"></script>
</body>
</html>