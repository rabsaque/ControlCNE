<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
include('../Controlador/conex.php');
$numero =$_POST['num'];

mysql_select_db($database_conex, $conex);
$sql="DELETE FROM ingresosunidad where Placa='$numero'";
$rs=mysql_query($sql,$conex) or die(mysql_error());

 header ("Location:../Lib/dataTables/Unidades.php")
?>
</body>
</html>
