<?php
$dir="./";
$directorio=opendir($dir); 
//echo "<b>Directorio actual:</b><br>$dir<br>"; 
echo "<b>Archivos:</b><br>"; 







while ($archivo = readdir($directorio)){
  


if($archivo != '.') {


if($archivo != '..'){



$partes = explode(".",$archivo);




//echo $partes[0].$partes[1]."<br>";





if ($partes[1] == "htm" || $partes[1] == "html" || $partes[1] == "php"  ) {

echo "<a href='".$dir.$archivo."'>".$archivo."</a><br>"; 

}


if ($partes[1] == "jpg" || $partes[1] == "gif"   ) {

echo "<img src='".$dir.$archivo."'>"; 

}








		}
		}

}




closedir($directorio); 
?>