<?php
//cargo la librería donde esta la cabecera con todas las funciones javascrips y jquery.
include "res/biblioteca.php";
 cabecera("Crea tu CV. Rellena los datos del formulario");
 // Inicio del Formulario.
 print "
 <hr />
 <form enctype=\"multipart/form-data\" action=\"html2pdf.php\" method=\"post\">
 <!--Aquí utilizo los class de Bootstrap para ordenar la página en tres columnas. -->
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-sm-4\">
<div id=\"datospersonales\">
<h1>Datos Personales</h1>
 <hr />
 <label for=\"nombre\">Nombre:</label>
 <input id=\"nombre\" type=\"text\" name=\"nombre\" placeholder=\"Nombre y Apellido\" required=\"\" />
<br /><label for=\"apellidos\">Apellidos:</label>
 <input id=\"apellidos\" type=\"text\" name=\"apellidos\" placeholder=\"Apellidos\" required=\"\" />
 <br /><label for=\"direccion\">Dirección:</label>
 <input id=\"direccion\" type=\"text\" name=\"direccion\" placeholder=\"Dirección\" required=\"\" />
 <br /><label for=\"ndireccion\">Número</label>
 <input id=\"ndireccion\" type=\"number\" name=\"ndireccion\" placeholder=\"Número\" required=\"\" />
 <br /><label for=\"poblacion\">Población:</label>
 <input id=\"poblacion\" type=\"text\" name=\"poblacion\" placeholder=\"Población\" />
 <br /><label for=\"provincia\">Provincia:</label>
 <input id=\"provincia\" type=\"text\" name=\"provincia\" placeholder=\"Provincia\" required=\"\" />
 <br /><label for=\"pais\">País:</label>
 <input id=\"pais\" type=\"text\" name=\"pais\" placeholder=\"España\" required=\"\"/>
 <br /><label for=\"telefono\">Teléfono:</label>
 <!-- Utilizo este filtro porque en teoría solo se rellenaría desde España. -->
 <input id=\"telefono\" type=\"number\" min=\"600000000\" max=\"69999999999\" name=\"telefono\" placeholder=\"Teléfono\" required=\"\" />
 <br /><label for=\"email\">Email:</label>
 <input id=\"email\" type=\"email\" name=\"email\" placeholder=\"ejemplo@correo.com\" required=\"\" />
 </div>
 <hr />
 <div id=\"formacionAcademica\">
 <h1>Formación Académica</h1>
 <hr />
 <label for=\"anioinicio\">Año Inicio:</label>
 <input id=\"anioinicio\" type=\"number\" min=\"1980\" max=\"2018\" name=\"anioinicio[]\" placeholder=\"Año Inicio\"/>
  <br /><label for=\"anioobtencion\">Año Obtención:</label>
 <input id=\"anioobtencion\" type=\"number\" min=\"1980\" max=\"2018\" name=\"anioobtencion[]\" placeholder=\"Año Obtención\"/>
 <br /><label for=\"nombreTitulo\">Nombre:</label>
 <input id=\"nombreTitulo\" type=\"text\" name=\"nombreTitulo[]\" placeholder=\"Nombre del Título\" required=\"\"/>
  <br />
  </div>
  <br />
<a href=\"#\" onclick=\"AgregarCampos();\">Agregar Campos</a>
<h1>Elige Un color</h1>
<hr />
   <label for=\"colorFondo\">Elige un Color de Fondo:<br /> 
  <input type=\"color\" name=\"colorFondo\" value=\"#CCFFCC\" /> 
 </label>
 <label for=\"colorBorde\" >Elige un Color de Borde inferior: <br />
  <input type=\"color\" name=\"colorBorde\" value=\"#55DD44\" /> 
 </label>
 <label for=\"colorBordeSuperior\">Elige un Color de Borde Superior:<br /> 
  <input type=\"color\" name=\"colorBordeSuperior\" value=\"#337722\" /> 
 </label>
   </div>
  <div class=\"col-sm-4\">
  <div id=\"experienciaProfesional\">
