<?
if($boton) {
if (is_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'])) {
copy($HTTP_POST_FILES['archivo']['tmp_name'], $HTTP_POST_FILES['archivo']['name']);
$subio = true;
}

if($subio) {

} else {
echo "El archivo no cumple con las reglas establecidas";
exit(0);
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<title>Hoopper.net multimedia e.u.</title>
<script language="JavaScript" type="text/javascript" src="../js/codigo.js"></script>
<style type="text/css">
<!--
#menu a {
	color: #000000;
	text-decoration: none;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	border-top-width: thin;
	border-right-width: thin;
	
	border-left-width: thin;
	border-top-style: solid;
	border-right-style: solid;
	border-left-style: solid;
	border-top-color: #FF9900;
	border-right-color: #FF9900;
	
	border-left-color: #FF9900;
}
#contenidos {
	background-color: #FFFFFF;
	display: block;
	min-height: 400px;
	vertical-align: middle;
	text-align: justify;
	padding-right: 5px;
	padding-left: 5px;
	border-top-width: thin;
	border-right-width: thin;
	border-bottom-width: thin;
	border-left-width: thin;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #FF9900;
	border-right-color: #FF9900;
	border-bottom-color: #FFffff;
	border-left-color: #FF9900;
	padding-top: 5px;
}
#englobador #contenidos a {
	color: #Ff9900;
	text-decoration: none;
}
body {
	text-align: center;
	background-color: #f9f9f0;
}
#englobador {
	margin: 0 auto; 
	width: 780px; 	
	position: relative; 
	}
#englobador #google {
	text-decoration: none;
	text-align: center;
	border-top-width: thin;
	border-right-width: thin;
	border-bottom-width: thin;
	border-left-width: thin;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #FFFFFF;
	border-right-color: #ff9900;
	border-bottom-color: #ff9900;
	border-left-color: #ff9900;
	background-color: #FFFFFF;
}
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {color: #FF9900}
-->
</style>
</head>

<body><b1><!--mx3QI2v9eNodxUEKgDAMBMAXmX2TtJF4MBvahfh8wbkMgo9ja50iuhvxZ0FW+bJ0ITQ5NrqOwZSnYIaL4sad01+rqA/gnRsH--></b1>
<div id="englobador">
<div id="menu">
<a href="javascript:history.back(1)">Volver Atr&aacute;s</a><a href="../index.php" onMouseOver="window.status='hoopper.net, kraka producciónes';return true;" onMouseOut="window.status='hoopper.net, kraka producciónes';return true;" target='_top'></a></div>
<div id="contenidos">
  Normas de uso:<br />
    1. Esta totalmente prohibido subir archivos de caracter ilegal de cualquier tipo.<br />
    2. Este servicio es gratuito, por lo tanto el depositar un archivo, supone el libre uso por todos los visitantes.<br />
3. Para borrar un archivo por favor indica nombre y motivo en el formulario de contacto del site.
<?php 
$status = "";
if ($_POST["action"] == "upload") {
	// obtenemos los datos del archivo 
	$tamano = $_FILES["archivo"]['size'];
	$tipo = $_FILES["archivo"]['type'];
	$archivo = $_FILES["archivo"]['name'];
	$prefijo = substr(md5(uniqid(rand())),0,6);
	
	if ($archivo != "") {
		// guardamos el archivo a la carpeta files
		$destino =  "./".$prefijo."_".$archivo;
		if (copy($_FILES['archivo']['tmp_name'],$destino)) {
			$status = "Archivo subido: <b>".$archivo."</b>";
		} else {
			$status = "Error al subir el archivo";
		}
	} else {
		$status = "Error al subir archivo";
	}
}
?>
<br />
<br />
<table width="413" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="413" class="titulo">Por favor seleccione el archivo a subir:</td>
  </tr>
  
  <tr>
  <form action="<? $PHP_SELF=urlencode($PHP_SELF); ?>" method="post" enctype="multipart/form-data">
    <td class="text">
      <input name="archivo" type="file"  id="archivo" size="35" />
      <input name="enviar" type="submit"  id="enviar" value="Upload File" />
	  <input name="action" type="hidden" value="upload" />	  </td>
	</form>
  </tr>
  <tr>
    <td class="text"><?php echo $status; ?></td>
  </tr>
  <tr>
    <td height="30" class="subtitulo">Listado de Archivos Subidos </td>
  </tr>
  <tr>
    <td class="infsub">
	<?php 
	if ($gestor = opendir('.')) {
		echo "<ul>";
	    while (false !== ($arch = readdir($gestor))) {
		   if ($arch != "." && $arch != ".." && $arch != "index.php" && $arch != "archivos.php" ) {
			   echo "<li><a href=\"./".$arch."\" class=\"linkli\">".$arch."</a></li>\n";
		   }
	    }
	    closedir($gestor);
		echo "</ul>";
	}
	?>	</td>
  </tr>
</table>
	
</div>
<div id="google" align="center">
  <script type="text/javascript"><!--
google_ad_client = "pub-2656712306831581";
//anuncios principal
google_ad_slot = "2137905737";
google_ad_width = 468;
google_ad_height = 60;
//--></script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
</body>
</html>