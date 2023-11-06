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
                <h3 class="cards__card__body-titulo">campaña vacunación antigripal 2023</h3>
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
        <!-- <div class="cards__card">
            <img src="./imagenes/poba.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">POBA</h3>
                <p>Ingresa a la web de la policlínica bancaria</p>
                <br>
                <a href="https://www.policlinicabancaria.com.ar/" class="cards__card__body-item"><i class="fa-solid fa-caret-right fa-2xl"></i></i><p>Ingresar</p></a>
            </div>
        </div> -->
        <div class="cards__card">
            <img src="./imagenes/icono_discapacidad.png" alt="">
            <div class="cards__card__body">
                <h3 class="cards__card__body-titulo">manual instructivo de discapacidad</h3>
                <p>Instructivo para beneficiarios 2023</p>
                <a href="./imagenes/manual-de-procedimiento-2023.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>Descargue aquí el  manual de procedimiento</p></a>
                <a href="./imagenes/formularios-2023.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>Descargue aquí los  formularios</p></a>
                <!-- <br> -->
                <!-- <p>Otros Links de Interés</p> -->
                <a href="./imagenes/instructivo-facturacion-2023.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>instructivo de facturación</p></a>
                <!-- <a href="./imagenes/ANEXO-II.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>anexo II</p></a> -->
                <!-- <a href="./imagenes/ANEXO-III.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>anexo III</p></a> -->
                
                <!-- <ul class="nav__list">
                    <li> 
                        <a href="#!">Otros Links de Interés <span class="material-symbols-outlined">expand_more</span></a>
                        <ul class="nav-dropdown"> -->
                            <!-- <li><a href="./imagenes/Guia-Prestaciones-Discapacidad.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>guía de prestaciones</p></a></li> -->
                            <!-- <li><a href="./imagenes/i-c_modelo.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>resumen de historia clínica</p></a></li> -->
                            <!-- <li><a href="./imagenes/instructivo-facturacion-2023.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>instructivo de facturación</p></a></li>
                            <li><a href="./imagenes/ANEXO-II.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>anexo II</p></a></li>
                            <li><a href="./imagenes/ANEXO-III.pdf" class="cards__card__body-item"><i class="fa-solid fa-download fa-2xl"></i><p>anexo III</p></a></li> -->
                        <!-- </ul>
                    </li>
                </ul> -->
                
                <!-- <div class="cards__card__body-item"> -->
                
                
                
                
                
            <!-- </div> -->
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
                    <h2>recetas digitales</h2>
                </div>
                    <br>
                    <div class="modal__body">
                    <p>De acuerdo a la Ley 27553/2020 y su Decreto Reglamentario PEN 98/2023, los profesionales de la salud pueden prescribir medicamentos de la siguiente manera:</p>
                <br>
                    <h3>RECETAS VÁLIDAS</h3>
                    <br>
                <p><b><em>Requisitos de validez</em></b></p>
                <p>Las recetas electrónicas o digitales con los siguientes requisitos:</p>
                <ul>
                    <li>
                        <p><b>Identificación</b>: debe tener identificador único e irrepetible para identificarla en forma unívoca. <span><b>Es válida para único uso</b></span>. El formato de esta identificación será definido por la autoridad de aplicación.</p>
                    </li>
                    <li>
                        <p><b>Contenido</b>: Debe tener la siguiente información en idioma nacional: <em>nombre, apellido, profesión, número de matrícula, domicilio, número telefónico y correo electrónico del profesional de la salud. Debe tener fecha y estar firmadas en forma manuscrita, electrónica o digital.</em></p>
                    </li>
                    <li>
                        <p><b>Vigencia</b>: Debe tener la fecha de inicio de vigencia, la que puede ser igual o posterior a la fecha de la receta. Tiene una validez por 30 días corridos a para los medicamentos y 60 días para otras prescripciones, salvo excepciones.</p>
                    </li>
                    <li>
                        <p><b>Integridad e inalterabilidad</b>: el documento electrónico o digital, cualquiera sea su soporte, deberá ser íntegro e inalterable. Cada medicamento se debe entregar por única vez.</p>
                    </li>
                    <li>
                        <p><b>Seguridad y confidencialidad</b>: la receta debe cumplir con los estándares de seguridad, disponibilidad, inviolabilidad y protección de datos personales, conforme la normativa vigente.</p>
                    </li>
                    <li>
                        <p><b>Interoperabilidad</b>: La interoperabilidad es la capacidad de los sistemas para intercambiar, utilizar y aplicar información. La receta digital o electrónica deberá usar estándares que permitan el intercambio y el uso de la información con fines sanitarios, estadísticos, de fiscalización y epidemiológicos.</p>
                    </li>
                </ul>
                <br>
                <h3>RECETAS NO VÁLIDAS</h3>
                <br>
                <p>Las fotos de las recetas enviadas por WhatsApp, correo electrónico o a través de la web.</p>
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
    <script src="./components/script.js?1"></script>
    <script type="text/javascript">var s=document.createElement("script");s.src="https://api.wcx.cloud/widget/?id=c6f4c0a3e0cc456b9e75c2031ae68fb3";document.head.appendChild(s);</script>
</body>
</html>