<h1>Experiencia profesional</h1>
 <hr />
  <label for=\"duraciontrabajo\">Duración:</label>
 <input id=\"duraciontrabajo\" type=\"text\" name=\"duraciontrabajo[]\" placeholder=\"Duración\"/>
 <br />
 <label for=\"descripciontrabajo\">Empresa y Descripción:</label>
 <input id=\"descripciontrabajo\" type=\"text\" name=\"descripciontrabajo[]\" placeholder=\"Descripción \" required=\"\"/>
  <br />
  <br />
  </div>
  <a href=\"#\" onclick=\"AgregarCampos3();\">Agregar Campos</a>
  <hr />
 <div id=\"experienciaComplementaria\">
 <h1>Experiencia Complementaria</h1>
 <hr />
 <label for=\"duracioncurso\">Duración:</label>
 <input id=\"duracioncurso\" type=\"text\" name=\"duracioncurso[]\" placeholder=\"Duración\"/>
 <br />
 <label for=\"descripcioncurso\">Nombre Certificado:</label>
 <input id=\"descripcioncurso\" type=\"text\" name=\"descripcioncurso[]\" placeholder=\"Nombre\" required=\"\"/>
  <br />
 </div>
 <br />
 <a href=\"#\" onclick=\"AgregarCampos4();\">Agregar Campos</a>
 <hr />
 <div id=\"idiomas\">
 <h1>Idiomas</h1>
 <hr />
 <p style=\"display:inline;\">Nivel de Idioma:
 <select name=\"nivelidioma[]\">    
 <option value=\"A1\">A1</option>
       <option value=\"A2\">A2</option>
       <option value=\"B1\" selected=\"selected\">B1</option>
       <option value=\"B2\">B2</option>
       <option value=\"C1\">C1</option>
       <option value=\"C2\">C2</option>
   </select></p>
 <br />
 <label for=\"descripcionIdioma\">Idioma:</label><input id=\"descripcionIdioma\" type=\"text\" name=\"descripcionIdioma[]\" placeholder=\"Inglés\"/>
 
 
 <br />
 </div>
 <br />
 <a href=\"#\" onclick=\"AgregarCampos5();\">Agregar Campos</a>
 <hr />
  <div id=\"subefoto\">
 <h1>Sube una foto (Máximo 2.8 MB)</h1>
<hr />

    <!-- //MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
    <!-- El nombre del elemento de entrada determina el nombre en el array _FILES -->
    Subir Imagen:<input id=\"uploadedfile\" name=\"uploadedfile\" type=\"file\"/>
  </div>
  
  <br />
  <hr />
 <div id=\"confirmar\">
 <h1>Confirmar</h1>
 <hr />
 <input id=\"submit\" type=\"submit\" name=\"submit\" value=\"Enviar\" />
 <input id=\"reset\" type=\"reset\" name=\"reset\" value=\"Vacíar\" />
</div>
 </div>
 <div class=\"col-sm-4\">
 <div id=\"informatica\">
 <h1>Informática</h1>
 <hr />
 <label for=\"conocimientos\">Conocimientos de Informática:</label><input id=\"conocimientos\" type=\"text\" name=\"conocimientos[]\" placeholder=\"Nivel usuario\"/>
 <br />
 </div>
  <br />
 <a href=\"#\" onclick=\"AgregarCampos6();\">Agregar Campos</a>
  <hr />
  </div>
  <div id=\"practicasProfesionales\">
 <h1>Prácticas profesionales</h1>
 <hr />
  <label for=\"duracion\">Duración:</label>
 <input id=\"duracion\" type=\"text\" name=\"duracion[]\" placeholder=\"Duración\"/>
 <br />
 <label for=\"descripcion\">Empresa y Descripción:</label>
 <input id=\"descripcion\" type=\"text\" name=\"descripcion[]\" placeholder=\"Descripción \" required=\"\"/>
  <br />
  <br />
  </div>
  <a href=\"#\" onclick=\"AgregarCampos2();\">Agregar Campos</a>
  <hr />
 <div id=\"otros\">
 <h1>Otros Dátos de Interés</h1>
 <hr /><br />
 <textarea style=\"height:200px;width:200px;\" id=\"otrosdatos\" name=\"otros\" placeholder=\"Mensaje\" required=\"\"></textarea>
 <br />
  </div></div></div>
 </form><hr />";
pie("2018-10-02");



?>
