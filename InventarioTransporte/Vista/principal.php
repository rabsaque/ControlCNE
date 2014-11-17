<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Control de Unidades e Insumos</title>
<link href="../estilos/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo2 {font-size: 12%}
-->
</style>
</head>

<body background="../imagenes/paper.jpg">
<p align="center"><img src="../imagenes/Banner.png" width="839" height="167"  /></p>
<table width="970" height="536" border="0">
  <tr>
    <td width="199" height="28" bgcolor="#0066FF"><div align="center"><span class="Estilo1">Opciones</span></div></td>
    <td  bgcolor="#0066FF"><a href="principal.html">&nbsp;</a><?php

    echo"Bienvenido: ".$_COOKIE["usuario"];
	?></td>
  </tr>
  <tr>
    <td   bgcolor="#0066FF"  ><a href="../Lib/dataTables/Unidades.php" target="frame">Ver Unidades </a>
	<hr align="center"/>
         <a href="../Lib/dataTables/Herramientas.php" target="frame">Ver Herramientas</a>
      <hr align="center"/>
      <a href="Login.html"></a>
      <a href="../Lib/dataTables/Empleados.php" target="frame">Ver Personal</a>
      <hr align="center"/>
      <a href="RegistroEmpleado.html" target="frame">RegistrarEmpleado</a>
      <hr align="center"/>
      <a href="RegistroUsuario.html" target="frame">Registrar Usuario</a>
      <hr align="center"/>
      <a href="RegistrarUnidad.php" target="frame">Registrar Unidad </a>
      <hr align="center"/>
     <a href="RegistrarHerramienta.php" target="frame">Ingreso Insumos </a>
      <hr align="center"/>
      
      <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td><iframe src="" width="100%" height="500" id="frame" class="frame" frameborder="0"name="frame" > </iframe  allowtransparency="allowtransparency" ></td>
  </tr>
</table>
<hr align="center"/>
<p align="center">Desarrollado por Roselin Monta  Bajo Liscencia GNU/GPL </p>
<hr align="center"/>
</body>
</html>
