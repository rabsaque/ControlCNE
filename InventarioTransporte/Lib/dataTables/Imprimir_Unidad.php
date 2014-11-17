<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="../estilos/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
-->
</style>
</head>

<body>
<?php ob_start(); ?>
<img src="../../imagenes/unerg.jpg" alt="f" width="313" height="100" />
<p align="center"><span class="Estilo1">Republica Bolivariana de Venezuela <br />
  Ministerio del Poder Popular Para la Educacion Superior<br />
  Universidad Nacional Exerimental Romulo Gallegos <br />
  San Juan de Los Morros Estado Guarico<br />
  Direccion de Transporte<br />
</span></p>
<p align="center">&nbsp;</p>
<p align="center">Informe de Unidad </p>
<?php
include('../../Controlador/conex.php');
include("dompdf/dompdf_config.inc.php"); 
$numero =trim($_POST['numb']);

mysql_select_db($database_conex, $conex);
$sql="SELECT * FROM ingresosunidad where Placa='$numero'";
$rs=mysql_query($sql,$conex) or die(mysql_error());
if ($tabla=mysql_fetch_array($rs)){
echo "<table border=\"1\"><tr><td>Placa</td><td>Proveedor</td><td>Comprado</td><td>F_Solicitud</td><td>N_Solicitud</td><td>Tipo</td><td>Marca</td><td>Modelo</td><td>Capacidad</td><td>Status</td><td>Numero</td></tr>";


echo'<tr><td>'.mb_convert_encoding($tabla['Placa'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['proveedor'], "UTF-8"),'</td> ';

echo'<td>'.mb_convert_encoding($tabla['fec_com'], "UTF-8"),'</td> ';

echo'<td>'.mb_convert_encoding($tabla['fec_sol'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['num_sol'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['tip'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['marc'], "UTF-8"),'</td>';


echo'<td>'.mb_convert_encoding($tabla['mod_un'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['cap_un'], "UTF-8"),'</td>';



echo'<td>'.mb_convert_encoding($tabla['status'], "UTF-8"),'</td>';

echo'<td>'.mb_convert_encoding($tabla['num_un'], "UTF-8"),'</td>';


echo'</tr></table></center>';
} else {
}
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "Informe".$tabla['ci'].'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
</body>
</html>
