<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="../../estilos/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
-->
</style></head>

<body>
<p>
  <?php ob_start(); ?>
</p>
<p align="center"><span class="Estilo1"><br> 
</span></p>
<p>
  <?php

include('../../Controlador/conex.php');
include('../../Controlador/conectar.php');
$numero =trim($_POST['numb']);

mysql_select_db($database_conex, $conex);
$sql="SELECT * FROM alumnos where id='$numero'";
$rs=mysql_query($sql,$conex) or die(mysql_error());


if ($tabla=mysql_fetch_array($rs)){

echo"<center><h2>Ficha del Alumno</h2>";
echo "<table border=\"0\" width=\"500\" bgcolor=\"#CCCCCC\"><tr><td><b>Id</td><td><b>Nombre</td><td><b>Apellido</td><td><b>Edad</td><td><b>Genero</td><td><b>Grado</td><td><b>Seccion</td></tr>";
echo'<tr><td>'.mb_convert_encoding($tabla['id'], "UTF-8"),' </td>';

echo'<td>'.mb_convert_encoding($tabla['nombre'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['apellido'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['edad'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['genero'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['grado'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['seccion'], "UTF-8"),'</td>';

echo'</tr></table>';

echo"<center><h2>Progreso del Alumno</h2>";
echo"Estrellas Obtenidas:". '<img src="../../Imagenes/star.png"></img>'. "".$tabla['est_prog']."<br>";

echo '<td><form method="post" action="Modificar_Alumno.php"><input type="text" name="numb" value="'.mb_convert_encoding($tabla['id'], "UTF-8"),'" hidden><br><br>Observaciones (max 200 caracteres).<br><input type="textarea" name="observaciones" value="Su Solicitud cumple con todos los Requisitos establecidos por la ley por tanto ha sido aprobada"><br><br><input type="submit" name="button" id="button" value="Guardar" /></form></td>';
} else {
echo"Se presento un error intentelo denuevo";

}

?>
    
</p>
</body>
</html>
