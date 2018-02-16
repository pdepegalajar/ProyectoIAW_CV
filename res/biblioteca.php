<?php
/**
 * ZODIAC SIGNS - zodiaco.php
 *
 * IES Virgen del Carmen de Jaén
 * Implantación de Aplicaciones Web 2º ASIR
 *
 * Basado en el código de:
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2012 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2012-11-27
 * @link      http://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
 
 // Aquí se encuentra toda la librería necesaria para que funcione el index.php
define("MENU_PRINCIPAL", "menuPrincipal"); // Menú principal
define("MENU_VOLVER",    "menuVolver");    // Menú Volver a inicio
// Conecta a la base de datos.

function cabecera($texto)
{
    print "<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='utf-8' />
    <title>Practica IAW - $texto</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
 //Las funciones de AgregarCampos como su nombre indica añade campos al formulario según se necesiten
function AgregarCampos(){
campo = '<br /><label for=\"anioinicio[]\">Año Inicio:</label><input type=\"number\" min=\"1980\" max=\"2018\" size=\"20\" placeholder=\"Año Inicio\" id=\"anioinicio\"&nbsp; name=\"anioinicio[]\"&nbsp; /><br/><label for=\"anioobtencion\">Año Obtención:</label><input type=\"number\" min=\"1980\" max=\"2018\" placeholder=\"Año Obtención\" name=\"anioobtencion[]\"/><br /><label for=\"nombreTitulo\">Nombre:</label><input type=\"text\" placeholder=\"Nombre del Título\" name=\"nombreTitulo[]\"><br />';
$(\"#formacionAcademica\").append(campo);
}
function AgregarCampos2(){
campo = '<br /><label for=\"duracion\">Duración:</label><input id=\"duracion\" type=\"text\" name=\"duracion[]\" placeholder=\"Duración\"/><br /><label for=\"descripcion\">Empresa y Descripción:</label><input id=\"descripcion\" type=\"text\" name=\"descripcion[]\" placeholder=\"Descripcion\" required=\"\"/><br /><br />';
$(\"#practicasProfesionales\").append(campo);
}
function AgregarCampos3(){
campo = '<br /><label for=\"duracion\">Duración:</label><input id=\"duracion\" type=\"text\" name=\"duracion[]\" placeholder=\"Duración\"/><br /><label for=\"descripcion\">Empresa y Descripción:</label><input id=\"descripcion\" type=\"text\" name=\"descripcion[]\" placeholder=\"Descripcion\" required=\"\"/><br /><br />';
$(\"#experienciaProfesional\").append(campo);
}
function AgregarCampos4(){
campo = '<br /><label for=\"duracioncurso\">Duración:</label><input id=\"duracioncurso\" type=\"text\" name=\"duracioncurso[]\" placeholder=\"Duración\"/><br /><label for=\"descripcioncurso\">Nombre Certificado:</label><input id=\"descripcioncurso\" type=\"text\" name=\"descripcioncurso[]\" placeholder=\"Descripcion\" required=\"\"/><br />';
$(\"#experienciaComplementaria\").append(campo);
}
function AgregarCampos5(){
campo = '<br /><label for=\"nivelidioma\">Nivel de Idioma:</label><select name=\"nivelidioma[]\"> <option value=\"A1\">A1</option><option value=\"A2\">A2</option><option value=\"B1\" selected=\"selected\">B1</option><option value=\"B2\">B2</option><option value=\"C1\">C1</option><option value=\"C2\">C2</option></select><br /><label for=\"descripcionIdioma\">Idioma:</label><input id=\"descripcionIdioma\" type=\"text\" name=\"descripcionIdioma[]\" placeholder=\"Inglés\" required=\"\"/><br />';
$(\"#idiomas\").append(campo);
}
function AgregarCampos6(){
campo = '<br /><label for=\"conocimientos\">Conocimientos de Informática:</label><input id=\"conocimientos\" type=\"text\" name=\"conocimientos[]\" placeholder=\"Nivel usuario\"/><br />';
$(\"#informatica\").append(campo);
}
</script>
     <script src='inc/js/bootstrap.min.js'></script>
     <!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
  	<link rel='stylesheet' href='res/style.css' type='text/css' media='all' />
  </head>
<body>
<h1 style=\"text-align:center;\">$texto</h1>
<br />
<div id=\"contenido\" class=\"col-6\" style=\"text-align:center;\">\n";
}

/*
   $fecha de última modificación de la página que realiza la llamada
   aaaa-mm-dd
*/
function pie($fecha)
{
print "\n</div>\n<br />\n<br />";
  $cadenaFecha = formatearFecha($fecha);
  echo <<< FINPIE
    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="$fecha">$cadenaFecha</time> (Alfonso Manuel García León)</p>
 </footer>	
  </body>
</html>
FINPIE;
}
/*
   $fecha en formato "aaaa-mm-dd" se pasa a "dd de mes de aaaa"

   Configuración de idioma, para que el mes salga en español
   http://php.net/manual/es/function.setlocale.php

   strftime — Formatea una fecha/hora local según una configuración local
   http://php.net/manual/es/function.strftime.php

   strtotime — Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
   http://php.net/manual/es/function.strtotime.php
*/

function formatearFecha($fecha)
{
  define('formatoFecha','%d de %B de %Y'); 
  setlocale(LC_ALL,'es_ES.UTF-8');
  return strftime(formatoFecha, strtotime($fecha));
}

function recoge($var) 
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}
function callback($buffer) {
        // Clean up
        $config = array(
            'indent'         => true,
            'output-xhtml'   => false,
            'wrap'           => 200);

        return tidy_repair_string($buffer, $config, 'utf8');
 }
// FUNCIÓN DE CONEXIÓN CON LA BASE DE DATOS SQLITE
function conectaDb()
{
    global $dbDb;

    try {
        $tmp = new PDO("sqlite:datoscv" . $dbDb);
        return($tmp);
    } catch(PDOException $e) {
        
        exit();
    }
}

// EJEMPLO DE USO DE LA FUNCIÓN conectaDb()
// La conexión se debe realizar en cada página que acceda a la base de datos
//$db = conectaDB();
?>
