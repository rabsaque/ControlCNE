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
$sql="SELECT * FROM ingresosunidad where Placa='$numero'";
$rs=mysql_query($sql,$conex) or die(mysql_error());
echo"<center>";

echo"Nota: Reemplace  solo los valores que desee modificar.<br><hr>";
if ($tabla=mysql_fetch_array($rs)){
echo "<center><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"150\" aling=\"center\"><tr><td>";
echo "<form method=\"post\" action=\"Modificar_Unidad_R.php\">";
echo'Placa';
echo'<input type="text" name="placa" value="'.mb_convert_encoding($tabla['Placa'], "UTF-8"),'" Readonly>';
echo'Proveedor';
echo'<input type="text" name="prov" value="'.mb_convert_encoding($tabla['proveedor'], "UTF-8"),'" >';
echo"Fecha de Compra";
echo'<input type="text" name="fechai" value="'.mb_convert_encoding($tabla['fec_com'], "UTF-8"),'" >';
echo'Fecha de Solicitud';
echo'<input type="date" name="fechas" value="'.mb_convert_encoding($tabla['fec_sol'], "UTF-8"),'" >';
echo'Tipo';
echo'<input type="date" name="tipo" value="'.mb_convert_encoding($tabla['tip'], "UTF-8"),'" >';
echo'Marca';
echo'<input type="text" name="marca" value="'.mb_convert_encoding($tabla['marc'], "UTF-8"),'" >';

echo'Modelo';
echo'<input type="text" name="mode" value="'.mb_convert_encoding($tabla['mod_un'], "UTF-8"),'" >';
echo'Capacidad';
echo'<input type="text" name="cap" value="'.mb_convert_encoding($tabla['cap_un'], "UTF-8"),'" >';
echo'Numero de Solicitud';
echo'<input type="text" name="nums" value="'.mb_convert_encoding($tabla['num_sol'], "UTF-8"),'" >';
echo'Status';
echo'<input type="text" name="status" value="'.mb_convert_encoding($tabla['status'], "UTF-8"),'" >';
echo'Numero';
echo'<input type="text" name="numero" value="'.mb_convert_encoding($tabla['num_un'], "UTF-8"),'" ><hr>';


echo'<input type="submit" name="button" id="button" value="Guardar Cambios" /><br><br><a href="Unidades.php">Cancelar</a></form></td></tr></table></center>';
} else {
}
 //header ("Location:../Unidades.php")
?>
</body>
</html>
