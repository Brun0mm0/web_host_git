const btnForm = document.getElementById('formularios-discapacidad');
// const mostrar = () => {
    //     console.log('click')
    // }
    
    class formularios {
        
        _render(el) {
            // console.log(el)
            this._generarMarkUp()
        }
        
        _generarMarkUp() {
            const template = document.createElement('template');
            const html = `
            <div class="modal__disc">
            <div class="modal__disc-window">
            <div class="modal__disc-cerrar">
            <button class="modal__disc-button">x</button>
            </div>
            <div class="modal__disc-titulo">
            <h3>Formularios</h3>
            </div>
            <div class="modal__disc-listas">
            <ul class="modal__disc-list">
            <li><a download href="./imagenes/1_Conformidad_Afiliado.pdf"><p><i class="fa-regular fa-file-pdf"></i>Conformidad Afiliado</p></a></li>
                        <li><a download href="./imagenes/2_resumen_historia_clinica2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>Resumen Historia Clínica</p></a></li>
                        <li><a download href="./imagenes/3_orden_medica_prestaciones2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>Presentaciones Orden Médica</p></a></li>
                        <li><a download href="./imagenes/4_orden_medica_transporte2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>Transporte Orden Médica</p></a></li>
                        <li><a download href="./imagenes/5_Presupuesto_Establecimientos2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>Presupuesto Establecimientos</p></a></li>
                        <li><a download href="./imagenes/6_Presupuesto_Transporte2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>Presupuesto Transportes</p></a></li>
                        <li><a download href="./imagenes/7_PresupuestoModulos2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>Módulos Presupuestos</p></a></li>
                        <li><a download href="./imagenes/8_acta_integracion_2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>Acta Integración</p></a></li>
                        <li><a download href="./imagenes/9_FIM2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>FIM</p></a></li>
                        <li><a download href="./imagenes/10_planilla_datos_socio_2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>Planilla Datos Socios</p></a></li>
                        <li><a download href="./imagenes/11_planilla_de_asistencia2024.pdf" target="_blank"><p><i class="fa-regular fa-file-pdf"></i>Planilla de Asistencia</p></a></li>
                        </ul>
                        </div>
                        </div>
                        </div>
                        `;
                        
            template.innerHTML = html;

            
            const modal = template.content.querySelector('.modal__disc');
            const window = template.content.querySelector('.modal__disc-window');
            const btnCerrar = template.content.querySelector('.modal__disc-button');
            
            btnCerrar.addEventListener('click', () => {
                window.classList.add('modal__disc-closeRotateOut')
                modal.classList.add('modal__disc-closeFadeOut')

                modal.addEventListener('animationend', ()=>{
                    document.body.removeChild(modal)
                }) 
            })
            
            document.body.appendChild(template.content);
        }
                    
                }
                
btnForm.addEventListener('click', () => {
    const formClass = new formularios();
    formClass._render(btnForm);
})
                // document.addEventListener('DOMContentLoaded', function() {
                    // const form = new formularios();
                    // form._render();
                    // formulariosInstance._generarMarkUp();
                    //   });
                    
                    // form._render();