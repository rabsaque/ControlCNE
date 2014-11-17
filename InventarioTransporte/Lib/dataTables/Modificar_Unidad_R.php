<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="../estilos/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include('../../Controlador/conex.php');
$prov =$_POST['prov'];
$volc = "1";
$fechai = $_POST['fechai'];
$fechas = $_POST['fechas'];
$tip=$_POST["tipo"];
$mar=$_POST['marca'];
$ser =$_POST['serial'];
$mode =$_POST['mode'];
$cap =$_POST['cap'];
$nums=$_POST['nums'];
$status= $_POST['status'];
$placa=$_POST['placa'];

$numero=$_POST['numero'];

mysql_select_db($database_conex, $conex);
$sql="UPDATE  ingresosunidad SET proveedor='$prov' , fec_com='$fechai' , fec_sol='$fechas', tip='$tip',mod_un='$mode',Placa='$placa',cap_un='$cap' , num_sol='$nums' , status='$status' ,num_un='$numero' WHERE Placa='$placa'";
$rs=mysql_query($sql,$conex) or die(mysql_error());

echo"Modificaciones realizadas";

?>
</body>
</html>
