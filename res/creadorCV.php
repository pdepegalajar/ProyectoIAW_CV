<?php
//Este es el php que generará el currículum recibiendo los parametros recogidos por el formulario.
// Recogida de Datos y archivos del Formulario.
include "biblioteca.php";
$nombre = recoge("nombre");
$apellidos = recoge("apellidos");
$email = recoge("email");
$direccion = recoge("direccion");
$ndireccion = recoge("ndireccion");
$poblacion = recoge("poblacion");
$provincia = recoge("provincia");
$pais = recoge("pais");
$otros = recoge("otros");
$telefono = recoge("telefono");
$colorBordeSuperior = recoge("colorBordeSuperior");
$colorFondo =  recoge("colorFondo");
$colorBorde = recoge("colorBorde");
// El directorio /opt/lampp/publico debe existir y tener permisos de escritura para recibir el archivo que se envía. 
$target_path  =  "/opt/lampp/publico/";
$target_path  =  $target_path  .  basename($_FILES['uploadedfile']['name']);
if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    $nombreArchivo = basename($_FILES['uploadedfile']['name']);
}
print "
<style>
*{
font-style:italic;
}
hr.contenido{color:$colorBorde;}
</style>
<page backtop=\"10mm\" backbottom=\"10mm\" backleft=\"20mm\" backright=\"20mm\>
    <page_header>
     <table cellspacing=\"0\" style=\"width: 100%; text-align: center; font-size: 14px\">
        <tr>
            <td style=\"width: 60%;\">
            </td>
            <td style=\"width: 25%; color: #444444;\">";
			//Si se ha subido algún fichero carga la etiqueta img porque sino da error el parser de HTML2PDF.
               if (isset($nombreArchivo))
               {print"<img style=\"width=150;\" src=\"/opt/lampp/publico/$nombreArchivo\"alt=\"Foto\"><br>";}
           print " </td>
        </tr>
    </table>
    </page_header>
    <page_footer>
        <table style=\"width: 100%;\">
            <tr>
                <td style=\"text-align: center;    width: 95%\">Curriculúm Vitae</td>
                <td style=\"text-align: left;    width: 5%\">pág [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
    </page_footer>
    <h1>Currículum Vitae</h1>
    <div style=\"width: 40%;display: inline	\">
    	<h4>Datos Personales</h4>
    <span style=\"font-size: 12px; font-weight: bold;\"><hr>$nombre $apellidos<br><br>$direccion nº $ndireccion $poblacion, $provincia, $pais
    	<br><br>Teléfono: $telefono<br><br> E-mail: $email
    	</span><br><br>
    </div>
    <br>
    <br>
    <h2>Formación Académica</h2>
    <hr class=\"contenido\" /><br />
    <table style=\"width: 90%;border: solid 1px #5544DD; border-collapse: collapse\" align=\"center\">
        <thead>
            <tr>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Año de Inicio/Obtención</th>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Descripción del título</th>
            </tr>
        </thead>
        <tbody>";
		// Bucle foreach para recoger los arrays del formulario ya que los datos de entrada son dinámicos
      $filavoy=0;
		 foreach ($_POST['anioinicio'] as $filainicio) {
   
           print "<tr>
         <td style=\"width: 30%; text-align: left; border: solid 1px $colorBorde\">";
         
		  print "$filainicio";
			 print "-";
          print_r ($_POST['anioobtencion'][$filavoy]);
         print "</td>";
		  print "<td style=\"width: 70%; text-align: left; border: solid 1px $colorBorde\">";
          print_r ($_POST['nombreTitulo'][$filavoy]);
         $filavoy++;
		print "</td></tr>"; 
		 }
  print "</tbody>
        
    </table>
    <br>";
	if (!empty($_POST['descripcion'][0])){
    print "<h2>Prácticas profesionales</h2>
    <hr class=\"contenido\" /><br />
    <table style=\"width: 90%;border: solid 1px #5544DD; border-collapse: collapse\" align=\"center\">
        <thead>
            <tr>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Duración</th>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Descripción del Título</th>
            </tr>
        </thead>
        <tbody>
        <tr>";
		// Reinicio $filavoy para que vuelva a empezar a contar de 0        
            $filavoy=0;
		 foreach ($_POST['duracion'] as $filaduracion) {
   
           print "
         <td style=\"width: 30%; text-align: left; border: solid 1px $colorBorde\">";
         
		  print "$filaduracion";
         print "</td>";
		  
		  print "<td style=\"width: 70%; text-align: left; border: solid 1px $colorBorde\">";
          print_r ($_POST['descripcion'][$filavoy]);
         print "</td></tr><tr>"; 
		$filavoy++;
		 }
        print "</tr>
        </tbody>  
    </table>";
    }
    print "<br>
    <h2>Experiencia profesional</h2>
    <hr class=\"contenido\" /><br />
    <table style=\"width: 90%;border: solid 1px #5544DD; border-collapse: collapse\" align=\"center\">
        <thead>
            <tr>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Duración</th>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Descripción del puesto realizado</th>
            </tr>
        </thead>
        <tbody>
        <tr>";
           $filavoy=0;
		 foreach ($_POST['duraciontrabajo'] as $filatrabajo) {
   
           print "
         <td style=\"width: 30%; text-align: left; border: solid 1px $colorBorde\">";
         
		  print "$filatrabajo";
         print "</td>";
		  
		  print "<td style=\"width: 70%; text-align: left; border: solid 1px $colorBorde\">";
          print_r ($_POST['descripciontrabajo'][$filavoy]);
         print "</td></tr><tr>"; 
		$filavoy++;
		 }
        print "
        </tr>
        </tbody>
        
    </table>
    <br>
    <h2>Experiencia Complementaria</h2>
    <hr class=\"contenido\"/><br />
    <table style=\"width: 90%;border: solid 1px #5544DD; border-collapse: collapse\" align=\"center\">
        <thead>
            <tr>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Duración</th>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Descripción de Certificados</th>
            </tr>
        </thead>
        <tbody>
        <tr>";
            $filavoy=0;
		 foreach ($_POST['duracioncurso'] as $filacurso) {
   
           print "
         <td style=\"width: 30%; text-align: left; border: solid 1px $colorBorde\">";
         
		  print "$filatrabajo";
         print "</td>";
		  
		  print "<td style=\"width: 70%; text-align: left; border: solid 1px $colorBorde\">";
          print_r ($_POST['descripcioncurso'][$filavoy]);
         print "</td></tr><tr>"; 
		$filavoy++;
		 } 
        print "</tr>
        </tbody>
        
    </table>
    <br>
   </page>";
   if (!empty($_POST['descripcionIdioma'][0]) || (!empty($_POST['conocimientos'][0])) || (!empty($_POST['otros']))) {
       print "<page backtop=\"10mm\" backbottom=\"10mm\" backleft=\"20mm\" backright=\"20mm\">
   <br>";
   if (!empty($_POST['descripcionIdioma'][0])){
    print "<h2>Idiomas</h2>
    <hr class=\"contenido\" /><br />
    <table style=\"width: 90%;border: solid 1px #5544DD; border-collapse: collapse\" align=\"center\">
        <thead>
            <tr>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Duración</th>
                <th style=\"width: 30%; text-align: left; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Descripción del puesto realizado</th>
            </tr>
        </thead>
        <tbody>
        <tr>";
        $filavoy=0;
		 foreach ($_POST['nivelidioma'] as $filaidioma) {
   
           print "
         <td style=\"width: 30%; text-align: left; border: solid 1px $colorBorde\">";
         
		  print "$filaidioma";
         print "</td>";
		  
		  print "<td style=\"width: 70%; text-align: left; border: solid 1px $colorBorde\">";
          print_r ($_POST['descripcionIdioma'][$filavoy]);
         print "</td></tr><tr>"; 
		$filavoy++;
		 } 
        print "</tr>
        </tbody>
        
    </table>
    <br>";
    }
if (!empty($_POST['conocimientos'][0])) {
	print "<br>
    <h2>Informática</h2>
    <hr class=\"contenido\" /><br />
    <table style=\"width: 90%;border: solid 1px #5544DD; border-collapse: collapse\" align=\"center\">
        <thead>
            <tr>
                
                <th style=\"width: 30%; text-align: center; border: solid 1px $colorBordeSuperior; background: $colorFondo\">Conocimientos</th>
            </tr>
        </thead>
        <tbody>
        ";  
		 foreach ($_POST['conocimientos'] as $filainformatica) {
   
           print "<tr>
         <td style=\"width: 100%; text-align: center; border: solid 1px $colorBorde\">";
         
		  print "$filainformatica";
		  print"</td></tr>";
		 }
         print "
        </tbody>  
    </table>
    <br>
    ";
}
if (!empty($_POST['otros'])) {
	 print " <br>
    <h2>Otros Datos De Interés</h2>
    <hr class=\"contenido\" /><br />
       <table style=\"width: 90%;border: solid 1px #5544DD; border-collapse: collapse\" align=\"center\">

    <tr>
        <td style=\"width: 100%; text-align: left; border: solid 1px $colorBorde;font-weight: bold;font-size: 14px;\">
        <pre>
$otros
        </pre>
        </td>
    </tr>
    </table>
";
}
print "
    
    <page_footer>
        <table style=\"width: 100%;\">
            <tr>
                <td style=\"text-align: center;    width: 95%\">Curriculúm Vitae</td>
                <td style=\"text-align: left;    width: 5%\">pág [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
    </page_footer>
   </page>
   ";
   }
   
?>
