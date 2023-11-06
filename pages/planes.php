<?php include('../components/top.html'); ?>

<body>
    <?php include('../components/header.html'); ?>

    <div class="container planes">

        <h2>Planes</h2>
        <div>
            <p><a href="#s100"># <em>plan</em> S-100</a></p>
            <p><a href="#s200"># <em>plan</em> S-200</a></p>
            <p><a href="#s300j"># <em>plan</em> S-300J</a></p>
            <p><a href="#s300e"># <em>plan</em> S-300E</a></p>
        </div>
        <p>Conocé mas del <em>plan médico asistencial</em> <a href="./pmo.php">ingresando aquí</a></p>
        <div class="planes__encabezado" id="s100">
            <div class="planes__encabezado-texto">
                <h3>cuadro de cobertura plan s-100</h3>
                <div class="planes__encabezado-parrafo">
                    <p><b>Referencias:</b></p>
                    <p>S/C: Sin coseguro.</p>
                    <p>S/L: Sin límite de dinero.</p>
                    <p>S/T: Sin tope anual.</p>
                    <p>C/T: Con topes anual.</p>
                    <p>C/C: Con coseguro.</p>
                </div>
            </div>

                            <!-- FIXME: s-100  -->

            <div class="planes__encabezado-imagen">
                <img src="../imagenes/s100.png" alt="">
            </div>
        </div>
        <table>
            <tr> <!-- TODO: head -->
                <th>emergencias, urgencias, visitas domiciliarias, traslados</th>
                <th style="width:20%"><small></small></th>
            </tr>
            <tr>
                <td>emergencia domiciliaria (códigos rojo y amarillo)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>Visitas de Médico a Domicilio (Código Verde)</td>
                <td>c/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>traslados en ambulancia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>   <!-- TODO: head -->
                <th>consultas</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>En Ambulatorio</td>
                <td>C/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>En Domicilio</td>
                <td>C/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>En Internación</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>    <!-- TODO: head -->
                <th>ESTUDIOS Y PRÁCTICAS DE DIAGNÓSTICO Y TRATAMIENTO</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>En Ambulatorio</td>
                <td>c/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>En ambulatorio - Estudios de Alta Complejidad</td>
                <td>c/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>En Internación</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>rehabilitación</th>  <!-- TODO: head -->
                <th><small></small></th>
            </tr>
            <tr>
                <td>kinesiología - fisioterapia (25 sesiones / año)</td>
                <td>c/t - s/l - c/c</td>
            </tr>
            <tr>
                <td>fonoaudiología (25 sesiones / año)</td>
                <td>c/t - s/l - c/c</td>
            </tr>
            <tr>
                <th>salud mental</th>   <!-- TODO: head -->
                <th><small></small></th>
            </tr>
            <tr>
                <td>psicología / psiquiatría / psicopedagogía (30 sesiones por benef. / año)</td>
                <td>c/t - s/l - c/c</td>
            </tr>
            <tr>
                <td>internación psiquiátrica</td>
                <td>s/t - s/l - s/c</td>
            </tr>
            <tr>
                <td>urgencias psiquiátricas</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>servicio de internación</th>  <!-- TODO: head -->
                <th><small></small></th>
            </tr>
            <tr>
                <td>clínica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>quirúrgica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>alta complejidad (cardiocirugía, neurocirugía, neonatología, <span>uti</span>, <span>uco</span>)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>honorarios en internación</th> <!-- TODO: head -->
                <th><small></small></th>
            </tr>
            <tr>
                <td>clínico</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>quirúrgicos</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>pensión sanatorial</th>
                <th></th>
            </tr>
            <tr>
                <td>habitación compartida</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>acompañante en internación</th>  <!-- TODO: head -->
                <th></th>
            </tr>
            <tr>
                <td>solamente para menores de 15 años</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>medicamentos y material descartable en internación</th>
                <th></th>
            </tr>
            <tr>
                <td>en todo tipo de internaciones 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>prótesis quirúrgica</th>
                <th></th>
            </tr>
            <tr>
                <td>internas, con autorización previa de la gerencia de prestaciones: 100% de cobertura</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>maternidad</th>
                <th></th>
            </tr>
            <tr>
                <td>atención ambulatoria del embarazo</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>curso de psicoprofilaxis del parto</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>internación y honorarios parto / cesárea 100%</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>honorarios de anestesista 100%</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>atención del <span>RN</span> hasta os tres años de edad 100%</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <th>vacunas</th>
                <th></th>
            </tr>
            <tr>
                <td>vacunas obligatorias</td>
                <td>100%</td>
            </tr>
            <tr>
                <th>odontología</th>
                <th></th>
            </tr>
            <tr>
                <td>odontología general</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>odontopediatría</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>radiología / endodoncia / periodoncia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>medicamentos</th>
                <th></th>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, ambulatorio recetas patologías agudas</td>
                <td>40%</td>
            </tr>
            <tr>
                <td>descuento de farmacias adheridas, ambulatorio recetas patologías crónicas</td>
                <td>70%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas plan materno-infantil</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas en prácticas ambulatorias</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas de patologías relacionadas con discapacidad</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos oncológicos, a través de provisión centralizada</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos inmunosupresores, a través de provisión centralizada</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos de internación</td>
                <td>100%</td>
            </tr>
            <tr>
                <th>alta complejidad medica (diagnóstica y terapéutica)</th>
                <th></th>
            </tr>
            <tr>
                <td>hemodinamia</td>
                <td>s/c - s/t - s/l</td>
            </tr>   
            <tr>
                <td>colocación de marcapasos definitivo</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>cirugía cardiovascular con y sin circulación extracorpórea</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>neurocirugía intracraneana</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>cirugía oftalmológica compleja</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>hemodiálisis</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>radioterapia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>óptica</th>
                <th></th>
            </tr>
            <tr>
                <td>un par de anteojos monofocales standard por año, por persona</td>
                <td>100%</td>
            </tr>
            <tr>
                <th>prótesis internas, externas, ortesis y audífonos</th>
                <th></th>
            </tr>
            <tr>
                <td>prótesis internas, provisión de banco de prótesis previa al acto quirúrgico</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>prótesis externas</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>ortesis</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>audífonos (por integrante), con certificado de discapacidad</td>
                <td>100%</td>
            </tr>
            <tr>
                <th>internación domiciliaria</th>
                <th></th>
            </tr>
            <tr>
                <td>con autorización previa de la gerencia de prestaciones</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>adicciones</th>
                <th></th>
            </tr>
            <tr>
                <td>ambulatorio</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>internación en comunidades terapéuticas contratadas, con autorización previa de auditoría, máximo un año</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>discapacidad</th>
                <th></th>
            </tr>
            <tr>
                <td>atención de patologías relacionadas con el certificado de discapacidad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>programas preventivos</th>
                <th></th>
            </tr>
            <tr>
                <td>programa de salud sexual y reproductiva; programa de prevención de hipertensión arterial; programa de detección precoz de cáncer de mama; de cuello uterino, de colon</td>
                <td></td>
            </tr>
        </table>
       <hr>
        <div class="planes__encabezado" id="s200">
            <div class="planes__encabezado-imagen">
                <img src="../imagenes/s200.png" alt="">
            </div>
            <div class="planes__encabezado-texto">
                <h3>cuadro de cobertura plan s-200</h3>
                <div class="planes__encabezado-parrafo">
                    <p><b>Referencias:</b></p>
                    <p>S/C: Sin coseguro.</p>
                    <p>S/L: Sin límite de dinero.</p>
                    <p>S/T: Sin tope anual.</p>
                    <p>C/T: Con topes anual.</p>
                    <p>C/C: Con coseguro.</p>
                </div>
            </div>
        </div>
                    <!-- FIXME: s-200 -->
                    <table>
            <tr> <!-- TODO: head -->
                <th>emergencias, urgencias, visitas domiciliarias, traslados</th>
                <th style="width:20%"><small></small></th>
            </tr>
            <tr>
                <td>emergencia domiciliaria (códigos rojo y amarillo)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>Visitas de Médico a Domicilio (Código Verde)</td>
                <td>c/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>traslados en ambulancia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>   <!-- TODO: head -->
                <th>consultas</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>En Ambulatorio</td>
                <td>C/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>En Domicilio</td>
                <td>C/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>En Internación</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>    <!-- TODO: head -->
                <th>ESTUDIOS Y PRÁCTICAS DE DIAGNÓSTICO Y TRATAMIENTO</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>En Ambulatorio</td>
                <td>c/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>En ambulatorio - Estudios de Alta Complejidad</td>
                <td>c/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>En Internación</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>rehabilitación</th>  <!-- TODO: head -->
                <th><small></small></th>
            </tr>
            <tr>
                <td>kinesiología - fisioterapia (25 sesiones / año)</td>
                <td>c/t - s/l - c/c</td>
            </tr>
            <tr>
                <td>fonoaudiología (25 sesiones / año)</td>
                <td>c/t - s/l - c/c</td>
            </tr>
            <tr>
                <th>salud mental</th>   <!-- TODO: head -->
                <th><small></small></th>
            </tr>
            <tr>
                <td>psicología / psiquiatría / psicopedagogía (30 sesiones por benef. / año)</td>
                <td>c/t - s/l - c/c</td>
            </tr>
            <tr>
                <td>internación psiquiátrica</td>
                <td>s/t - s/l - s/c</td>
            </tr>
            <tr>
                <td>urgencias psiquiátricas</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>servicio de internación</th>  <!-- TODO: head -->
                <th><small></small></th>
            </tr>
            <tr>
                <td>clínica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>quirúrgica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>alta complejidad (cardiocirugía, neurocirugía, neonatología, <span>uti</span>, <span>uco</span>)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>honorarios en internación</th> <!-- TODO: head -->
                <th><small></small></th>
            </tr>
            <tr>
                <td>clínico</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>quirúrgicos</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>pensión sanatorial</th>
                <th></th>
            </tr>
            <tr>
                <td>habitación compartida</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>acompañante en internación</th>  <!-- TODO: head -->
                <th></th>
            </tr>
            <tr>
                <td>solamente para menores de 15 años</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>medicamentos y material descartable en internación</th>
                <th></th>
            </tr>
            <tr>
                <td>en todo tipo de internaciones 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>prótesis quirúrgica</th>
                <th></th>
            </tr>
            <tr>
                <td>internas, con autorización previa de la gerencia de prestaciones: 100% de cobertura</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>maternidad</th>
                <th></th>
            </tr>
            <tr>
                <td>atención ambulatoria del embarazo</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>curso de psicoprofilaxis del parto</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>internación y honorarios parto / cesárea 100%</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>honorarios de anestesista 100%</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <td>atención del <span>RN</span> hasta os tres años de edad 100%</td>
                <td>S/C - S/T - S/L</td>
            </tr>
            <tr>
                <th>vacunas</th>
                <th></th>
            </tr>
            <tr>
                <td>vacunas obligatorias</td>
                <td>100%</td>
            </tr>
            <tr>
                <th>odontología</th>
                <th></th>
            </tr>
            <tr>
                <td>odontología general</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>odontopediatría</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>radiología / endodoncia / periodoncia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>medicamentos</th>
                <th></th>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, ambulatorio recetas patologías agudas</td>
                <td>40%</td>
            </tr>
            <tr>
                <td>descuento de farmacias adheridas, ambulatorio recetas patologías crónicas</td>
                <td>70%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas plan materno-infantil</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas en prácticas ambulatorias</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas de patologías relacionadas con discapacidad</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos oncológicos, a través de provisión centralizada</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos inmunosupresores, a través de provisión centralizada</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos de internación</td>
                <td>100%</td>
            </tr>
            <tr>
                <th>alta complejidad medica (diagnóstica y terapéutica)</th>
                <th></th>
            </tr>
            <tr>
                <td>hemodinamia</td>
                <td>s/c - s/t - s/l</td>
            </tr>   
            <tr>
                <td>colocación de marcapasos definitivo</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>cirugía cardiovascular con y sin circulación extracorpórea</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>neurocirugía intracraneana</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>cirugía oftalmológica compleja</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>hemodiálisis</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>radioterapia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>óptica</th>
                <th></th>
            </tr>
            <tr>
                <td>un par de anteojos monofocales standard por año, por persona</td>
                <td>100%</td>
            </tr>
            <tr>
                <th>prótesis internas, externas, ortesis y audífonos</th>
                <th></th>
            </tr>
            <tr>
                <td>prótesis internas, provisión de banco de prótesis previa al acto quirúrgico</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>prótesis externas</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>ortesis</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>audífonos (por integrante), con certificado de discapacidad</td>
                <td>100%</td>
            </tr>
            <tr>
                <th>internación domiciliaria</th>
                <th></th>
            </tr>
            <tr>
                <td>con autorización previa de la gerencia de prestaciones</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>adicciones</th>
                <th></th>
            </tr>
            <tr>
                <td>ambulatorio</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>internación en comunidades terapéuticas contratadas, con autorización previa de auditoría, máximo un año</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>discapacidad</th>
                <th></th>
            </tr>
            <tr>
                <td>atención de patologías relacionadas con el certificado de discapacidad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>programas preventivos</th>
                <th></th>
            </tr>
            <tr>
                <td>programa de salud sexual y reproductiva; programa de prevención de hipertensión arterial; programa de detección precoz de cáncer de mama; de cuello uterino, de colon</td>
                <td></td>
            </tr>
        </table>
       <hr>
        <div class="planes__encabezado" id="s300j">
            <div class="planes__encabezado-texto">
                <h3>cuadro de cobertura plan s-300J</h3>
                <div class="planes__encabezado-parrafo">
                    <p><b>Referencias:</b></p>
                    <p>S/C: Sin coseguro.</p>
                    <p>S/L: Sin límite de dinero.</p>
                    <p>S/T: Sin tope anual.</p>
                    <p>C/T: Con topes anual.</p>
                    <p>C/C: Con coseguro.</p>
                </div>
            </div>
            <div class="planes__encabezado-imagen">
                <img src="../imagenes/s300.png" alt="">
            </div>
        </div>
        <!-- FIXME: s-300j -->
        <table>
            <tr>
                <th>emergencia, urgencias, visita domiciliaria</th>
                <th style="width:20%"><small></small></th>
            </tr>
            <tr>
                <td>emergencia domiciliaria (código rojo y amarillo)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>visitas de médico a domicilio (código verde)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>traslados en ambulancia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>consultas</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>en ambulatorio y en internación</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- TODO: consulta -->
            <tr>
                <th>estudios y prácticas de diagnóstico y tratamiento</th>
                <th></th>
            </tr>
            <tr>
                <td>en ambulatorio e internación para baja, mediana y alta complejidad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: rehabilitacion -->
            <tr>
                <th>rehabilitación</th>
                <th></th>
            </tr>
            <tr>
                <td>fisioterapia, kinesioterapia - <small>máximo por año y por persona 50 sesiones </small></td>
                <td>c/t - s/l - s/c</td>
            </tr>
            <tr>
                <td>fonoaudiología - <small>máximo por año y por persona 50 sesiones</small></td>
                <td>c/t - s/l - s/c</td>
            </tr>
            <tr>
                <td><span>rpg</span> - <small>máximo por año y por persona 20 sesiones</small></td>
                <td>c/t - s/l - s/c</td>
            </tr>
            <!-- FIXME: salud mental -->
            <tr>
                <th>salud mental</th>
                <th></th>
            </tr>
            <tr>
                <td>psicología / psiquiatría / psicopedagogía - <small>máximo por año y por persona 50 sesiones</small></td>
                <td>c/t - s/l - s/c</td>
            </tr>
            <tr>
                <td>internación psiquiátrica. solo patologías agudas.</td>
                <td>s/t - s/l - s/c</td>
            </tr>
            <tr>
                <td>urgencias psiquiátricas</td>
                <td>s/t - s/l - s/c</td>
            </tr>
            <!-- FIXME: servicios en internacion -->
            <tr>
                <th>servicios en internación</th>
                <th></th>
            </tr>
            <tr>
                <td>clínica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>quirúrgica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>alta complejidad (cardiocirugía, neurocirugía, neonatología, <span>uti, uco</span>)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: honorarios de internacion -->
            <tr>
                <th>honorarios de internación</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>clínicos</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>quirúrgicos</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: pension sanatorial -->
            <tr>
                <th>pensión sanatorial</th>
                <th></th>
            </tr>
            <tr>
                <td>habitación individual según disponibilidad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: acompañante internacions -->
            <tr>
                <th>acompañante en internación</th>
                <th></th>
            </tr>
            <tr>
                <td>solamente para menores de 15 años de edad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: medicamentos y material descartable en internacion -->
            <tr>
                <th>medicamentos y material descartable en internación</th>
                <th></th>
            </tr>
            <tr>
                <td>en todo tipo de internaciones 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: protesis quirurgicas -->
            <tr>
                <th>prótesis quirúrgicas</th>
                <th></th>
            </tr>
            <tr>
                <td>internas, con autorización previa de auditoría, 100%</td>
            </tr>
            <!-- FIXME:  maternidad -->
            <tr>
                <th>maternidad</th>
                <th></th>
            </tr>
            <tr>
                <td>atención ambulatoria del embarazo</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>curso de psicoprofilaxis del parto</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>internación y honorarios parto / cesárea 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>honorarios de anestesista 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>atención del <span>rn</span> hasta los tres años de edad 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
           
            <!-- vacunas -->
            <tr>
                <th>vacunas</th>
                <th></th>
            </tr>
            <tr>
                <td>vacunas obligatorias</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>vacunas especiales</td>
                <td>50%</td>
            </tr>
            <!-- FIXME: odontologia -->
            <tr>
                <th>odontología</th>
                <th></th>
            </tr>
            <tr>
                <td>odontología general</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>odontopediatría</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>radiología / endodoncia / periodoncia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- medicamentos -->
            <tr>
                <th>medicamentos</th>
                <th></th>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, ambulatorio recetas patologías agudas</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, ambulatorio recetas patologías crónicas</td>
                <td>70%</td>
            </tr>
            <tr>
                <td>descuento de farmacias adheridas, ambulatorio recetas plan materno-infantil</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas en prácticas ambulatorias</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas relacionadas con patologías relacionadas con discapacidad</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos oncológicos, a través de provisión centralizada</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos inmunosupresores, a través de provisión centralizada</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos en internación</td>
                <td>100%</td>
            </tr>
           <!-- FIXME: alta complejidad medica-->
            <tr>
                <th>alta complejidad médica (diagnóstico y terapéutica)</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>hemodinamia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>colocación de marcapasos definitivo</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>cirugía cardiovascular con y sin circulación extracorpórea</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>neurocirugía intracraneana</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>cirugía oftalmológica compleja</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>hemodiálisis</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>radioterapia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- optica -->
            <tr>
                <th>óptica</th>
                <th></th>
            </tr>
            <tr>
                <td>un par de anteojos monofocales standard por año, por persona</td>
                <td>100%</td>
            </tr>
            <!-- FIXME: protesis int ext ortesis y audi -->
            <tr>
                <th>prótesis internas, externas, ortesis y audífonos</th>
                <th></th>
            </tr>
            <tr>
                <td>prótesis internas, provisión de banco de prótesis previa al acto quirúrgico</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>prótesis externas</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>ortesis</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>plantillas y zapatos ortopédicos, reintegro con tope en zapatos y en plantillas, uno por benef. y por año</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>audífono (por integrante), con certificado de discapacidad</td>
                <td>100%</td>
            </tr>
            <!-- FIXME: internacion domiciliaria -->
            <tr>
                <th>internación domiciliaria</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>con autorización previa de auditoría médica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: adicciones -->
            <tr>
                <th>adicciones</th>
                <th></th>
            </tr>
            <tr>
                <td>ambulatorio</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>internación en comunidades terapéuticas contratadas, con autorización previa de auditoría, <small>máximo un año</small></td>
                <td>s/c-s/t-s/l</td>
            </tr>
            <!-- FIXME: discapacidad -->
            <tr>
                <th>discapacidad</th>
                <th></th>
            </tr>
            <tr>
                <td>atención de patologías relacionadas con el certificado de discapacidad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- programas preventivos -->
            <tr>
                <th>programas preventivos</th>
                <th></th>
            </tr>
            <tr>
                <td>programa de salud sexual y reproductiva; programa de prevención de hipertensión arterial; programa de detección precoz de cancer de mama, cuello uterino, de colon; programa de prevención odontológica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
        </table>
       <hr>
        <div class="planes__encabezado" id="s300e">
            <div class="planes__encabezado-texto">
                <h3>cuadro de cobertura plan s-300E</h3>
                <div class="planes__encabezado-parrafo">
                    <p><b>Referencias:</b></p>
                    <p>S/C: Sin coseguro.</p>
                    <p>S/L: Sin límite de dinero.</p>
                    <p>S/T: Sin tope anual.</p>
                    <p>C/T: Con topes anual.</p>
                    <p>C/C: Con coseguro.</p>
                </div>
            </div>
            <div class="planes__encabezado-imagen">
                <img src="../imagenes/s300e.png" alt="">
            </div>
        </div>
        <!-- FIXME: s-300e -->
        <table>
            <tr>
                <th>emergencia, urgencias, visita domiciliaria</th>
                <th style="width:20%" > <sm a ll></small></th>
            </tr>
            <tr>
                <td>emergencia domiciliaria (código rojo y amarillo)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>visitas de médico a domicilio (código verde)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>traslados en ambulancia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <th>consultas</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>en ambulatorio y en internación</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- TODO: consulta -->
            <tr>
                <th>estudios y prácticas de diagnóstico y tratamiento</th>
                <th></th>
            </tr>
            <tr>
                <td>en ambulatorio e internación para baja, mediana y alta complejidad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: rehabilitacion -->
            <tr>
                <th>rehabilitación</th>
                <th></th>
            </tr>
            <tr>
                <td>fisioterapia, kinesioterapia - <small>máximo por año y por persona 50 sesiones </small></td>
                <td>c/t - s/l - s/c</td>
            </tr>
            <tr>
                <td>fonoaudiología - <small>máximo por año y por persona 50 sesiones</small></td>
                <td>c/t - s/l - s/c</td>
            </tr>
            <tr>
                <td><span>rpg</span> - <small>máximo por año y por persona 20 sesiones</small></td>
                <td>c/t - s/l - s/c</td>
            </tr>
            <!-- FIXME: salud mental -->
            <tr>
                <th>salud mental</th>
                <th></th>
            </tr>
            <tr>
                <td>psicología / psiquiatría / psicopedagogía - <small>máximo por año y por persona 50 sesiones</small></td>
                <td>c/t - s/l - s/c</td>
            </tr>
            <tr>
                <td>internación psiquiátrica. solo patologías agudas.</td>
                <td>s/t - s/l - s/c</td>
            </tr>
            <tr>
                <td>urgencias psiquiátricas</td>
                <td>s/t - s/l - s/c</td>
            </tr>
            <!-- FIXME: servicios en internacion -->
            <tr>
                <th>servicios en internación</th>
                <th></th>
            </tr>
            <tr>
                <td>clínica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>quirúrgica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>alta complejidad (cardiocirugía, neurocirugía, neonatología, <span>uti, uco</span>)</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: honorarios de internacion -->
            <tr>
                <th>honorarios de internación</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>clínicos</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>quirúrgicos</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: pension sanatorial -->
            <tr>
                <th>pensión sanatorial</th>
                <th></th>
            </tr>
            <tr>
                <td>habitación individual según disponibilidad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: acompañante internacions -->
            <tr>
                <th>acompañante en internación</th>
                <th></th>
            </tr>
            <tr>
                <td>solamente para menores de 15 años de edad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: medicamentos y material descartable en internacion -->
            <tr>
                <th>medicamentos y material descartable en internación</th>
                <th></th>
            </tr>
            <tr>
                <td>en todo tipo de internaciones 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: protesis quirurgicas -->
            <tr>
                <th>prótesis quirúrgicas</th>
                <th></th>
            </tr>
            <tr>
                <td>internas, con autorización previa de auditoría, 100%</td>
            </tr>
            <!-- FIXME:  maternidad -->
            <tr>
                <th>maternidad</th>
                <th></th>
            </tr>
            <tr>
                <td>atención ambulatoria del embarazo</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>curso de psicoprofilaxis del parto</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>internación y honorarios parto / cesárea 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>honorarios de anestesista 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>atención del <span>rn</span> hasta los tres años de edad 100%</td>
                <td>s/c - s/t - s/l</td>
            </tr>
           
            <!-- vacunas -->
            <tr>
                <th>vacunas</th>
                <th></th>
            </tr>
            <tr>
                <td>vacunas obligatorias</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>vacunas especiales</td>
                <td>50%</td>
            </tr>
            <!-- FIXME: odontologia -->
            <tr>
                <th>odontología</th>
                <th></th>
            </tr>
            <tr>
                <td>odontología general</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>odontopediatría</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>radiología / endodoncia / periodoncia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- medicamentos -->
            <tr>
                <th>medicamentos</th>
                <th></th>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, ambulatorio recetas patologías agudas</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, ambulatorio recetas patologías crónicas</td>
                <td>70%</td>
            </tr>
            <tr>
                <td>descuento de farmacias adheridas, ambulatorio recetas plan materno-infantil</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas en prácticas ambulatorias</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>descuento en farmacias adheridas, recetas relacionadas con patologías relacionadas con discapacidad</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos oncológicos, a través de provisión centralizada</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos inmunosupresores, a través de provisión centralizada</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>medicamentos en internación</td>
                <td>100%</td>
            </tr>
           <!-- FIXME: alta complejidad medica-->
            <tr>
                <th>alta complejidad médica (diagnóstico y terapéutica)</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>hemodinamia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>colocación de marcapasos definitivo</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>cirugía cardiovascular con y sin circulación extracorpórea</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>neurocirugía intracraneana</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>cirugía oftalmológica compleja</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>hemodiálisis</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>radioterapia</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- optica -->
            <tr>
                <th>óptica</th>
                <th></th>
            </tr>
            <tr>
                <td>un par de anteojos monofocales standard por año, por persona</td>
                <td>100%</td>
            </tr>
            <!-- FIXME: protesis int ext ortesis y audi -->
            <tr>
                <th>prótesis internas, externas, ortesis y audífonos</th>
                <th></th>
            </tr>
            <tr>
                <td>prótesis internas, provisión de banco de prótesis previa al acto quirúrgico</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>prótesis externas</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>ortesis</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>plantillas y zapatos ortopédicos, reintegro con tope en zapatos y en plantillas, uno por benef. y por año</td>
                <td>50%</td>
            </tr>
            <tr>
                <td>audífono (por integrante), con certificado de discapacidad</td>
                <td>100%</td>
            </tr>
            <!-- FIXME: internacion domiciliaria -->
            <tr>
                <th>internación domiciliaria</th>
                <th><small></small></th>
            </tr>
            <tr>
                <td>con autorización previa de auditoría médica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: adicciones -->
            <tr>
                <th>adicciones</th>
                <th></th>
            </tr>
            <tr>
                <td>ambulatorio</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <tr>
                <td>internación en comunidades terapéuticas contratadas, con autorización previa de auditoría, <small>máximo un año</small></td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- FIXME: discapacidad -->
            <tr>
                <th>discapacidad</th>
                <th></th>
            </tr>
            <tr>
                <td>atención de patologías relacionadas con el certificado de discapacidad</td>
                <td>s/c - s/t - s/l</td>
            </tr>
            <!-- programas preventivos -->
            <tr>
                <th>programas preventivos</th>
                <th></th>
            </tr>
            <tr>
                <td>programa de salud sexual y reproductiva; programa de prevención de hipertensión arterial; programa de detección precoz de cancer de mama, cuello uterino, de colon; programa de prevención odontológica</td>
                <td>s/c - s/t - s/l</td>
            </tr>
        </table>
    </div>
    <?php 
    include('../components/emergencias.html');
    include('../components/footer.html'); ?>

    
</body>
</html>