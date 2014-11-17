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
</p><img src="../../imagenes/unerg.jpg" width="313" height="100" />
<p align="center"><span class="Estilo1">Republica Bolivariana de Venezuela <br>Ministerio del Poder Popular Para la Educacion Superior<br> Universidad Nacional Exerimental Romulo Gallegos <br>San Juan de Los Morros Estado Guarico<br> Direccion de Transporte<br> </span></p>
<p>
  <?php

include('../../Controlador/conex.php');
include("dompdf/dompdf_config.inc.php"); 
$numero =trim($_POST['numb']);

mysql_select_db($database_conex, $conex);
$sql="SELECT * FROM infoempleado where ci='$numero'";
$rs=mysql_query($sql,$conex) or die(mysql_error());

if ($tabla=mysql_fetch_array($rs)){

echo "<table border=\"1\"><tr><td>Cedula</td><td>Codigo</td><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Email</td><td>Sexo</td><td>Direccion</td></tr>";
echo'<tr><td>'.mb_convert_encoding($tabla['ci'], "UTF-8"),' </td>';

echo'<td>'.mb_convert_encoding($tabla['codigo'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['nombre'], "UTF-8"),'"</td>';

echo'<td>'.mb_convert_encoding($tabla['apellido'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['telefono'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['email'], "UTF-8"),' </td>';

echo'<td>'.mb_convert_encoding($tabla['sexo'], "UTF-8"),' </td>';

echo'<td>'.mb_convert_encoding($tabla['direccion'], "UTF-8"),'</td>';
echo'</tr></table>';

} else {
echo"Se presento un error intentelo denuevo";
}
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "Informe".$tabla['ci'].'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
  
</p>
</body>
</html>
