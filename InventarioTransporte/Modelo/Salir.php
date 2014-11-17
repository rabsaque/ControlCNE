
<?//si llegamos aquí, todo fue bien

setcookie("estado", $estado, time()-3600); 
setcookie("usuario", $usuario, time()-3600); 
setcookie("codigo", $codigo, time()-3600)
header("location:Index.php");
?>