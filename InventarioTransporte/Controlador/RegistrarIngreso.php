<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
<body style="background-color:transparent;">
<?php
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



echo"Registro Exitoso para Haga clic <a href=\"Imagenes.php\">Aqui</a> para continuar";



$dbhost="localhost";  
$dbusuario="root"; 
$dbpassword=""; 
 $Fecha= date('d-m-Y');
$Hora= date('H:i:s');

echo "<br>Ingreso Realizado "; 
echo "<br>El dia: ".$Fecha;
echo "<br>";
echo "A las: ".$Hora;
echo "<br>";       
$db="inventarioTransporte";        
$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
mysql_select_db($db, $conexion);



$result=mysql_query("INSERT INTO ingresosunidad VALUES ('$prov','$fechai','$fechas','$tip','$mar','$mode','$placa','$cap','$nums','$status','$numero')",

    $conexion);
	
	echo mysql_error();
	
	
		mysql_close();
	
?>

</body>
</html>