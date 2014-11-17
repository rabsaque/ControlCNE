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
$numero =trim($_POST['numb']);

mysql_select_db($database_conex, $conex);
$sql="DELETE FROM ingresosunidad where Placa='$numero'";
$rs=mysql_query($sql,$conex) or die(mysql_error());
echo "La unidad ha sido borrada";
 //header ("Location:../Unidades.php")
?>
</body>
</html>
