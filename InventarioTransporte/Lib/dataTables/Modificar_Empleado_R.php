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
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$sexo=$_POST["sexo"];
$ci=$_POST["ci"];
$direccion=$_POST["direccion"];
$codigo=$_POST["codigo"];

mysql_select_db($database_conex, $conex);
$sql="UPDATE  infoempleado SET codigo='$codigo' , nombre='$nombre' , apellido='$apellido', email='$email',telefono='$telefono',sexo='$sexo',ci='$ci' , direccion='$direccion' WHERE ci='$ci'";
$rs=mysql_query($sql,$conex) or die(mysql_error());

echo"Modificaciones realizadas";


 //header ("Location:../Unidades.php")
?>

</body>
</html>