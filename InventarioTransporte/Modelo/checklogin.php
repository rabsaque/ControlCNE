<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
session_start();
header("Cache-control: private"); 
$host="localhost"; // El nombre del host, usualmente localhost
$username="root"; // Nombre de usuario mysql
$password=""; // contraseña mysql
$db_name="InventarioTransporte"; // base de datos que usaremso
$tbl_name="usuarios"; // nombre de la tabla

//Conectamos con el servidor y seleccionamos la base de datos
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
//Cogemos los datos que nos llegan desde el formulario ( lo tendremos que crear)
$minombre=$_POST['minombre'];
$contraseña=$_POST['contraseña'];

// Unas pequeñas medidas de seguridad para proteger las bases de datos de posibles inyecciones
$minombre = stripslashes($minombre);
$contraseña = stripslashes($contraseña);
$minombre = mysql_real_escape_string($minombre);
$contraseña = mysql_real_escape_string($contraseña);

$sql="SELECT * FROM $tbl_name WHERE username='$minombre' and password='$contraseña'";
$result=mysql_query($sql);

// Contamos el numero de filas
$count=mysql_num_rows($result);
$renglon = mysql_fetch_row($result);
//Si el resultado marcado es $minombre y $contraseña,debería haber solo una fila
if($count==1){

//Registramos usuario y redireccionamos a exito.
// Se crean las cookies con la informacion necesaria para  manejar la sesion
$estado="logeado";
$codigo=$renglon[3];
$usuario= $renglon[1];
setcookie("estado", $estado, time()+3600); 
setcookie("usuario", $usuario, time()+3600); 
setcookie("codigo", $codigo, time()+3600); 
header("location:../Vista/principal.php");

}
else {
echo "Nombre de usuario equivocado o contraseña";

}
?>
</body>
</html>