<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="../../estilos/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include('../../Controlador/conex.php');
$numero =trim($_POST['numb']);

mysql_select_db($database_conex, $conex);
$sql="SELECT * FROM infoempleado where ci='$numero'";
$rs=mysql_query($sql,$conex) or die(mysql_error());
echo"<center>";

echo"Nota: Reemplace  solo los valores que desee modificar.<br><hr>";
if ($tabla=mysql_fetch_array($rs)){
echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"150\"><tr><td><form method=\"post\" action=\"Modificar_Empleado_R.php\">";
echo'Cedula';
echo'<input type="text" name="ci" value="'.mb_convert_encoding($tabla['ci'], "UTF-8"),'" readonly ><br>';
echo'Codigo';
echo'<input type="text" name="codigo" value="'.mb_convert_encoding($tabla['codigo'], "UTF-8"),'" ><br>';
echo'Nombre';
echo'<input type="text" name="nombre" value="'.mb_convert_encoding($tabla['nombre'], "UTF-8"),'" ><br>';
echo'Apellido';
echo'<input type="text" name="apellido" value="'.mb_convert_encoding($tabla['apellido'], "UTF-8"),'" ><br>';
echo'Telefono';
echo'<input type="text" name="telefono" value="'.mb_convert_encoding($tabla['telefono'], "UTF-8"),'" ><br>';
echo'Email';
echo'<input type="text" name="email" value="'.mb_convert_encoding($tabla['email'], "UTF-8"),'" ><br>';
echo'Sexo';
echo'<input type="text" name="sexo" value="'.mb_convert_encoding($tabla['sexo'], "UTF-8"),'" ><br>';
echo'Direccion';
echo'<input type="text" name="direccion" value="'.mb_convert_encoding($tabla['direccion'], "UTF-8"),'" ><br>';

echo'<hr><input type="submit" name="button" id="button" value="Guardar Cambios" /><br><br><a href="Empleados.php" ><font color="black" >Cancelar</a></form></td></tr></table>';
} else {
}
 //header ("Location:../Unidades.php")
?>

</body>
</html>
