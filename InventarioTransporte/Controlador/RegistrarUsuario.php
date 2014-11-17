<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
error_reporting(0);
$usuario=$_POST["usuario"];
$password=$_POST["password"];
$rpassword=$_POST["rpassword"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$sexo=$_POST["sexo"];
$ci=$_POST["ci"];
$materia=$_POST["materia"];
$direccion=$_POST["direccion"];
$codigo=$_POST["codigo"];
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword=""; // password de acceso para el usuario de la
                      // linea anterior
$db="inventariotransporte";        // Seleccionamos la base con la cual trabajar
$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
mysql_select_db($db, $conexion);

$result=mysql_query("SELECT username FROM usuarios  username where username='$usuario'",

    $conexion) or 	die(mysql_error());
	 

	
	$renglon = mysql_fetch_row($result);

if($renglon[0]== $usuario){
 echo"El Usuario ya existe!!!<br>";
 $flag1=1;
}else{
	$flag1=0;
	
	}
	
// desplegando en celda de tabla html
   
    				$result=mysql_query("SELECT email FROM infousuario email  where email='$email' ",

    $conexion) or 	die(mysql_error());
   $renglon = mysql_fetch_row($result);
if($renglon[0]== $email){
 echo"El Email ya esta en uso!!!";
 $flag2=1;
}else{
	$flag2=0;
	
	}

if($password != $rpassword){
	
	echo"Las contraseñas no coinciden";
	 $flag3+=1;
}else{
	$flag3=0;
	
	}
	
	
	
	$flagfinal = $flag1 + $flag2 + $flag3;
	
	
	
	
	
	
	if($flagfinal==0){
		
		$result=mysql_query("INSERT INTO usuarios Values('','$usuario','$password','$codigo') ",

    $conexion) or 	die(mysql_error());
	
		$result=mysql_query("INSERT INTO infousuario Values('$codigo','$nombre','$apellido','$email','$telefono','$sexo','$usuario','$password','$ci','$direccion' )",

  

    $conexion) or 	die(mysql_error());
		echo"Registrado con Exito!!";
		
		}else{
			
			echo"Revisar errores";
			}
	
	
	echo"fff"+$flagfinal;


?>
</body>
</html>