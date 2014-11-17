<?
session_start();




 
     
    

?>
<link href="../estilos/style0.css" rel="stylesheet" type="text/css" /> 
<link href="../estilos/estilos.css" rel="stylesheet" type="text/css" />
<h1 align="center">Registro de Unidades. </h1> 
<form method='post' action='../Controlador/RegistrarIngreso.php' enctype='multipart/form-data'> 
  
  <table width="400" border="0">
    <tr>
      <td  >
      Proveedor
          <input name='prov' type='text' />     </td>
      <td >Fecha de la compra. 
        <label for="fechai"></label>
        <input type="date" name="fechai" id="fechai" /></td>
      <td >
        Fecha de Solicitud
      <input type="date"name="fechas" id="fechas"  />      </td>
      <td >&nbsp;
  
        Tipo
        <label for="tipo"></label>
          <label for="label"></label>
          
            <select name="tipo" id="label">
              <option>Bus</option>
              <option>Camioneta</option>
              <option>Camion</option>
              <option>Auto pequeno</option>
              <option>Moto</option>
              <option>Metrobus</option>
              <option>Otro</option>
            </select>        </td>
    </tr>
    <tr>
      <td><p align="center">Marca</p>
        <p align="center">
          <label for="marca"></label>
          <label for="label2"></label>
          <select name="marca" id="label2">
            <option>Encava</option>
            <option>Yuton</option>
            <option>Chery</option>
            <option>Ford</option>
            <option>Chevrolet</option>
            <option>Toyota</option>
          </select>
        </td>
      <td>
        Placa
        
          <input name='placa' type='text' />       </td>
      <td>Modelo
        
          <input name='mode' type='text' />        </td>
      <td>
        Capacidad
       
          <input name='cap' type='text' />      </td>
    </tr>
    <tr>
      <td>Status
       
          <label for="status"></label>
          <label for="select"></label>
          <select name="status" id="select">
            <option>Activo</option>
            <option>Inactivo</option>
          </select>       </td>
      <td>Numero de Solicitud
       
          <input name='nums' type='text' />        </td>
      <td>Numero de La Unidad
       
          <input name='numero' type='text' />        </td>
      <td><br />
            <br />
            <input name='enviar' type='submit' value='Registrar' />
            <input name='limpiar' type='reset' value='Limpiar' />
      </div></td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
 

	

	<p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  </p></p>
</form>
