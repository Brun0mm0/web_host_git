// Importar SheetJS (XLSX.js) desde un CDN
import * as XLSX from 'https://cdn.jsdelivr.net/npm/xlsx@0.17.0/dist/xlsx.full.min.js';

// Función para descargar el archivo .xlsx
function downloadXlsx(e) {
    // console.log(e)
    e.preventDefault()

    // Crea un objeto FormData para capturar todos los datos del formulario
    const form = document.getElementById("formCartilla");
    const formData = new FormData(form);
    console.log(formData)
    // Accede a los valores por el nombre de los campos
    const plan = formData.get("plan");
    const provincia = formData.get("provincia");

    const fileUrl = `../../imagenes/cartillas/Cartilla-${provincia}.xlsx`
    const link = document.createElement("a");

    link.href = fileUrl
    link.download = `${provincia}`

    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);

    e.target.reset()
}

// Función para cargar el formulario en la página
function loadFormulario() {
    fetch('../components/FormularioCartillas/formularioCartillas.html')
        .then(response => response.text())
        .then(html => {
            const container = document.getElementById("formulario-container")
            // console.log(html)
            container.innerHTML = html;

            const from = document.getElementById("formCartilla");
            from.addEventListener("submit",downloadXlsx)
        })
        .catch(error => console.error("Error al cargar el formulario:", error));
}

// Llama a la función para cargar el formulario al cargar la página
document.addEventListener("DOMContentLoaded", loadFormulario);
