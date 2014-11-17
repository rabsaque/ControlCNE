<?php require_once('conexion.php');
$cn=  Conectarse();
$listado=  mysql_query("select * from  ingresosunidad",$cn);
?>

 <script type="text/javascript" language="javascript" src="js/jslistadoempleados.js"></script>



            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
                <thead>
                    <tr>
                        <th>Proveedor</th><!--Estado-->
                        <th>F_compra</th>
                         
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Placa</th>
						<th>Puestos</th>
						<th>Status</th>
						<th>Numero</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                       
                     
                    </tr>
                </tfoot>
                  <tbody>
                    <?php

     
                   while($reg=  mysql_fetch_array($listado))
                   {
                               echo '<tr>';
                               echo '<td >'.mb_convert_encoding($reg['proveedor'], "UTF-8").'';
							   echo '<td>'.mb_convert_encoding($reg['fec_com'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['tip'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['marc'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['mod_un'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['Placa'], "UTF-8").'</td>';
							   
		echo '<td>'.mb_convert_encoding($reg['cap_un'], "UTF-8").'</td>';
		echo '<td>'.mb_convert_encoding($reg['status'], "UTF-8").'</td>';
		echo '<td>'.mb_convert_encoding($reg['num_un'], "UTF-8").'</td>';	
echo'<td><form method="post" action="Modificar_Unidad.php"><input type="text" name="numb" value="'.mb_convert_encoding($reg['Placa'], "UTF-8"),'" hidden>
</input> 
<input type="submit" name="button" id="button" value="Mod" /> </form>


<form method="post" action="Borrar_Unidad.php">
<input type="text" name="numb" value="'.mb_convert_encoding($reg['Placa'], "UTF-8"),'" hidden>
<input type="submit" name="button" id="button" value="Borr" />
</form><form method="post" action="Imprimir_Unidad.php">
<input type="text" name="numb" value="'.mb_convert_encoding($reg['Placa'], "UTF-8"),'" hidden>
<input type="submit" name="button" id="button" value="Impr" />
</form></td>';		
                               echo '</tr>';
                     
                        }
                    ?>
                <tbody>
            </table>
