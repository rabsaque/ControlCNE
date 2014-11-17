<?
session_start();




 
     
    

?>
<link href="../estilos/style0.css" rel="stylesheet" type="text/css" /> 
<link href="../estilos/estilos.css" rel="stylesheet" type="text/css" />
<script laguage="javascript">
function cambiarTextfields(selec) {
if (selec.value == 1) {
    document.getElementById('miCampoDeTexto').disabled =false;;
    
}
else if (selec.value == 2) {
    document.getElementById('miCampoDeTexto').disabled =  true;
    
} 
} </script>

<h1 align="center">Registro de Herramientas </h1> <form method='post' action='../Controlador/RegistrarHerramienta.php' enctype='multipart/form-data'>
  <table width="606" border="0" align="center">
    <tr>
      <td width="168"><p>Proveedor
      </p>
        <p>    
          <input name='prov' type='text' />
        </p></td>
      <td width="168"><p align="center">Fecha de la compra. DD-MM-AAAA </p>
        <p align="center">
          <label for="fechai"></label>
          <input type="text" name="fechai" id="fechai" />
        </p></td>
      <td width="128"><p align="center">Tipo</p>
        <p align="center">
        
          
<select ...  name="tipo" >
<option value="Mecanica">Mecanica</value>
<option value="Electrica">Electrica</value>
<option value="Repuesto">Repuesto</value>
</select>
   
      <td width="124">&nbsp;</td>
    </tr>
    <tr>
      <td><p align="center">Marca </p>
        <p align="center">
          <label for="marca"></label>
          <input type="text" name="marca" id="marca" />
        </p></td>
      <td><p align="center">Modelo</p>
        <p align="center">
          <input name='mode' type='text' />
        </p>
      </p></td>
      <td><p align="center">Status</p>
        <p align="center">
          <label for="status"></label>
          <label for="select"></label>
          <select name="status" id="select">
            <option>Ativo</option>
            <option>Inactivo</option>
          </select>
        </p></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><p align="center">Numero de Solicitud</p>
        <p align="center">
          <input name='nums' type='text' />
        </p></td>
      <td><br />
        <input name='enviar' type='submit' value='Registrar' />
        <input name='limpiar' type='reset' value='Limpiar' /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <div align="center"></div>
  <div align="right"></div>
  <p align="center">&nbsp;</p>
  </p>
	
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  </p>
 


    <div align="center"><br>
    </div>
</form>
